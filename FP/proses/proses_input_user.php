<?php
include "connect.php";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : " ";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : " ";
$level = (isset($_POST['level'])) ? htmlentities($_POST['level']) : " ";
$NoHp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : " ";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : " ";
$password = ('password');

if (!empty($_POST['input_user_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO tb_user(nama, username, level, nohp, alamat, password) values ('$nama', '$username', '$level', '$NoHp', '$alamat', '$password')");
    if (!$query) {
        $message = '<script>alert("Data gagal dimasukkan")</script>';
    } else {
        $message = '<script>alert("Data berhasil dimasukkan"); 
        window.location="../user"</script>
        </script>';
    }
} echo $message;
?>