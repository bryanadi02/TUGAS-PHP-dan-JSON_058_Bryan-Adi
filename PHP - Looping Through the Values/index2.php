<title>Looping Through the Values 2 | Bryan Adi</title>
<p>umur </p>
<?php
$jsonobj = '{"Hussein":22,"Xiao":35,"Ahmad":41}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>