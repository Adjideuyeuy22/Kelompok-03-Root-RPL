<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include '../koneksi.php';
$sql = mysqli_query($conn, "SELECT * FROM tb_metode WHERE id_metode='$_GET[id]'");
$data = mysqli_fetch_assoc($sql);
?>
<body>
    <form action="" method="post">
        <label for="">id</label>
        <input type="text" name="id"  value="<?=$data['id_metode'] ?>">
        <br>
        <label for="">nama</label>
        <input type="text" name="nama">
        <br>
        <input type="submit" value="Edit" name="kirim">
    </form>
<?php
if(isset($_POST['kirim'])){
    $x = $_POST['nama'];
    var_dump($x);
    $y = $_POST['id'];
    var_dump($y);
    $cek = mysqli_query($conn, "UPDATE tb_metode SET nama='$_POST[nama]' WHERE id_metode='$_POST[id]'");
    if($cek){
        header('location:Metode-bayar.php');
    }else{
        echo "gagal";
    }
}
?>
</body>
</html>