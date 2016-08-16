<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>skyhub</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="static-content/css/style_1.css">
    <link rel="stylesheet" href="static-content/css/style_2.css">
    <link rel="stylesheet" href="static-content/css/style_3.css">

</head>
<body class="logged-out  env-production macintosh  session-authentication page-responsive min-width-0">
    
    <div role="main" style="padding-top:40px;">
        <div id="js-pjax-container" data-pjax-container="">
            <div class="auth-form px-3" id="login">
                <form action="" method="POST">      
                    <div class="auth-form-header p-0">
                        <h1><img src="static-content/images/logo.png" width="60"><br>Welcome to skyhub</h1>
                    </div>
                    <div id="js-flash-container">
                        <div class="flash flash-full flash-error">
                          <div class="container">
                            <button class="flash-close js-flash-close" type="button" aria-label="Dismiss this message">
                              <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                            </button>
                            Incorrect username or password.
                          </div>
                        </div>
                    </div>
                    <div class="auth-form-body mt-3">
                        <label for="login_field">
                           Enter a new password.
                        </label>
                         <input class="form-control form-control input-block" id="new_password" name="new_password" type="password" required="">
                        <label for="login_field">
                           Re-enter your new password
                        </label>
                        <input class="form-control form-control input-block" id="re_new_password" name="re_new_password" type="password" required="">
                        <input class="btn btn-primary btn-block" type="submit" value="Send password reset email">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="site-footer" role="contentinfo">
        <ul class="site-footer-links">
            <li><a href="">About</a></li>
            <li><a href="">Terms</a></li>
            <li><a href="">Developers</a></li>
        </ul>
    </div>

</body>
</html>