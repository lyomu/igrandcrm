<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Sign in Form with Icons</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body{
    /* background: url(nai.jpg); */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-blend-mode: color;
}
.login-form {
    width: 340px;
    margin: 80px auto;
}
.login-form form {        
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
    padding-bottom: 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.input-group-addon .fa {
    font-size: 18px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
.bottom-action {
  	font-size: 14px;
}
.btn{
    background: #003333;
    color: white;
}
.form-group{
padding: 5px;
}

</style>
</head>
<body>
<div class="login-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <p class="sub-heading text-center"><span class="sign-in-page-desktop-text12">Welcome back!</span>
            <span>👋</span></p>
        <h2 class="text-center"> Sign in to Your Account</h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" placeholder="Username" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" placeholder="Password" required="required">
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn  btn-block">Log in</button>
        </div>
        <div class="bottom-action clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center small">Don't have an account! <a href="#">Sign up here</a>.</p>
</div>
</body>
</html>