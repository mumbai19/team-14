<?php
require_once("db.php");
global $connection;

$title=$_POST['title'];
$step1=$_POST['step1'];
$step2=$_POST['step2'];
$step3=$_POST['step3'];
$step4=$_POST['step4'];

$query="Select * from wikihow_doc";
$result=mysqli_query($connection,$query);
$num=mysqli_num_rows($result);

$t=$num/3;

echo "her";
$query="Insert into wikihow_doc(id,title,language_id,step1,step2,step3,step4) values ($t,'$title',1,'$step1','$step2','$step3','$step4')";
//echo $query;
$result=mysqli_query($connection,$query);
//echo $result;

require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'en';
$target = 'mr';
$mtitle = $title;

$trans = new GoogleTranslate();
$result1 = $trans->translate($source, $target, $mtitle);

//echo $result;

$mstep1 = $step1;
$result2 = $trans->translate($source, $target, $mstep1);
//echo $row1;

//$mtitle 


$mstep2 = $step2;
$result3 = $trans->translate($source, $target, $mstep2);

$mstep3 = $step3;
$result4 = $trans->translate($source, $target, $mstep3);

$mstep4 = $step4;
$result5 = $trans->translate($source, $target, $mstep4);

$query="Insert into wikihow_doc(id,title,language_id,step1,step2,step3,step4) values ($result1,'$result2',2,'$result3','$result4','$result4','$mstep5')";
//echo $query;
$result=mysqli_query($connection,$query);



echo $result5;
header("Location: training_page.php");
exit();
?>



