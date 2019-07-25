<?php
 /**
  * Mit dieser Datei können übermittelte Formulardaten abgefangen werden.  Bei Verwendung einer Nichtkonfiguration
  * Um Formulardaten zu speichern, denken Sie daran, ein Identifikationsfeld in Ihrem Formular zu verwenden.
  */
?>
<p>Dies ist ein oswp blowfish.class Beispiel im Dashboard Widget!</p>
<?php
// Schauen ob blowfish.class.php schon geladen ist.
if (class_exists('Blowfish')) {
	echo""; // blowfish.class.php ist schon geladen.
} else {
 include("blowfish.class.php");// blowfish.class.php nachladen.
}

$blowfish = new Blowfish("secret Key"); // "secret Key" ist der Verschluesselungswert.
$cipher = $blowfish->Encrypt("Hello World"); //Encrypts 'Hello World'
$plain = $blowfish->Decrypt($cipher); //Decrypts the cipher text


echo $cipher;
?> <br> <?php
echo $plain;
?>
