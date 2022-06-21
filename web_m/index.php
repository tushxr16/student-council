<?php $root_path = '../'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
$un = "web_m";
$pass = "SA*01#";
session_start();
$message = "";
if (array_key_exists('login', $_POST)) {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    if ($user_name == "web_m" && $password == $pass) {
        $_SESSION["id"] = $user_name;
        $_SESSION["password"] = $password;
    } else {
        $message = "Invalid Username or Password!";
    }
}
?>
<head>
    <title>Web Master | Student Council</title>

    <?php include($root_path . 'assets/include/header-files.php'); ?>
    <style>
        .login-box {
            background-color: #1ABC9C;
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }

        .login-box div {
            text-align: center;
        }

        .login-head {
            padding: 20px;
            font-size: 20px;
            color: beige;
            font-family: 'Lato';
        }

        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 999px;
            bordeR: none;
        }

        input:focus {
            outline-width: 0;
        }

        .login-button {
            width: 50% !important;
            background-color: #FFF;
            color: #333;
        }

        .login-button {
            width: 50% !important;
            background-color: #FFF;
            color: #333;
        }

        .select-button {

            background-color: #333;
            color: #ddd;
            margin-bottom: 20px;
        }

        .head {
            text-align: center;
            font-size: 25px;
            font-weight: 500;
            font-family: 'Jost';
            padding: 10px;
        }

        .ins {
            max-width: 500px;
            margin: auto;
            padding: 10px;
        }

        .upload-box {
            max-width: 500px;
            margin: auto;
            text-align: center;
        }

        .upload-button {
            background-color: #555;
            color: #ddd;
            max-width: 140px;
        }

        .logout {
            text-align: right;
            width: 90%;
        }

        .logout-button {
            background-color: #EE2F2F;
            color: #ddd;
            max-width: 140px;
            margin-left: auto;
        }
    </style>
</head>

<body style="background-color:#eee;">
    <?php
    if (array_key_exists('logout', $_POST)) {
        unset($_SESSION['id']);
        unset($_SESSION['password']);
    }

    ?>
    <?php if (isset($_SESSION["id"]) && $_SESSION["id"] == $un && isset($_SESSION["password"]) && $_SESSION["password"] == $pass) {
    ?>
        <div class="logout">
            <form method="POST">
                <input type="submit" name="logout" value="Logout" class="logout-button">
            </form>
        </div>


        <div class="container" style="margin-top:30px;">
            <div class="row justify-content-center">
                <form name="login-user" method="post">
                    <input type="submit" name="consti" value="Upload Constitution" class="select-button">
                </form>
            </div>
        </div>

        <?php
        if (array_key_exists('consti', $_POST)) { ?>
            <div class='head'>UPLOAD CONSTITUTION</div>
            <div class="ins">
                <strong>Instructions</strong>
                <ol>
                    <li>Rename the file to "constitution.pdf".</li>
                    <li>Click on Choose Files and navigate to the directory to choose file. \OR\ Drag and drop the file over Choose Files Button.</li>
                    <li>Click on Upload.</li>
                </ol>
            </div>
            <div class="upload-box">
                <form action="file_upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="files[]" multiple>
                    <input type="submit" name="upload_consti" value="Upload" class="upload-button">
                </form>
            </div>
        <?php
        }
        ?>
    <?php } else { ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="login-box">
                        <div class="login-head">
                            LOGIN
                        </div>
                        <form name="login-user" method="post">
                            <input type="text" name="user_name" placeholder="Username">
                            <br>
                            <input type="password" name="password" placeholder="Password">
                            <br><br><br>
                            <input type="submit" name="login" value="Log In" class="login-button">
                        </form>
                        <?php if ($message != "") {
                            echo "<br>" . $message;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <?php include($root_path . 'assets/include/footer-files.php'); ?>

</body>

</html>