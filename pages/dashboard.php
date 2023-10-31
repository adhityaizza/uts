<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Amikom</title>
</head>
<body>
    <?php
        // session_start();
        // if($_SESSION["status"]!="login"){
        // header("location:../index.php?pesan=belum_login");
        // }
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">RPS AMIKOM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="add_rps.php">Tambah RPS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../index.php">logout</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>


    <div class="container">
        <table class="table table-hover">
            <thead>
                    <tr class="tr">
                    <th class="satu">No</th>
                    <th hidden>id_rps</th>
                    <th>mata kuliah</th>
                    <th>Deskripsi</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include("../config/config.php");
            $sql = "SELECT * FROM rps";
            $query = mysqli_query($sambung, $sql);
            $nomor = 1;

                while($rps = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$nomor."</td>";
                    echo "<td hidden>".$rps['id_rps']."</td>";
                    echo "<td>".$rps['nama_mata_kuliah']."</td>";
                    echo "<td>".$rps['deskripsi_mata_kuliah']."</td>";
                    echo "<td>";
                    echo "<a href='../pages/view_rps.php?id_rps=".$rps['id_rps']."'>
                    <button type='button' class='btn btn-primary btn-sm'>View</button>
                    </a>";
                    echo "<a href='../pages/edit_rps.php?id_rps=".$rps['id_rps']."'>
                    <button type='button' class='btn btn-success btn-sm'>Edit</button>
                    </a>";
                    echo "<a href='../process/process_delete_rps.php?id_rps=".$rps['id_rps']."'>
                    <button type='button' class='btn btn-danger btn-sm'>Delete</button>
                    </a>";
                    echo "</td>";
                    echo "</tr>";
                    $nomor++;
                }
            ?>
            </tbody>
        </table>
    </div>

</body>
</html>