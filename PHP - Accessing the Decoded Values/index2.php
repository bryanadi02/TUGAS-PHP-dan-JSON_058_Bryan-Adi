<title>Accessing the Decoded Values 2| Bryan Adi</title>
<p>umur </p>
<?php
$jsonobj = '{Hussein":22,"Xiao":35,"Ahmad":41}';

$arr = json_decode($jsonobj, true);

echo $arr["Hussein"];
echo $arr["Xiao"];
echo $arr["Ahmad"];
?>