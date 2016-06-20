<?php
   $Name = "Name: " . $_GET["Name"] . PHP_EOL;
   $Email = "Email: " . $_GET["Email"] . PHP_EOL;
   $Username = "Username: " . $_GET["Username"] . PHP_EOL;
   $Password = "Password: " . $_GET["Password"] . PHP_EOL;
   $filePath = "data.txt";

   if (file_exists($filePath)) {

       $data = fopen($filePath, "a");
       fwrite($data, $Name);
       fwrite($data, $Email);
       fwrite($data, $Username);
       fwrite($data, $Password);
       fwrite($data, PHP_EOL);
       fclose($data);


   }else{
       die("Unable to open file");
   }
?>