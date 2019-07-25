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
WordPress maeckert weil Funktionen schon vorhanden, wenn bereits von anderem Plugin genutzt.
