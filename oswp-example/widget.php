<?php
 /**
  * Mit dieser Datei können übermittelte Formulardaten abgefangen werden.  Bei Verwendung einer Nichtkonfiguration
  * Um Formulardaten zu speichern, denken Sie daran, ein Identifikationsfeld in Ihrem Formular zu verwenden.
  */
?>
<p>Dies ist ein oswp blowfish.class Beispiel im Dashboard Widget!</p>
<?php
include("blowfish.class.php"); // WordPress maeckert weil Funktionen schon vorhanden, wenn bereits von anderem Plugin genutzt.

$blowfish = new Blowfish("secret Key"); // "secret Key" ist der Verschluesselungswert.
$cipher = $blowfish->Encrypt("Hello World"); //Encrypts 'Hello World'
$plain = $blowfish->Decrypt($cipher); //Decrypts the cipher text


echo $cipher;
?> <br> <?php
echo $plain;
?>