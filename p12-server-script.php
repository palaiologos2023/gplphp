<!DOCTYPE html>
<!-- Εφαρμογή 12: Ιστοσελίδα με φόρμες για τη μεταφορά 
     δεδομένων σε εφαρμογή στον εξυπηρετητή 
     Αρχείο p12-server-script.php

     ΠΡΟΣΟΧΗ: Για να εκτελεστεί αυτό το σενάριο PHP απαιτείται η αποθήκευσή του  
              σε εξυπηρετητή ιστοσελίδων με δυνατότητα διερμηνείας κώδικα PHP.

     ΠΡΟΣΟΧΗ: Ο κώδικας παρέχεται ΩΣ ΕΧΕΙ και ΜΟΝΟ για τους σκοπούς της άσκησης.
              Συνιστάται η χρήση του ΜΟΝΟ ΓΙΑ ΕΚΠΑΙΔΕΥΤΙΚΟΥΣ ΣΚΟΠΟΥΣ 
              και σε τοπικό εξυπηρετητή ιστοσελίδων με εμβέλεια μόνο 
              το τοπικό δίκτυο του εργαστηρίου πληροφορικής!
              
     ΠΡΟΣΟΧΗ: ΑΠΑΓΟΡΕΥΕΤΑΙ Η ΧΡΗΣΗ ΣΕ ΣΥΣΤΗΜΑΤΑ ΠΑΡΑΓΩΓΗΣ, καθώς ο κώδικας 
              δεν έχει δοκιμαστεί για πιθανά κενά ασφαλείας τα οποία ίσως 
              θέσουν σε κίνδυνο ένα πραγματικό εξυπηρετητή παραγωγής ο οποίος
              χρησιμοποιείται σε πραγματικές συνθήκες.
              Δεν πρέπει επίσης να χρησιμοποιηθεί ως παράδειγμα για την ανάπτυξη 
              αντίστοιχου λογισμικού διαδικτυακών παραγγελιών!
              
              Το παρόν σενάριο αποτελεί μόνο ένα δείγμα για την προσομοίωση της 
              λειτουργίας ενός διαδικτυακού συστήματος παραγγελιών πελάτη-εξυπηρετητή.

              ΧΡΗΣΙΜΟΠΟΙΗΣΤΕ ΤΟ ΜΕ ΔΙΚΗ ΣΑΣ ΕΥΘΥΝΗ.
-->
<html lang="el-GR">
    <head>
        <title>Poli di Castro Pizza</title>
        <meta charset="utf-8">
        <meta name="author" content="Ο συγγραφέας">
        <meta name="description" 
              content="Φόρμες παραγγελίας και ηλεκτρονικού ταχυδρομείου">
        <link rel="icon" href="pizza.png">
        <style>
            body {
                background-attachment: fixed;
                background-color: BurlyWood;
                background-image: url("pizza.png");
                background-repeat: repeat;
            }
            p {
                opacity: 0.8;
                color: navy;
                font-size: 1.1em;
                font-family: Georgia, serif;
                font-weight: bolder;
                vertical-align:top;
                width: 80%;
                margin-left: auto;
                margin-right: auto;
                background-color: plum;
            }
        </style>        
    </head>
    <body>
        <?php
            $ylika = array('μανιτάρια', 'ζαμπόν', 'μπέικον', 'πιπεριά', 'ελιές',
                                  'μπρόκολο', 'κρεμμύδι', 'σάλτσα ντομάτας', 'φέτα');
            $synthesi = array('kokkini' => 'Μπέικον, ζαμπόν και ροδέλες πιπεριάς \
                        πάνω σε σάλτσα ντομάτας, καλά καλυμμένα με μπόλικη γραβιέρα',
                'elliniki' => 'Φέτα, ροδέλες ντομάτας, κρεμμύδια, ελιές πάνω σε \
                             σάλτσα ντομάτας, πασπαλισμένα με ρίγανη και ελαιόλαδο',
                'prasini' => 'Κομματάκια μπρόκολο και ροδέλες κρεμμύδι πάνω σε \
                             σάλτσα αβοκάντο, κάτω από μια πλούσια στρώση γκούντα');
            $zymes[0] = 'αφράτη';
            $zymes[1] = 'τραγανή';
            $zymes[2] = 'αφράτη με σκόρδο';
            $zymes[3] = 'τραγανή με τυρί στη ζύμη';
            if (isset($_POST['submit-synthesi'])) {
                if (!isset($_POST['synthesi'])) {
                    print "Δεν επιλέξατε κάποια pizza. Πιέστε το πλήκτρο " .
                            "<b>Πίσω</b> (<b>Back</b>) και προσπαθήστε πάλι";
                } else {
                    $synth = $_POST['synthesi'];
                    print "<p>Θαυμάσια επιλογή! </p>";
                    $apostoli = "<p>Η παραγγελία σας που αποτελείται από " .
                            $_POST['temaxia'] . ($_POST['temaxia'] == '1' ?
                            " τεμάχιο " : " τεμάχια ") . " με τα εξής υλικά:" .
                            "<em>" . $synthesi["$synth"] . "</em>, ξεκινά " .
                            "σε λίγο για παράδοση στη διεύθυνση: " .
                            $_POST['diefthinsi'] . ".<br>(Όνομα: " .
                            $_POST['onoma'] . ", Τηλέφωνο: " .
                            $_POST['tilefono'] . ").</p>";
                    switch ($synth) {
                        case 'kokkini':
                            print $apostoli;
                            break;
                        case 'prasini':
                            print $apostoli;
                            break;
                        case 'elliniki':
                            print $apostoli;
                            break;
                        default:
                            print "<p><em>Κάτι δεν πήγε καλά στην επιλογή σας. " .
                                    "Πιέστε το πλήκτρο <strong>Πίσω</strong> " .
                                    "(<strong>Back</strong>) και προσπαθήστε " .
                                    "πάλι</em></p>";
                            break;
                    }
                }
            } else if (isset($_POST['submit-epilogi'])) {
                if (!( isset($_POST['yliko']) && isset($_POST['zymi']) )) {
                    print "<p>Δεν επιλέξατε κάποιο συνδυασμό υλικών και ζύμης " .
                            "για την pizza σας. Πιέστε το πλήκτρο <strong>Πίσω" .
                            "</strong> (<strong>Back</strong>) και προσπαθήστε " .
                            "πάλι</em></p>";
                } else {
                    $ylik = $_POST['yliko'];
                    $zym = $_POST['zymi'];
                    print "<p>Υπέροχα!</p>";
                    print "<p>Eπιλέξατε ν' απολαύσετε " . $_POST['temaxia'] .
                            " pizza με ζύμη <strong>" . $zym . "</strong>, " .
                            "πάνω στην οποία θα υπάρχουν<strong>";
                    foreach ($ylik as $y) {
                        print ", " . $y;
                    }
                    print "</strong></p><p>Η παραγγελία σας ξεκινά σε λίγο για " .
                            "παράδοση στη διεύθυνση: " . $_POST['diefthinsi'] .
                            ".<br>(Όνομα: " . $_POST['onoma'] . ", Τηλέφωνο: " .
                            $_POST['tilefono'] . ").</p>";
                }
            } else {
                print "Κάτι δεν πήγε καλά στην επεξεργασία της φόρμας. " .
                        "Πιέστε το πλήκτρο <strong>Πίσω</strong> (<strong>Back" .
                        "</strong>) και προσπαθήστε πάλι</em>";
            }
        ?>
    </body>
</html>