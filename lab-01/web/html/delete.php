<?php
if(isset($_POST["tb"]) && isset($_POST["id"]))
{
    $tb = $_POST["tb"];
    try {
        $conn = new PDO("mysql:host=docker-mysql;port=3306;dbname=cars", "user", "user1234");
        $sql = "DELETE FROM $tb WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $_POST["id"]);
        $stmt->execute();
        header("Location: index.php");
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>

