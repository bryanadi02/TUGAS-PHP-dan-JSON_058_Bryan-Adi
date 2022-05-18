<title>Looping Through the Values| Bryan Adi</title>
<p>umur </p>
<?php
$jsonobj = '{"Hussein":22,"Xiao":35,"Ahmad":41}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>