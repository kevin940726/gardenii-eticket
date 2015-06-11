<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="E-ticket prototype">
    <meta name="author" content="NTU IM 105">
    <link rel="icon" href="../../favicon.ico">

    <title>E-ticket</title>

    <!-- Bootstrap core CSS -->
    <link href="/gardenii-eticket/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/gardenii-eticket/assets/css/material-fullpalette.min.css" rel="stylesheet"> -->
    <link href="/gardenii-eticket/assets/css/material.min.css" rel="stylesheet">
    <link href="/gardenii-eticket/assets/css/ripples.min.css" rel="stylesheet">
    <link href="/gardenii-eticket/assets/css/roboto.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/gardenii-eticket/assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="/gardenii-eticket/assets/css/font-awesome.min.css" />

    <!-- Custom styles for this template -->
    <link href="/gardenii-eticket/assets/css/app.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/gardenii-eticket/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->      
  </head>
  <body>
    <div class="container">
      <?php $this->load->view("/header.php"); ?>

    
      <div>
       <table id='orders_table' class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>訂票人</th>
                <th>訂票區域</th>
                <th>聯絡電話</th>
                <th>電子郵件</th>
                <th>捐款</th>
            </tr>
        </thead>
    </table>

      </div>

    <?php $this->load->view("/footer.php"); ?>
    </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/gardenii-eticket/assets/js/bootstrap.min.js"></script>
    <script src="/gardenii-eticket/assets/js/material.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ripples.min.js"></script>
    <script src="/gardenii-eticket/assets/js/bookticket.js"></script>
    <script>
      $.material.init();
    </script>
    <script type="text/javascript">

    var orders_str = '<?php echo $orders; ?>';
    var orders = JSON.parse(orders_str);
    console.log(orders);
    var donate_str={
        "1":"線上",
        "2":"現場",
        "3":"否"
    };
    
    $(function(){
        $(orders).each(function(i,order){
            $('#orders_table')
                .append(
                    $('<tbody/>')
                    .append(
                        $('<tr/>',{"class":""})
                        .append(
                            $('<td/>').html(i)
                        ).append(
                            $('<td/>').html(order.buyer_name)
                        ).append(
                            $('<td/>').html(order.seat)
                        ).append(
                            $('<td/>').html(order.buyer_phone)
                        ).append(
                            $('<td/>').html(order.buyer_email)
                        ).append(
                            $('<td/>').html(donate_str[order.donate_way])
                        )
                    )
                )

        });


        // <tbody>
        //     <tr class='warning'>
        //         <td>1</td>
        //         <td>黃劭安</td>
        //         <td>A1,A2,A3</td>
        //         <td>12</td>
        //     </tr>
        // </tbody>


    });

    </script>
  </body>
</html>
