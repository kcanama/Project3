<?php 
$a = $_POST['artist'];
$m = $_POST['medium'];
$n = $_POST['nabe'];
$s = $_POST['street'];
$x = $_POST['xstreet'];
$u = $_POST['user'];
//retrieve the Json file and converted it into php array
$d = file_get_contents('data.json');
$d = json_decode($d, true);
//format the id
$i = count($d);
$i = ++$i;
// insert my variables into an array stored in a variable called $add
$add = array(
	"id" => $i,
	"artist" => $a,
	"medium" => $m,
	"nabe" => $n,
	"street" => $s,
	"xstreet" => $x,
	"user" => $u
);
// append my new array into the json array
array_push($d, $add);
// take my updated json array, format it back into Json and Overwrite it into the Json file
$d = json_encode($d);
file_put_contents('data.json', $d);
// Store the image on my service
$t = $_FILES['photo']['tmp_name'];
$f = "assets/img/$i.jpg";
move_uploaded_file( $t, $f);
header('location:gallery.php');
?>