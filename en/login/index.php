<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Form View -->
    <div id="login">
      <div class="form cf">
        <div class="row">
          <h1>Login</h1>
          <form class="col s12" id="myform">
            <div class="row">
              <div class="input-field col m8 offset-m2 s12">
                <input id="name" type="text">
                <label for="name">Username</label>
              </div>
              <div class="input-field col m8 offset-m2 s12 ">
                <input id="password" type="text">
                <label for="password">Password</label>
              </div>
              <div class="input-field col m8 offset-m2 s12 checkboxFix">
                <p>
                  <input type="checkbox" id="test5" />
                  <label for="test5">Remember password?</label>
                </p>
              </div>
              <div class="submit center-align col s12">
                <button id="postData" class="btn waves-effect waves-light">
                  Login
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div><!--/#indexView-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  </body>
</html>
