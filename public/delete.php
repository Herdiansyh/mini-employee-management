<?php 

require_once '../database.php';

$id =$_GET['id'];

// query untuk menghapus data
$sql= "DELETE FROM employees WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
// buat notif berhasil dihapus dan redirect 
 if ($stmt->rowCount() > 0) {
    echo "<script>alert('Data Berhasil Dihapus')</script>";
    echo "<script>location.href='index.php'</script>";
    } 

?>