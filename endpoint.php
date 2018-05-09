<?php
/**
 * Created by PhpStorm.
 * User: Ender
 * Date: 5/2/2018
 * Time: 12:13 AM
 */
?>

<!doctype html>
<html >

<body >


    <a href="submit.php">Assignment 01</a>
    <ul class="nav justify-content-end">
        <?php if(isset($_COOKIE['session_cookie'])) {
            echo "<li class='nav-item'>
                        <a class='nav-link active' href='logout.php'>Logout</a>
                    </li>";
        }
        ?>


    </ul>


<div class="container">
    <div class="row" align="center" style="padding-top: 100px;">
        <div class="col-12">

            <div class="card">
                <h5 class="card-header">Profile Details</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">


                            <?php
                            if(isset($_COOKIE['session_cookie']))
                            {


                                session_start();
                                if ($_POST['CSRF_Token'] == $_SESSION['CSRF_Token'])
                                {
                                    $name=$_POST['name'];
                                    $age=$_POST['age'];
                                    $degree=$_POST['degree'];
                                    $year=$_POST['year'];

                                    echo "<div class='alert alert-primary' role='alert'>".$name."</div>";
                                    echo "<div class='alert alert-secondary' role='alert'>".$age."</div>";
                                    echo "<div class='alert alert-success' role='alert'>".$degree."</div>";
                                    echo "<div class='alert alert-info' role='alert'>".$year."</div>";

                                }
                                else
                                {
                                    echo "<script>alert('WARNING :: CSRF Found !!!')</script>";
                                }

                            }
                            ?>


                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>

</body>
</html>