<title>Accessing the Decoded Values| Bryan Adi</title>
<p>umur </p>
<?php
$jsonobj = '{"Hussein":22,"Xiao":35,"Ahmad":41}';

$obj = json_decode($jsonobj);

echo $obj->Hussein;
echo $obj->Xiao;
echo $obj->Ahmad;
?>