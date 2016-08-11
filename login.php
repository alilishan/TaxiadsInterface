<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taxi Ads</title>

        <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="assets/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="assets/favicons/manifest.json">
        <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assets/favicons/favicon.ico">
        <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="assets/libs/bootstrap-3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/app-login.min.css">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        
        <div id="bg-image"></div>
        <div id="overlay"></div>

        <div class="container">
            
            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                
                <div class="login-from">
                    <div class="login-logo"></div>
                    <div class="contentMainHeading text-center">Log Into Your Account</div>

                    <form action="index.php?p=d" method="POST">
                        <label for="">Username</label>
                        <input type="text" class="contentLgInput sm-cli" />

                        <label for="">Password</label>
                        <input type="text" class="contentLgInput sm-cli" />

                        <button class="btn btn-block btn-ta-app btn-ta">Sign In</button>

                    </form>
                    
                </div>

                <div class="row bottom-links">
                    <div class="col-xs-6"><div class="para text-left"><a href="#">Forgot Password?</a> </div></div>
                    <div class="col-xs-6"><div class="para text-right"><a href="#">Don't have an account? Get Started</a> </div></div>    
                </div>
                
            </div>

        </div>


    </body>
</html>