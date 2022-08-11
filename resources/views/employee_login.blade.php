<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <i class="bi bi-people-fill"></i>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{'css/login.css'}}">
    <style>
        div.error {
            font-size: small;
            /* background-color:#cc0000; */
            color: red;
            padding: 5px;
            margin-left: 1px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            display: block;
        }
    </style>

</head>

<body>
    <div class="container-fluid bg-img">
        <div class="row">
            <div class="col-md-12 center"></div>
            <div class="col-md-1"></div>
            <div class="col-md-4 content " id="address">
                <form id="login" action="">
                    <div class="form-group">
                        <h2>LOGIN</h2>
                        <label for="exampleInputEmail1">Email Id</label>
                        <input type="email" class="form-control" id="login_email" aria-describedby="emailHelp"
                            name="email">
                        <div id="err"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" id="login_btn">Submit</button>
                    <!-- <div class="signup-link">New Employee ? <a href="#">Register Here</a></div> -->
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script>

        $.validator.addMethod('mypassword', function (value, element) {
            return this.optional(element) || (value.match(/[a-zA-Z]/) && value.match(/[0-9]/));
        },
            'Password must contain at least one numeric and one alphabetic character.');

        $(document).ready(function () {

            $("#login").validate({
                submitHandler: function (form) {//submitHandler to get the input value from the form
                    var email = $('#login input[name="email"]').val();
                    var password = $('#login input[name="password"]').val();
                    localStorage.setItem("email", email);
                    localStorage.setItem("password", password);
                },
                rules: {
                    email: {
                        required: true,
                        email: true,

                    },

                    password: {
                        required: true,
                        mypassword: true



                    },
                },
                errorElement: 'div',
                submitHandler: function (form) {
                    window.location = "{{Route('employee_dashboard')}}";
                }

            });


        });
    </script>
</body>

</html>