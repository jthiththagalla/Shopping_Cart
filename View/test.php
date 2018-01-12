<?php
include ("../Model/dbConnection.php");

$sql = "SELECT * FROM `products`";
$result = $conn->query($sql);

echo "<br/><br/>Available products are : <br/>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["p_name"]. " quentity :" . $row["quentity"]. " price :" . $row["price"]. " img_path : <img src=' ". $row["img_path"]. "'/><br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
