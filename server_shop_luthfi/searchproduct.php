<?php
include_once 'dbconnect.php';
$search = $_GET['search'];
$sql = "SELECT * FROM product_items WHERE name like '%$search%' || vendors like '%$search%' || category like '%$search%'";
$exec = mysqli_query($conn, $sql);
$exec =  $scon -> query($sql);
$itemproduct = array();

if($exec -> num_rows > 0) {
    while($row = $exec -> fetch_assoc()) {
        $itemproduct[] = row;
    }
}

echo json_encode($itemproduct);

$conn -> close();
?>