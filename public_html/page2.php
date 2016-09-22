Hi from page2<br/ >
<?php
if (isset($_GET['val'])){
$var=$_GET['val'];
foreach ($var as $value){
echo $value."<br />";
}
}
else {
echo "Sorry<br />";
}
$sel=$_GET['orange'];
echo $sel;
?>
