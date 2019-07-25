# blowfish.class
blowfish.class - Encrypt - Decrypt - PHP7


### Usage:

     <?php
     include("blowfish.class.php"); 

     $blowfish = new Blowfish("secret Key");
     $cipher = $blowfish->Encrypt("Hello World"); //Encrypts 'Hello World'
     $plain = $blowfish->Decrypt($cipher); //Decrypts the cipher text

     echo $plain;
     ?>
     
### Todo:
WordPress mäckert weil die Funktionen schon vorhanden sind, wenn sie bereits von einem anderem Plugin genutzt werden.
