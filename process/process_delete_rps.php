<?php
include("../config/config.php");
if(isset($_GET['id_rps'])){
    $id_rps = $_GET['id_rps'];

    $sql = "DELETE FROM rps WHERE id_rps = $id_rps";

    $result = mysqli_query($sambung, $sql);

    if ($result) {
        echo '<script>alert("data rps telah di hapus.");</script>';
        echo '<script>window.location.href = "../pages/dashboard.php";</script>';
    } else {
        echo "Error: data tidak berhasil di hapus.";
    }
} else {
    echo "akses dilarang";
}
?>