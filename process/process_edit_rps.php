<?php
    include("../config/config.php");

    if (isset($_GET['id_rps'])) {
        $id_rps = $_GET['id_rps'];
        
        $nama_mata_kuliah = $_POST['nama_mata_kuliah'];
        $deskripsi_mata_kuliah = $_POST['deskripsi_mata_kuliah'];
        $pertemuan_1 = $_POST['pertemuan_1'];
        $pertemuan_2 = $_POST['pertemuan_2'];
        $pertemuan_3 = $_POST['pertemuan_3'];
        $pertemuan_4 = $_POST['pertemuan_4'];
        $pertemuan_5 = $_POST['pertemuan_5'];
        $pertemuan_6 = $_POST['pertemuan_6'];
        $pertemuan_7 = $_POST['pertemuan_7'];
        $pertemuan_8 = $_POST['pertemuan_8'];
        $pertemuan_9 = $_POST['pertemuan_9'];
        $pertemuan_10 = $_POST['pertemuan_10'];
        $pertemuan_11 = $_POST['pertemuan_11'];
        $pertemuan_12 = $_POST['pertemuan_12'];
        $pertemuan_13 = $_POST['pertemuan_13'];
        $pertemuan_14 = $_POST['pertemuan_14'];

        $sql = "UPDATE rps 
                SET nama_mata_kuliah='$nama_mata_kuliah', deskripsi_mata_kuliah='$deskripsi_mata_kuliah',pertemuan_1='$pertemuan_1',pertemuan_2='$pertemuan_2',pertemuan_3='$pertemuan_3',pertemuan_4='$pertemuan_4',pertemuan_5='$pertemuan_5',pertemuan_6='$pertemuan_6',pertemuan_7='$pertemuan_7',pertemuan_8='$pertemuan_8',pertemuan_9='$pertemuan_9',pertemuan_10='$pertemuan_10',pertemuan_11='$pertemuan_11',pertemuan_12='$pertemuan_12',pertemuan_13='$pertemuan_13',pertemuan_14='$pertemuan_14'
                WHERE id_rps='$id_rps'";
        $query = mysqli_query($sambung, $sql);

        if($query){
            echo '<script>alert("Data anda telah berhasil di edit");</script>';
            echo '<script>window.location.href = "../pages/dashboard.php";</script>';
        }else{
            die("Gagal memperbarui data: " . mysqli_error($sambung));
        }
    } else {
        die("ID RPS tidak ditemukan.");
    }
    
        
    


?>