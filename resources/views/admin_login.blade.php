<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        .center {
            margin: auto;
            padding-top: 170px;
                }
        .content{
                  background-color: cornflowerblue; 
                  height: 20em;
                  text-align: center;
                  border-radius: 15px;
                }
        #address label {
                        display: inline-block;
                        width: 5em;
                        text-align: right;
                        padding-right: 0.5em;
                        }
        #address input {
                        display: inline-block;
                        width: 200px;
                        margin-left: 10px;
                        }
        .linespacing_input{
                            padding-top:1em ;
                        }
                        a{
                            text-decoration: none;
                            /* margin-top: 1em; */
                        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 center"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4 content " id="address">
                <form action="">
                    <h2 style="text-align:center;padding-top: 30px; padding-bottom: 10px;"><b>LOGIN</b></h2>
                    <div class="linespacing_input">
                        <label for="username">USERNAME </label>
                        <input type="text" class="form-control">
                    </div>
                    <div  class="linespacing_input">
                        <label for="password">PASSWORD </label>
                        <input type="pas" class="form-control">
                    </div>
                    <button type="button" class="btn btn-dark" style="margin-top: 20px;">LOGIN</button><br>
                   <a href="">Forgot Password ?</a>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>