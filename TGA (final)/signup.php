<?php include 'hng/signup.php'; ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="HNG Task 2.">
    <!-- app manifest file -->
    <link rel="manifest" href="appManifest.json"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup Page</title>
    <link rel="apple-touch-icon" href="logo.png">
    <!-- fontawesome CDN -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header>
        <div id="logo-container">
            <a href="" id="logo">
                <span id="logo-team-text">Team </span>TGA
            </a>
            <!-- no toggle button for now -->
            <!-- <button id="toggle-btn">
                <span id="toggle-btn-line"> </span>  
            </button> -->
        </div>
    </header>
    <main>
        <section class="login-section">
            <article class="translation-conatiner">
                <div class="container">
                    <h1 id="txt-select-language">select  language</h1>
                </div>
                <div class="container">
                    <div class="translation-btns">
                        <button id="translate-english" class="translation english" title = "English">eng</button>
                        <button id="translate-espanol" class="translation espanol spanish" title = "Espanol">esp</button>
                        <button id="translate-french" class="translation french" title = "French">fra</button>
                        <button id="translate-german" class="translation german" title = "German">ger</button>
                        <button id="translate-chinesse" class="translation chinesse chinese" title = "Chinesse">chi</button>
                    </div>
                </div>
            </article>
            <article class="form-login-article">
                <form action="signup.php" id="login-form" method="POST">
                    <h1 id="form-login-title" class="form-title">Sign Up Details</h1>
                    <?php
                        if (isset($message)) {
                            echo $message;
                        }
                    ?>
                    <div class="input-container input-container__username">
                        <label for="user__name">
                            <i class="far fa-user"></i>
                            <p id="label-username-text" class="username-text">Fullname</p>
                        </label>
                        <input type="text" id="user__name" autofocus  autocomplete="username" name="fullname" required>
                    </div>
                    <div class="input-container input-container__username">
                        <label for="user__name">
                            <i class="far fa-user"></i>
                            <p id="label-username-text" class="email">Email Address</p>
                        </label>
                        <input type="email" id="user__name" autofocus  autocomplete="username" name="email" required>
                    </div>
                    <div class="input-container input-container__password">
                        <label for="user__password">
                            <i class="fas fa-lock"></i>
                            <p id="label-password-text" class="password-text">Password</p>                            
                        </label>
                        <input type="password" id="user__password"  autocomplete="current-password" name="password" required>
                    </div>
                    <input id="loginBtn" type="submit" value="Sign Up" class="button" name="submit">
                    <div class="form-extra-function">
                        <p class="signup left-float" role="button" tabindex="-1">Already have an account?</p>
                        <a class="sup" href="login.php">Login</a>
                    </div>
                </form>
            </article>
        </section>
    </main>

    <!-- the frontend javascript for this page -->
    <script src="sign-up.js"></script>
</body>
</html>