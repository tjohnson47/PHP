<?php
$var=$_GET['first'];
$var1=$_GET['last'];
$var2=$_GET['pass'];
$mail=$_GET['email'];
$var3=$_GET['Gender'];
$var4=$_GET['val'];
$sel=$_GET['payment'];
$at=strpos($mail, '@');
$name=substr($mail,0,$at);
$end=substr($mail, $at + 1);
$dot=strpos($end, '.');
$dot2=strpos($mail, '.');
$last=substr($mail,$dot2 +1);
$po=substr($end,0,$dot);
$domain=substr($mail, $at + 1, strpos($mail,'.'));

if (empty($var)|| empty($var1) || empty($var2) || empty($var3) ||empty($var4) || empty($sel)|| empty($mail))
{
echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
}
else
{
echo "First Name:<br />";
echo $var."<br />";
echo "Last Name:<br />";
echo $var1."<br />";
echo "Password:<br />";
echo crypt($var2)."<br />";



if($at==true && $dot==true)
{
echo "Email"."<br />";
echo $mail."<br />";
echo $at."<br />";
echo $name."<br />";
echo strpos($mail, '.') ."<br />";
echo $po ."<br />";
echo $last ."<br />";
echo $domain ."<br />";
}

else
{
echo "You suck. That is an invalid e mail"."<br />";
echo "<a href=\"javascript:history.go(-1)\">Fill out form</a>" ."<br />";
}


echo "Gender:<br />";
echo $var3."<br />";

echo "Your Choices:<br />";
if (isset($_GET['val'])){
foreach ($var4 as $value){
echo $value."<br />";
}
}
echo "Payment Method:<br />";
echo $sel."<br />";
}

?>
