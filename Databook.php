<?php
define("hostname", "localhost");
define("user", "root");
define("passwpord", "");
define("dbname", "bookstore");
?>
<?php
$conn = new mysqli(hostname, user, passwpord, dbname);
$conn->query("SET NAMES UTF8");
if ($conn->connect_error) echo "not connect.";
else echo "Connect success";

$sql = "SELECT * FROM `book` WHERE 1";
$result = $conn->query($sql);
echo "<table border='1'>";
$counter = 0;
while ($row = $result->fetch_assoc()) {
    if ($counter == 0) {
        echo "<tr><th colspan='11'><h1>Manage Book</h1></th></tr>";
        echo "<tr><th colspan='11' align='left'><a href='register.php'>+Book</a></th></tr>";
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<th>{$key}</th>";
        }
        echo "<th>OPERATION</th>";
        echo "</tr>";
        $counter++;
    }
    echo "</tr>";
    foreach ($row as $key => $value) {
        echo "<td>{$value}</td>";
    }
    echo "<td><a href='handle.php?delId={$row['BookID']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";



?>
