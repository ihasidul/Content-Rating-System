<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>

    <script src="scripts/Validation.js"></script>
</head>

<body>




    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4 text-muted">Welcome, Please Login Using ID and Password</h3>
                                <form name="loginForm" action="LoginController/loginUser" method="post" onsubmit="return isTheIdAndPassEmpty()">
                                    <div class="form-label-group">
                                        <input type="text" name="id" id="id" class="form-control" placeholder="Enter Your Id" autofocus>
                                        <label for="id">ID</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>

                                    <!-- <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                                    </div> -->
                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="submit" formmethod="post">Login</button>
                                    <a href="./LoginController/loadSignUp" class="btn btn-lg btn-info btn-block btn-signup text-uppercase font-weight-bold mb-2">SignUp</a>
                                    <!--<div class="text-center">
                                        <a class="small" href="#">Forgot password?</a>
                                    </div>-->
                                </form>
                                <!-- <button class="btn btn-lg btn-info btn-block btn-signup text-uppercase font-weight-bold mb-2" formaction="./LoginController/loadSignUp" name="signUp">Sign Up</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>