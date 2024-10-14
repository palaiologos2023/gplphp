<!DOCTYPE html>
<!-- Εντολή while Παράδειγμα 1
  
-->
<html>
    <head>
        <title>  While 1 </title>
        <meta charset="utf-8">
	</head>
<body>
<h1> Παράδειγμα με την  εντολή επανάληψης while  </h1>
<h2> Εμφανίζει από το 1 μέχρι το 6 </h2> <p style="color:green"> να εμφανίζει από το 0 εως και το 10 </p>
<?php
$i =1;
 while ( $i < 6){
echo "  H τιμή της μεταβλητής είναι  "; 
echo "$i!";
echo "<br>";
 $i++;
}
echo "<hr>";
print "<p style ='color:red'> Από το 1 μέχρι το 50 με βήμα 5  αλλαγή από το 100 εως το 20 βήμα 8</p>" ;
$i = 1;
while  ( $i < 50 )
{
echo "  H τιμή της μεταβλητής είναι  "; 
echo "$i!";
echo "<br>";
$i=$i+5;
}
?>
</body
</html>