<?php
$conn = mysqli_connect("localhost", "root", "", "temp_db");
$search_result = mysqli_query($connect_no, "SLELCT * FROM login_t");
$how_many = mysqli_num_rows($search_result);
for($loop=1; $loop <= $how_many; $loop++){
    $record = mysqli_fetch_array($search_result);
    echo("name:" . $record["name"]);
    echo("address:" . $record["address"] . "<hr>");
}
?>