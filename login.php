<?
if (isset($_POST)) {
    if (isset($_POST["nombre"]) && isset($_POST["password"])) {
        $nombre = $_POST["nombre"];
        $password = $_POST["password"];
        $recordar =$_POST["remember"];
        //$user  = mysqli_real_escape_string($_POST("username"));
        //$pass =mysqli_real_escape_string($_POST("password"));
        $con = new mysqli("mysql.hostinger.es", "u586597365_ficha", "logan1985", "u586597365_ficha");

        $sql = "SELECT * FROM LOGIN WHERE NAME='" . $nombre . "' AND PASS = md5('" . $password . "')";
        //die($sql);
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
           $row = $result->fetch_assoc();
            if ($recordar == "1") {

                setcookie("rem",$row["NAME"], time() + (3600 * 24 * 30), "/", $_SERVER["HTTP_HOST"], 0);
            }
           
            //time de la session
            $_SESSION["time"] = time();



            header("Location: /");
           
        } else {
            $display_msg["msg"] = "El usuario y/o el password introducidos son incorrectos";
            $display_msg["css_class"] = "alert-danger";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>AndroidVSApple</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>


            .login {
                background-color: #23282e;
            }

            .login .logo {
                width: 247px;
                margin: 0 auto;   
                margin-top:60px;
                padding: 15px;
                text-align: center;
            }  

            .login .content {
                background-color:#fff; 
                width: 291px;
                margin: 0 auto; 
                margin-bottom: 0px;
                padding: 30px;  
                padding-top: 20px;  
                padding-bottom: 15px;  
            }

            .login .content h3 {
                color: #000;
            }
            .login .content h4  {
                color: #555;
            }

            .login .content p {
                color: #222;
            }

            .login .content .login-form,
            .login .content .forget-form {
                padding: 0px;
                margin: 0px;
            }

            .login .content .m-wrap {
                width: 230px;
                border-left: 0 !important;
            }

            .login .content .input-icon {
                border-left: 2px solid #35aa47 !important;
            }

            .login .content .control-group {
                margin-bottom: 20px !important;
            }

            .login .content .input-icon .m-wrap {  
                line-height: 32px;
                background-color: #bdb8b8;
            }

            .login .content .forget-form {
                display: none;
            }

            .login .content .register-form {
                display: none;
            }

            .login .content .form-title {
                font-weight: 300;
                margin-bottom: 25px;
            }

            .login .content .form-actions {
                background-color: #fff;
                clear: both;
                border: 0px;
                border-bottom: 1px solid #eee;
                padding: 0px 30px 25px 30px;
                margin-left: -30px;
                margin-right: -30px;
            }

            .login .content .forget-form .form-actions {
                border: 0;
                margin-bottom: 0;
                padding-bottom: 20px;
            }  

            .login .content .register-form .form-actions {
                border: 0;
                margin-bottom: 0;
                padding-bottom: 0px;
            }

            .login .content .form-actions .checkbox {
                margin-top: 8px;
                display: inline-block;
            }

            .login .content .form-actions .btn {
                margin-top: 1px;
            }

            .login .content .forget-password {
                margin-top: 25px;
            }

            .login .content .create-account {
                border-top: 1px dotted #eee;
                padding-top: 10px;
                margin-top: 15px;
            }

            .login .content .create-account a {
                display: inline-block;
                margin-top: 5px;
            }

            .login .copyright {
                text-align: center;
                width: 250px;
                margin: 0 auto; 
                padding: 10px 10px 0 10px;
                color: #999;
                font-size: 11px;
            }

            @media (max-width: 480px) {
                /***
                Login page
                ***/
                .login .logo {
                    margin-top:10px;
                }

                .login .content {
                    padding: 30px; 
                    width: 222px;
                }

                .login .content h3 {
                    font-size: 22px;
                }

                .login .content .m-wrap {
                    width: 180px;
                }

                .login .checkbox {
                    font-size: 13px;
                }
            }
        </style>

    <body class="login">
        <!-- BEGIN LOGO -->
        <div class="logo">
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form name = "loginForm" id="loginForm" class="form-vertical login-form" method="POST" action="">
                <h3 class="form-title">Login</h3>
                <div class="alert alert-error hide">
                    <button class="close" data-dismiss="alert"></button>
                    <span>Introduce usuario y password.</span>
                </div>
<? if (isset($display_msg)) { ?>
                    <div class="alert <?= $display_msg["css_class"] ?> show">
                        <button class="close" data-dismiss="alert"></button>
                        <span><?= $display_msg["msg"]; ?></span>
                    </div>
<? } ?>
                <div class="control-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Usuario</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-user"></i>
                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Usuario" name="nombre"/>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="accion" value="login">
                <div class="control-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-lock"></i>
                            <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"/> Recuerdame
                    </label>
                    <button type="submit" class="btn btn-success pull-right">
                        Login <i class="m-icon-swapright m-icon-white"></i>
                    </button>            
                </div>
                <div class="forget-password">
                    <h4>Olvidaste tu password ?</h4>
                    <p>
                        No te preocupes, haz click <a href="/recordar/" class="">aqu&iacute;</a>
                        para solicitar la recuperaci&oacute;n de tu contrase&ntilde;a.
                    </p>
                </div>      
            </form>
            <!-- END LOGIN FORM -->         
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright">
            2017 &copy;androidvsandroid.com
        </div>
        <!-- END COPYRIGHT -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->

        <!-- END PAGE LEVEL SCRIPTS --> 
        <script>
            jQuery(document).ready(function () {




            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>