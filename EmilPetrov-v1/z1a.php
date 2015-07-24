<html>
  <head>
  	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <form method="POST" action="z1a.php">
      Въведете дневна температура: <input type="text" name="temp"/>
      <input type="submit"/>
    </form>
    <br/>
<?php
if (!empty($_POST)){
  $t=intval($_POST['temp']);
  if ($t>16 && $t<28) { echo "<b>Умерено</b> - ще се диша с лекота!"; }
  elseif ($t>27 && $t<35) { echo "<b>Топло</b> - увеличете бирата!"; }
  elseif ($t>34 && $t<43) { echo "<b>Много топло</b> - въобще не става за работа, отивайте на плаж!"; }
  else { echo "Въведете стойност от 17 до 42!!!"; }
}
?>  
  </body>
</html>