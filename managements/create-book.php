<?php require_once '../process/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book | Books Collection</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require_once '../views/navbar.php'; ?>

    <div class="container">
        <div class="col-md-8 bg-light table-wrapper">
            <h3>Create Book</h3>
            <hr>

            <form action="" method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku">
                </div>
                <div class="form-group">
                    <label>Writer</label>
                    <input type="text" class="form-control" name="penulis" placeholder="Penulis buku">
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" class="form-control" name="tahun_terbit" placeholder="Masukkan tahun terbit">
                </div>
                <div class="form-group">
                    <label>Pages</label>
                    <input type="number" class="form-control" name="jumlah_halaman" placeholder="Masukkan jumlah halaman">
                </div>
                <button type="submit" name="tambahBuku" class="btn btn-primary btn-sm">Submit</button>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['tambahBuku'])) {
        tambahBuku($_POST['judul'], $_POST['penulis'], $_POST['tahun_terbit'], $_POST['jumlah_halaman']);
    }
    ?>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>