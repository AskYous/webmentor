<?php
    ini_set('display_errors', 'On');

$array = array("foo", "bar", "hello", "world");
//var_dump($array);
$conn=mysql_connect('localhost', 'root', 'tiger');
mysql_select_db("webmentordb",$conn);
print ("initially array: ");
var_dump($array);
echo "<br>";
print ("serialized array: ".serialize($array));
echo "<br>";
$array_string=mysql_real_escape_string(serialize($array));
$test=mysql_query("INSERT INTO temp (abc) VALUES('$array_string')");
//echo "INSERT INTO temp (abc) VALUES ('$array_string')";
if($test==true)
{echo "done";
echo "<br>";
}
else
{mysql_error();
echo "<br>";
}

$q=mysql_query("select abc from temp");
$rs=mysql_fetch_assoc($q);
//while($rs=mysql_fetch_assoc($q))
//{
//$array= unserialize($rs['abc']);
$array= unserialize($rs['abc']);
print "unserialized array: ".$rs['abc'];
echo "<br>";
print_r($array);

?>