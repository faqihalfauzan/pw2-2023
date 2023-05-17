<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="panel panel--static">
    <div class="panel__content left">
        <h1 class="panel__heading">Don't have an account?</h1>
        <p class="panel__copy">Ethical celiac hashtag taxidermy squid. Wayfarers distillery narwhal, kombucha jean shorts selvage meggings.</p>
        <button type="button" class="btn btn--secondary signup">Sign up</button>
    </div>
    <div class="panel__content right">
        <h1 class="panel__heading">Have an account?</h1>
        <p class="panel__copy">Ethical celiac hashtag taxidermy squid. Wayfarers distillery narwhal, kombucha jean shorts selvage meggings.</p>
        <button type="button" class="btn btn--secondary login">Log in</button>
    </div>
    
    <div class="panel panel--sliding">
        <div class="panel__content signup">
            <h1 class="panel__heading">Sign up</h1>
            <form id="signup">
                <input type="text" placeholder="Full name" class="input input--name">
                <input type="text" placeholder="Email" class="input input--email">
                <input type="text" placeholder="Password" class="input input--password">
                <button class="btn btn--primary" href="index.php">Sign up</button>
            </form>
        </div>
            
            <div class="panel__content login">
                <h1 class="panel__heading">Log in</h1>
                <form id="login">
                    <input type="text" placeholder="Email" class="input input--email">
                    <input type="text" placeholder="Password" class="input input--password">
                    <button class="btn btn--primary" href="index.php">Log in</button>
                    <a href="/">Forgot password?</a>
                </form>
        </div>
    </div>    
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script><script  src="./script.js"></script>

</body>
</html>
