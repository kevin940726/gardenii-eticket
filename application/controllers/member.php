<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('Event_model');
        $this->load->model('Member_model');
        $this->load->driver('session');
        $this->load->helper('url');

        date_default_timezone_set("Asia/Taipei");

        if($this->session->has_userdata('user')){
			$this->user = $this->session->userdata('user');
		}
		else{
			$this->user['logged_in'] = false;
		}
    }

    //會員資訊首頁
    //包含已舉辦活動 已參加活動
	public function index() {
		$data = array();
		if ($this->user['logged_in']){
			$data['user'] = $this->user;

			$this->load->view('/member/memberinfo',$data);
		}
		else{
			$data['user'] = NULL;

			$this->load->view('/errors/notlogged',$data);
		}
		
	}

	//會員申請成為主辦人
	public function apply() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/member/contract',$data);

	}

	//申請主辦人資格處理
	public function apply_handler() {
		$data = array();
		$data['user'] = $this->user;

		$res = $this->Event_model->sign_contract($data['user']['user_id']);
		if($res) {
			$data['user']['auth'] = true;
			$this->session->set_userdata('user', $data['user']);
			redirect('/member/launch','refresh');
		}
	}

	//主辦人新增活動頁面
	public function launch() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/member/launch',$data);
	}

	//新增活動處理
	public function launch_handler() {
		$this->load->helper('date');

		$data = array();
		$data['user'] = $this->user;

		$post = $this->input->post();

		$config['upload_path'] = './assets/images/events/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = false;
        $config['max_size'] = '2000';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name'] = true;

        $post['event_photo'] = "";
        $this->load->library('upload',$config);
        if ( ! $this->upload->do_upload('event_photo'))
        {
        	//圖片上傳錯誤
            $error = $this->upload->display_errors();
        }
        else
        {
        	//圖片上傳成功//取得圖片檔名
            $image = $this->upload->data();
            $post['event_photo'] = $image['file_name'];
           
        }

		$post['create_time'] = date('Y-m-d H:i:s',now());
		$post['last_edit_time'] = $post['create_time'];
		$post['creater_id'] = $data['user']['user_id'];

		$post['block_count'] = substr($post['site_type'], 0, 2);

		$res = $this->Event_model->insert_event($post);

		if ($res) {
			
			redirect('/member/launch_step2/'.$res.'/'.$post['creater_id'],'refresh');
		}
	}

	//設定活動座位資訊
	public function launch_step2($event_id='',$creater_id='') {
		$data = array();
		$data['user'] = $this->user;

		// if($creater_id != $data['user']['user_id']){
		// 	redirect('/member','refresh');
		// }

		$data['event'] = $this->Event_model->get_event_info($event_id);
		$character = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T");
		$data['character'] = array_slice($character, 0, $data['event']->block_count);

		$this->load->view('/member/launch_step2',$data);
	}

	public function launch_step2_handler() {
		$data = array();
		$data['user'] = $this->user;

		$post = $this->input->post('info');

		$res = $this->Event_model->set_seat_info($post);

		if ($res) {
			redirect('/member','refresh');
		}

	}

	//編輯活動
	public function edit_event($event_id = "") {
		$data = array();
		$data['user'] = $this->user;

		$data['event'] = $this->Event_model->get_event_info($event_id);
		

		$this->load->view('/member/edit_event',$data);
	}

	public function edit_handler($event_id) {
		$this->load->helper('date');

		$post = $this->input->post();
		$post['last_edit_time'] = date('Y-m-d H:i:s',now());

		// var_dump($post);
		// exit(0);

		$res = $this->Event_model->update_event($post, $event_id);
		
		redirect('/member','refresh');
	}

	//會員註冊
	public function register() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/member/register',$data);
	}

	//會員註冊處理
	public function register_handler(){

		//post
		$account=$_POST['account'];
		$password = $_POST['password'];
		$name=$_POST['name'];
		$email=$_POST['email'];

		if (strlen($password) < 6){
			$this->output->set_content_type('application/json')->set_output("no");
		}

		$cost = 10;

		// Create a random salt
		$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

		// Prefix information about the hash so PHP knows how to verify it later.
		// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
		$salt = sprintf("$2a$%02d$", $cost) . $salt;

		// Hash the password with the salt
		$hash = crypt($password, $salt);

		$res = $this->Member_model->register($account,$hash,$name,$email);
		$res_result=array();
		if (!$res){
			$res_result['result']='FAILURE';
			
		}
		else{
			$res_result['result']='SUCCESS';
			
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($res_result));
		
	}

	//會員登入
	public function login(){

		$account=$_POST["account"];
		$password=$_POST["password"];
		
		$res = $this->Member_model->login($account,$password);
		if ( $res == 0){
			echo "<script>alert('登入失敗，帳號或密碼錯誤');</script>";	
			redirect('/main','refresh');		
		}
		else{
			
			$newdata = array(
				'user_id' => $res['user_id'],
				'name' => $res['name'],
				'auth' => $res['auth'],
				'account' => $account,
				'logged_in' => TRUE,
				'email' => $res['email']
			);
			$this->session->set_userdata('user', $newdata);
			redirect('/main','refresh');
		}
	}

	//會員登入
	public function logout(){
		//清除session
		//導回首頁
		$this->session->sess_destroy();
		redirect('/main','refresh');
		
	}

	public function test_session(){
		$this->output->set_content_type('application/json')->set_output(json_encode($this->session->userdata('user')));
		var_dump($this->user);
	}


}
