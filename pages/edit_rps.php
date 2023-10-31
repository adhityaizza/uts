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

    $id = $_GET['id_rps'];
    $sql = mysqli_query($sambung,"SELECT * FROM rps WHERE id_rps=$id");
    $rps = mysqli_fetch_assoc($sql);

    if( mysqli_num_rows($sql) < 1 ){
        die("data tidak ditemukan...");
    }
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Edit RPS</h3>
                    </div>
                    <div class="card-body">
                    <form action="../process/process_edit_rps.php?id_rps=<?php echo $rps['id_rps']; ?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" name="nama_mata_kuliah" value="<?php echo $rps['nama_mata_kuliah'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Deskripsi Mata Kuliah</label>
                                <input type="text" class="form-control" name="deskripsi_mata_kuliah" value="<?php echo $rps['deskripsi_mata_kuliah'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_1" class="form-label">Pertemuan 1</label>
                                <input type="text" class="form-control" name="pertemuan_1" value="<?php echo $rps['pertemuan_1'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_2" class="form-label">pertemuan_2</label>
                                <input type="text" class="form-control" name="pertemuan_2" value="<?php echo $rps['pertemuan_2'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_3" class="form-label">pertemuan_3</label>
                                <input type="text" class="form-control" name="pertemuan_3" value="<?php echo $rps['pertemuan_3'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_4" class="form-label">pertemuan_4</label>
                                <input type="text" class="form-control" name="pertemuan_4" value="<?php echo $rps['pertemuan_4'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_5" class="form-label">pertemuan_5</label>
                                <input type="text" class="form-control" name="pertemuan_5" value="<?php echo $rps['pertemuan_5'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_6" class="form-label">pertemuan_6</label>
                                <input type="text" class="form-control" name="pertemuan_6" value="<?php echo $rps['pertemuan_6'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_7" class="form-label">pertemuan_7</label>
                                <input type="text" class="form-control" name="pertemuan_7" value="<?php echo $rps['pertemuan_7'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_8" class="form-label">pertemuan_8</label>
                                <input type="text" class="form-control" name="pertemuan_8" value="<?php echo $rps['pertemuan_8'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_9" class="form-label">pertemuan_9</label>
                                <input type="text" class="form-control" name="pertemuan_9" value="<?php echo $rps['pertemuan_9'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_10" class="form-label">pertemuan_10</label>
                                <input type="text" class="form-control" name="pertemuan_10" value="<?php echo $rps['pertemuan_10'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_11" class="form-label">pertemuan_11</label>
                                <input type="text" class="form-control" name="pertemuan_11" value="<?php echo $rps['pertemuan_11'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_12" class="form-label">pertemuan_12</label>
                                <input type="text" class="form-control" name="pertemuan_12" value="<?php echo $rps['pertemuan_12'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_13" class="form-label">pertemuan_13</label>
                                <input type="text" class="form-control" name="pertemuan_13" value="<?php echo $rps['pertemuan_13'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pertemuan_14" class="form-label">pertemuan_14</label>
                                <input type="text" class="form-control" name="pertemuan_14" value="<?php echo $rps['pertemuan_14'] ?>">
                            </div>
                            <button type="submit" value="save" name="edit" class="btn btn-primary">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>