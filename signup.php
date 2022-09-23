<?php
session_start();
require_once("functions/functions.php");

$username = getValue("username", "POST", "str", "");
$password = getValue("password", "POST", "str", "");
$password2 = getValue("password", "POST", "str", "");
$action = getValue("action", "POST", "str", "");


var_dump($_POST);
var_dump($username);
var_dump($password);
var_dump($password2);

$errorMsg = "";
if ($action == "login") {
    if ($username == "") {
        $errorMsg .= "&bull; Vui lòng nhập User Name.<br />";
    }
    if ($password == "") {
        $errorMsg .= "&bull; Vui lòng nhập Password.<br />";
    }
    if ($password2 == "") {
        $errorMsg .= "&bull; Vui lòng nhập lại Password.<br />";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
        }

        #signup .container #signup-row #signup-column #signup-box {
            margin-top: 30px;
            max-width: 600px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #signup .container #signup-row #signup-column #signup-box #signup-form {
            padding: 20px;
        }

        #signup .container #signup-row #signup-column #signup-box #signup-form #register-link {
            margin-top: -85px;
        }

        #signup-err-msg {
            width: 540px;
            margin: 30px auto;
        }
    </style>
    <title>signup</title>
</head>

<body>
    <div id="signup">
        <div class="container">
            <?php if ($errorMsg != "") { ?>
                <div class="alert alert-danger" id="signup-err-msg">
                    <?= $errorMsg ?>
                </div>
            <?php } ?>
            <div id="signup-row" class="row justify-content-center align-items-center">
                <div id="signup-column" class="col-md-6">
                    <div id="signup-box" class="col-md-12">
                        <form id="signup-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">SignUp</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value="<?= $username ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?= $password ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Confirm Password:</label><br>
                                <input type="password" name="password2" id="password2" class="form-control" value="<?= $password2 ?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="action" name="action" value="login" />
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!------ Include the above in your HEAD tag ---------->