<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Amikom</title>
</head>
<body>
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
    
<?php
include("../config/config.php");

if (isset($_GET['id_rps'])) {
    $id_rps = $_GET['id_rps'];

    $sql = "SELECT * FROM rps WHERE id_rps = $id_rps";
    $query = mysqli_query($sambung, $sql);

    if (mysqli_num_rows($query) > 0) {
        $rps = mysqli_fetch_assoc($query);
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>View RPS</h3>
                    </div>
                    <div class="card-body">
                        <form action="../process/process_edit_rps.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" name="nama_mata_kuliah" value="<?php echo $rps['nama_mata_kuliah'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi Mata Kuliah</label>
                                <input type="text" class="form-control" name="deskripsi_mata_kuliah" value="<?php echo $rps['deskripsi_mata_kuliah'] ?>">
                            </div>
                            <?php
                            for ($i = 1; $i <= 14; $i++) {
                                $pertemuan = "pertemuan_" . $i;
                            ?>
                                <div class="mb-3">
                                    <label for="<?php echo $pertemuan ?>" class="form-label">Pertemuan <?php echo $i ?></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="<?php echo $pertemuan ?>" value="<?php echo $rps[$pertemuan] ?>">
                                        <button type="button" class="btn btn-danger" onclick="setToNull('<?php echo $pertemuan ?>')">Hapus Materi</button>
                                    </div>
                                </div>
                            <?php } ?>
                            <input type="hidden" name="id_rps" value="<?php echo $id_rps ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setToNull(inputName) {
            document.getElementsByName(inputName)[0].value = '';
        }
    </script>

<?php
    } else {
        echo "<p>Data tidak ditemukan.</p>";
    }
} else {
    echo "<p>ID RPS tidak disertakan.</p>";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
