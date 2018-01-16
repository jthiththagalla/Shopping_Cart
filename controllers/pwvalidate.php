<?php

include ("../Model/dbConnection.php");

$username = $_POST["lg_username"];
$password = $_POST["lg_password"];

$username = stripcslashes($username);
$password = stripcslashes($password);

/*$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
*/


$sql = "SELECT * FROM user_credintials WHERE user_name = '$username' AND password = '$password'";
echo $sql;
$result = $conn->query($sql);

$row = mysql_fetch_assoc($result);
if($row['username']==$username && $row['password']==$password){

    echo "Login Success";
}else{
    echo "Failed"; 
}

/*
.................................... Data Validation......................................
if(! $result ) {
    die('Could not get data: ');
 }

 $rowcount=mysqli_num_rows($result);
 printf("Result set has %d rows.\n",$rowcount);

............................................................................................

 if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
 
while($row = $result->fetch_assoc()) {
    echo "id: " . $row["password"]. "";
        
        printf("Result  %d .\n",$mypwd);

} 
} else {
    echo "0 results";
}
$conn->close();

?>
<html>
<body>
<br>
Welcome <?php echo $mypwd; ?><br>
Your email address is: <?php echo $password; 
?>
</body>
</html>*/