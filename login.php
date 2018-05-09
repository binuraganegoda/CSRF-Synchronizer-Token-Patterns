<?php

/**
 * Created by PhpStorm.
 * User: Ender
 * Date: 5/1/2018
 * Time: 2:58 PM
 */
?>

    <!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title> Assignment 01</title>
        <style>

            .wrapper
            {
                width:800px;
                margin:0 auto;
            }
            h1
            {
                font-size:24px;
                font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-weight:bold;
                color:#000;
            }
            h1 a
            {
                color:#000;
            }

            label
            {
                font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
                font-size:20px;
                font-weight:bold;
            }
            .input
            {
                padding:5px;
                font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
                font-size:18px;
            }
            input[type=submit]
            {
                padding:5px;
                font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
                font-size:18px;
                font-weight:bold;
                background:#999;
                border:2px solid black;
                color:#FFF;
            }
            .error
            {
                color:red;
                font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
                font-size:16px;
            }
        </style>
    </head>

    <body>


    <div class="wrapper">
        <h1>Cross-site-Request-Forgery-protection-in-web-applications-via-Synchronizer-Token-Pattern - IT16016026</a></h1>
        <table border="0">
            <tr>
                <td>
                    <form method="post" action="">
                        <table width="400" border="0" cellpadding="10" cellspacing="10">

                            <tr>
                                <td style="font-weight: bold"><div align="right"><label for="username">Username</label></div></td>
                                <td><input name="username" type="text" class="input" size="25" required /></td>
                            </tr>
                            <tr>
                                <td height="23" style="font-weight: bold"><div align="right"><label for="password">Password</label></div></td>
                                <td><input name="password" type="password" class="input" size="25" required /></td>
                            </tr>

                            <tr>
                                <td height="23"></td>
                                <td><div align="right">
                                        <input type="submit" name="submit" value="Login!" />

                                    </div></td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>

        </table>

    </div>



    </body>
    </html>

<?php
if(isset($_POST['submit'])){
    login();
}
?>

<?php

function login()
{

    $username='123@gmail.com';
    $password='12345678';


    $input_username = $_POST['username'];
    $input_pwd = $_POST['password'];


    if(($input_username == $username)&&($input_pwd == $password))
    {
        session_set_cookie_params(1000);
        session_start();
        session_regenerate_id();


        setcookie('session_cookie', session_id(), time() + 1000, '/');

        $_SESSION['CSRF_Token'] = generate_token();


        header("Location:form.php");
        exit;

    }
    else
    {
        echo "<script>alert('Please check the email and the password!')</script>";
    }


}

function generate_token()
{

    return sha1(base64_encode(openssl_random_pseudo_bytes(30)));

}