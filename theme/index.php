<?phpsession_start();?>
<html>
<head>
    <title>欢迎来到论坛系统</title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
        <link href="./assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css">
        <link href="./assets/global/css/plugins.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="./assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css">
        <link href="style/register.css" type="text/css" rel="stylesheet">
</head>
<body style="overflow:-Scroll;overflow-x:hidden">
        <div class="boxes" >
            <h2 class="header">用户注册</h2>
            <div class="portlet-body form">
                <form action="#" class="form-horizontal">
                    <div class="form-body">

                        <div class="form-group">
                            <label class="col-md-3 control-label">用户名</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon input-circle-left">
                                          <i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control input-circle-right" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-3 control-label">密&nbsp&nbsp  码</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon input-circle-left">
                                          <i class="fa fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control input-circle-right" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-3 control-label">邮&nbsp&nbsp  箱</label>
                            <div class="col-md-4">
                                <div class="input-group">
                               <span class="input-group-addon input-circle-left">
                                   <i class="fa fa-envelope"></i>
                                </span>
                                    <input type="email" class="form-control input-circle-right" placeholder="Email Address"> </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-md-3 control-label">验证码</label>
                            <div class="col-md-4">
                                <div class="input-group">
                               <span class="input-group-addon input-circle-left">
                                   <i class="fa fa-barcode"></i>
                                </span>
                                    <input type="email" class="form-control input-circle-right" placeholder="Code"> </div>
                            </div>
                           <?php
                           include_once '../apis/code.class.php';
                           $vcode=new Vcode(100,30,4);
                           $vcode->getcode();
                           $vcode->view();
                           ?>
                        </div>
                    </div>
                    <div class="row">
                        <button type="button" class="btn btn-circle green ">取消</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-circle green">注册</button>
                    </div>


                </form>
                <!-- END FORM-->
            </div>
        </div>



</body>
</html>