<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <i class="bi bi-people-fill"></i>  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" ></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{'css/login.css'}}">
</head>
<body>
    <div class="container-fluid bg-img">
        <div class="row">
            <div class="col-md-12 center"></div>
            <div class="col-md-1"></div>
            <div class="col-md-4 content " id="address">
                <form>
                    <div class="form-group">
                        <h2>LOGIN</h2>
                      <label for="exampleInputEmail1">Email Id</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="signup-link">New Employee ? <a href="#">Register Here</a></div>
                  </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>