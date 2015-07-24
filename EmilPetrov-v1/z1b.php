<!--Метода който избрах за предаване на даннте е POST, понеже ще се предават поверителни
    данни и не бива да се виждат в URL-то. -->
<html>
  <head>
  	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <form method="POST" action="z1b.php">
      Password: <input type="password" name="pass1"/><br/><br/>
      Repeat password: <input type="password" name="pass2"/><br/><br/>
      <input type="submit"/>
    </form>
    <br/>
<?php
  if (!empty($_POST)) {
    $p1=trim($_POST['pass1']);
    $p2=trim($_POST['pass2']);
    if ($p1 != $p2) {
  	  echo "Паролите не съвпадат!!!";
    }
    elseif (strlen($p1)<6) {
  	  echo "Паролата трябва да е 6 или повече символа!!!";
    }
    else {
  	  echo "OK";
    }
  }
?>
  </body>
</html>