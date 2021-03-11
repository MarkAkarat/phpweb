<?php
    define("hostname","localhost");
    define("user","user");
    define("passwpord","");
    define("dbname","bookstore");
?>
<?php
$conn=new mysqli(hostname,user,passwpord,dbname);
$conn->query("SELECT * FROM `book` WHERE 1");
if($conn->connect_error) echo "not connect";
else echo "Connect success";
?>