<?php
$experience;
$sql = "SELECT * FROM experience WHERE username = '$user';";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    $experiences = mysqli_fetch_all($result);
}
?>