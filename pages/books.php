<?php require_once '../process/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books | Books Collection</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require_once '../views/navbar.php'; ?>

    <div class="container mt-5">
        <h4>All Books</h4>
        <hr>
        <div class="row">
            <div class="container">
                <div class="row">
                    <?php
                    $books = tampilSemuaBuku();
                    foreach ($books as $book) :
                    ?>
                        <div class="col-md-3 mb-4">
                            <div class="col-md-12 book-content bg-light">
                                <h3 class="judul"><?= $book['judul']; ?></h3>
                                <span class="badge bg-info mb-3">Year <?= $book['tahun_terbit']; ?></span>
                                <span class="d-block">Writer: <?= $book['penulis']; ?></span>
                                <span class="d-block">Pages: <?= $book['jumlah_halaman']; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>