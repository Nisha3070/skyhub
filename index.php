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
    
    <div role="main">
        <div id="js-pjax-container" data-pjax-container="">
            <div class="auth-form px-3" id="login">
                <form accept-charset="UTF-8" action="/session" method="post">      
                    <div class="auth-form-header p-0">
                        <h1>Welcome to skyhub</h1>
                    </div>
                    <div id="js-flash-container"></div>
                    <div class="auth-form-body mt-3">
                        <label for="login_field">
                            Email Address
                        </label>
                        <input autocapitalize="off" autocorrect="off" autofocus="autofocus" class="form-control input-block" id="login_field" name="login" tabindex="1" type="text">
                        <label for="password">
                          Password <a href="/password_reset" class="label-link">Forgot password?</a>
                        </label>
                        <input class="form-control form-control input-block" id="password" name="password" tabindex="2" type="password">
                        <input class="btn btn-primary btn-block" data-disable-with="Signing in…" name="commit" tabindex="3" type="submit" value="Check In">
                    </div>
                </form>
                <p class="create-account-callout mt-3">
                    New to skyhub?
                    <a href="/join?source=login" data-ga-click="Sign in, switch to sign up">Create an account</a>.
                </p>
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