
<!doctype html>
<html >
<head>
   
</head>


<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="submit.php">Assignment 01</a>
    <ul class="nav justify-content-end">
        <?php if(isset($_COOKIE['session_cookie'])) {
            echo "<li class='nav-item'>
                        <a class='nav-link active' href='profile.php'>Profile</a>
                    </li>";
        }
        ?>

        <?php if(!isset($_COOKIE['session_cookie'])) {
            echo "<li class='nav-item'>
                        <a class='nav-link' href='login.php'>Login</a>
                    </li>";
        }
        ?>

        <?php if(isset($_COOKIE['session_cookie'])) {
            echo "<li class='nav-item'>
                        <a class='nav-link active' href='logout.php'>Logout</a>
                    </li>";
        }
        ?>


    </ul>





<div class="container">
    <div class="row" align="center" style="padding-top: 170px;">
        <div class="col-12">
            <h1 style="font-size: 70px;">Cross-site Request Forgery protection</h1>
        </div>
    </div>
    <div class="row" align="center" style="padding-top: 20px;">
        <div class="col-12">
            <h2 style="font-size: 50px;">Synchronizer Token Patterns</h2>
        </div>
    </div>
    <div class="row" align="center" style="padding-top: 10px;">
        <div class="col-12">
            <div>
                Binura Ganegoda : IT16016026
            </div>
            <div>
                3 rd Year Week End Cyber Security
            </div>
        </div>
    </div>

</div>

