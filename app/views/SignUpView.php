<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="#">Content Rating Site</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="card h-100 bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Your Account</h4>
            <p class="text-center">Get registered today!</p>
            <form method="POST" name="signup" onsubmit="return SignUpValidation()" action="signUpUser">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="user_email" class="form-control" placeholder="Email address" type="email">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="user_name" class="form-control" placeholder="Full name" type="text">
                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><span class="fa fa-phone"></span></span>

                    </div>
                    <input name="user_phone" class="form-control" placeholder="Phone number" type="number">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <select class="form-control" name="user_type">
                        <option selected disabled>Who are you?</option>
                        <option value="user">Normal User</option>
                        <option value="contentCreator">Content Creator</option>
                        <option value="critic">Critic</option>
                    </select>
                </div> <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="user_password" placeholder="Create password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="user_password_conf" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                </div> <!-- form-group// -->
                <p class="text-center">Have an account? <a href="../index">Log In</a> </p>
            </form>
        </article>
    </div> <!-- card.// -->

    </div>

    <footer>
        <!-- Footer content here. -->
    </footer>

</body>
<script>
    function SignUpValidation() {


        var name = document.forms["signup"]["user_name"].value;
        var password = document.forms["signup"]["user_password"].value;
        var phone = document.forms["signup"]["user_phone"].value;
        var email = document.forms["signup"]["user_email"].value;
        var conpass = document.forms["signup"]["user_password_conf"].value;
        var type = document.forms["signup"]["user_type"].value;


        /*console.log(email);
        console.log(password);
        console.log(name);
        console.log(phone);
        console.log(conpass);*/

        var regularexpression = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/


        if (name == "" || email == "" || password == "" || phone == "" || conpass == "" || type == "") {
            alert("Please Fill up All the Fields.");
            return false;
        } else if (!email.match(regularexpression)) {
            alert("Please enter a valid email");

            return false;
        } else if (phone.length < 11) {
            alert("Enter valid phone number");

            return false;
        } else if (password.length < 8) {
            alert("Password is too Short");

            return false;
        } else if (password != conpass) {
            alert("Password Doesn't Match");

            return false;
        } else {
            alert("Validation Successfull")
            return true;
        }


    }
    // function SignUpValidation() {
    //     var name = document.forms["signup"]["user_name"].value;
    //     var password = document.forms["signup"]["user_password"].value;
    //     var phone = document.forms["signup"]["user_phone"].value;
    //     var email = document.forms["signup"]["user_email"].value;
    //     var repeatpassword = document.forms["signup"]["user_password_conf"].value;
    //     var password = document.getElementById("user_password");

    //     var regularexpression = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i';
    //     var nameformat = '/^[A-Za-z]+$/';

    //     if (name == null || name == '') {
    //         alert("Name can't be blank");
    //         return false;
    //     }
    //     // if (password == null || password == '') {
    //     //     alert("Password can't be blank");
    //     //     return false;
    //     // } else if (password.length < 3) {
    //     //     alert('Password must be at least 3 characters long.');
    //     //     return false;
    //     // }


    //     if (!email.value.match(regularexpression)) {
    //         alert("Please enter a valid email.");
    //         document.signup.email.focus();
    //         return false;
    //     }
    //     if (!name.value.match(nameformat)) {
    //         alert("Please enter a valid name.");
    //         document.signup.name.focus();
    //         return false;
    //     }
    //     if (phone.value.length < 11) {
    //         alert("Enter valid phone number");
    //         document.signup.phone.focus();
    //         return false;
    //     }
    //     if (password.value.length < 8) {
    //         alert("Password is too Short");
    //         document.signup.password.focus();
    //         return false;
    //     }
    //     if (repeatpassword.value.length < 8) {
    //         alert("Password is too Short");
    //         document.signup.password.focus();
    //         return false;
    //     }
    //     if (password != repetpassword) {
    //         alert("Password Doesn't Match");
    //         document.singup.repeatpassword.focus();
    //         return false;
    //     }

    // }
</script>

</html>