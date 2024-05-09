<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include('ProductDatabase.php');
    $sql = "DELETE FROM products WHERE proid = $id";
    if(mysqli_query($conn, $sql))
    {
        session_start();
        $_SESSION["Delete"] = "Product Deleted";
        header("Location:AdminDashboard.php");
    }
}
?>