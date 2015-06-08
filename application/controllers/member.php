<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public $user;

	public function __construct() {
        parent::__construct();
        $this->load->model('Event_model');
        $this->load->model('member_model');
        $this->load->driver('session');

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
		$data['user'] = $this->user;

		$this->load->view('/member/memberinfo',$data);
	}

	//會員申請成為主辦人
	public function apply() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/member/contract',$data);

	}

	//主辦人新增活動
	public function launch() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/member/launch',$data);
	}

	//新增活動處理
	public function publish_event() {
		$this->load->helper('date');

		$data = array();
		$data['user'] = $this->user;

		$post = $this->input->post();

		$post['create_time'] = date('Y-m-d H:i:s',now());
		$post['last_edit_time'] = $post['create_time'];
		// $post['user_id'] = $data['user']['user_id'];

		$post['block_count'] = substr($post['site_type'], 0, 2);

		var_dump($post);
		exit(0);


	}

	//管理活動
	public function manage_event() {
		$data = array();
		$data['user'] = $this->user;

		$this->load->view('/member/ticketrecord',$data);///temp view
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
		$res = $this->member_model->register($account,$password,$name,$email);
		if (!$res){
			$this->output->set_output("no");
		}
		else{
			$this->output->set_output("YES");
		}
		//$this->output->set_output(json_encode());
		
	}

	//會員登入
	public function login(){

		$account=$_POST["account"];
		$password=$_POST["password"];
		
		$res = $this->member_model->login($account,$password);
		if ( $res == 0){
			$this->output->set_output("登入失敗");
		}
		else{
			$this->output->set_output("登入成功");
			$newdata = array(
				'user_id' => $res,
				'account' => $account,
				'logged_in' => TRUE
			);
			$this->session->set_userdata('user', $newdata);
		}
	}

	//會員登入
	public function logout(){
		
		//清除session
		//導回首頁
	}
	public function test_session(){
		$this->output->set_output(json_encode($this->session->userdata('user')));
	}

}
