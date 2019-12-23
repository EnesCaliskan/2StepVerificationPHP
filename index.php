<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
</head>

<body>

<div id="login_status">Not logged in</div>
<div id="login_form">

Token: <input type = "text" id="google_code">
<input type = "submit" id = "submit_code"

</div>

<script src= "https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
</script>

<script type="text/javascript">
  $('input#submit_code').on('click', function() {

    var google_code = $('input#google_code').val();
    if (google_code.length > 4 ) {
      $.post('ajax/login.php', {google_code: google_code}, function(result) {

        if (result == 1) {
          $('div#login_status').text('Logged in!');
          $('div#login_form').hide();
        }
        else {
          ('div#login_status').text('Login Failed!');
        }
      });
    }

  });

</script>

</body>



</html>
