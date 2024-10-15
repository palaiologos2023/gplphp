<!DOCTYPE html>
<!-- 
  
-->
<html>
<head>
        <title>   string  </title>
        <meta charset="utf-8">
	</head>
<body>
<?php  
$st1="Καλη μέρα";
echo $st1;
echo "<br>";
echo "Μήκος με strlen() είναι  ";
echo strlen($st1);
echo "<br>";
echo "Μήκος με mb_strlen() είναι  ";
echo mb_strlen($st1,"UTF-8");
echo "<br>";
$st2="Good Morninng";
echo $st2;
echo "<br>";
echo "Μήκος με strlen() είναι ";
echo strlen($st2);
echo "<br>";
echo "Μήκος με mb_strlen() είναι  ";
echo mb_strlen($st2,"UTF-8");
echo "<br>";
$fch1="M";
echo "Βρίσκει την θέση που είναι ένας χαρακτήρας $fch1  με την συνάρτηση strpos ";
$ap=strpos($st2,$fch1,0);
echo " είναι στήν θέση $ap <br> " ;
$rch1=substr($st2,$ap,1);
echo "O χαρακτήρας είναι $rch1 <br>";
// για ελλνικους χαρακτήρες mb_substr(string1,start,length, encoding)
echo strtoupper("test");
echo "<br>";
echo strtolower("teST");



?>
</body>
</html>

