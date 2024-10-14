<!DOCTYPE html>
<html>
    <head>
        <title> Μισθοδοσία Υπαλλήλου -php31.php </title>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body> 
<?php
//  Εμφανίζει τα  στοιχεία 
// τα καταχωρεί στην βάση Μισθοδοσία (mdata ) και πίνακα erg 

echo " <h2> Μισθοδοσία Υπαλληλων ! </h2> ";
echo "<br>";
$kodikos =$_POST["kodikos"];
$onomEpon = $_POST["onomEpon"];
$wrErg =$_POST["wrErg"];
$wrM =$_POST["wrM"];

echo " Κωδικός  Υπαλλήλου  $kodikos<br>";
echo " Ονοματεπώνυμο Υπαλλήλου  $onomEpon <br>";
echo " Ωρες Εργασίας   $wrErg <br> "; 
echo " Ωρομίσθιο    $wrM <br> "; 
echo "<h3> Καταχώρηση Δεδομένων  </h3>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mdata";
// Δημιουργία σύνδεσης
$conn = new mysqli($servername, $username, $password, $dbname);

// Έλεγχος σύνδεσης
if ($conn->connect_error) {
    die("Η σύνδεση απέτυχε: " . $conn->connect_error);
}

// Προετοιμασία του SQL ερωτήματος
$sql = "INSERT INTO erg (kodikos,onomEpon,wrErg,wrM) VALUES (?,?,?,?)";

// Προετοιμασία του statement
$stmt = $conn->prepare($sql);

// Έλεγχος αν το statement προετοιμάστηκε σωστά
if ($stmt === false) {
    die("Σφάλμα κατά την προετοιμασία: " . $conn->error);
}

// Δέσμευση των παραμέτρων στο SQL ερώτημα
$stmt->bind_param("sssd",$kodikos,$onomEpon,$wrErg,$wrM);

// Εκτέλεση του ερωτήματος
if ($stmt->execute()) {
    echo "Η εγγραφή προστέθηκε επιτυχώς!";
} else {
    echo "Σφάλμα κατά την εισαγωγή: " . $stmt->error;
}

// Κλείσιμο του statement
$stmt->close();

// Κλείσιμο της σύνδεσης
$conn->close();
?>
?>


?>
</body>
 </html>