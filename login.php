<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Login | Signup InfoX 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">

		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
		
		
    </head>
    
	
	<body style="background-color:#000000">
       <?php include'includes/general/header.php'?>
	   <div class="signup" style="background-image: url(img/back.png)">
            <div class="middle">
                <div class="signup-widget widget">
                    <div class="widget-header">
                        <table>
                            <tbody><tr>
                                <td id="tab-login" class="current">
                                    <a href="login.php">
                                        Login
                                    </a>
                                </td>
                                <td><a href="index.html"><img width="150px" src="img/logo-infox.png"></a></td>
                                <td id="tab-signup">
                                    <a href="signup.php">Register</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="widget-body">
                        <form id="login-form" method="post" action="#"><!--><!-->
                            <input type="text" name="username_or_email" placeholder="Email or Username">
                            <input type="password" name="password" placeholder="Password">
                            <a id="forgotten" href="#forgotten">forgot?</a><!--><!-->

                            <button type="submit"><span class="ui-icon"></span>&nbsp;&nbsp;Log In</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>

       </body> 
     
</html>

           
    
