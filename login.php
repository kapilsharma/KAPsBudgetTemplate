<?PHP require_once "config.php" ?>
<!DOCTYPE html>
<html class="bg-black">
<?PHP include $config['base_path'] . "parts/login-head.php"; ?>
    <body class="bg-black">
        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="../../index.html" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    <a href="register.html" class="text-center">Register a new account</a>
                </div>
            </form>
        </div>
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?= $config['base_url']; ?>js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>