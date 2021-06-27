<pre><?php
print_r($_POST);
//header("location: newuser.php");
?></pre>
<?php
extract($_REQUEST);
$file=fopen("store.txt","a");

fwrite($file,"Username :");
fwrite($file, $uname ."\n");
fwrite($file,"Name :");
fwrite($file, $name ."\n");
fwrite($file,"Mobile :");
fwrite($file, $mobile ."\n");
fwrite($file,"E-mail :");
fwrite($file, $email ."\n");
fwrite($file,"Father's Name :");
fwrite($file, $fname ."\n");
fwrite($file,"Father's Mobile :");
fwrite($file, $fmobile ."\n");
fwrite($file,"Address :");
fwrite($file, $address ."\n");
fclose($file);
//header("location: newuser.php");
?>


