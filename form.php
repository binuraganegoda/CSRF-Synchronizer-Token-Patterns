<!doctype html>
<html >
<head>
</head>
<body >


    <a class="navbar-brand" href="submit.php">Assignment 01</a>

        <?php if(isset($_COOKIE['session_cookie'])) {
            echo "<li class='nav-item'>
                        <a class='nav-link active' href='logout.php'>Logout</a>
                    </li>";
        }
        ?>




<div class="container">
    <div class="row" align="center" style="padding-top: 100px;">
        <div class="col-12">

            <div class="card">
                <h5 class="card-header">Profile info submit</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">


                            <?php if(isset($_COOKIE['session_cookie'])) {
                                echo "
						<form action='endpoint.php' method='POST' enctype='multipart/form-data'>
                            	<!-- CSRF Token -->
                            	<input type='hidden' name='CSRF_Token' id='CSRF_Token' value=''>   
                                
                            <div class='form-group row'>
                            	<label for='name' class='col-sm-2 col-form-label'>Full Name</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control' id='name' name='name' placeholder='Full Name' required>
                            </div>
                            </div>
                          
                          	<div class='form-group row'>
                                <label for='age' class='col-sm-2 col-form-label'>Age</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control' id='age' name='age' placeholder='age' required>
                            </div>
                          	</div>
							
							<div class='form-group row'>
                                <label for='degree' class='col-sm-2 col-form-label'>Degree</label>
                            <div class='col-sm-10'>
                                <input type='text' class='form-control' id='degree' name='degree' placeholder='Degree' required>
                            </div>
                          	</div>

                          	<div class='form-group row'>
                                <label for='year' class='col-sm-2 col-form-label'>Year</label>
                            <div class='col-sm-10'>
                                <input type='number' class='form-control' id='year' name='year' placeholder='Year' required>
                            </div>
                          	</div>

                                            
                                <button type='submit' class='btn btn-primary' id='submit' name='submit'>Submit</button>
                       </form>";
                            }
                            ?>

                            <script >

                                var request="true";
                                $.ajax({
                                    url:"endpoint.php",
                                    method:"POST",
                                    data:{request:request},
                                    dataType:"JSON",
                                    success:function(data)
                                    {
                                        document.getElementById("CSRF_Token").value=data.token;
                                    }

                                })
                            </script>







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