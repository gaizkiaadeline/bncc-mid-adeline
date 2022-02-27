<?php require_once 'process/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Collection</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require_once 'views/navbar.php'; ?>

    <div class="container bg-light banner">
        <h1>Welcome to library 📚</h1>
        <p class="mb-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking</p>
        <a href="pages/books.php" class="btn btn-warning">Explore Book</a>
        <a href="pages/contact-us.php" class="btn btn-success">Contact Admin</a>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $books = tampilSemuaBuku();
            foreach ($books as $book) :
            ?>
                <div class="col-md-3 mb-4">
                    <div class="col-md-12 book-content bg-light">
                        <h3 class="judul"><?= $book['judul']; ?></h3>
                        <span class="badge bg-primary mb-3">Year <?= $book['tahun_terbit']; ?></span>
                        <span class="d-block">Writer: <?= $book['penulis']; ?></span>
                        <span class="d-block">Pages: <?= $book['jumlah_halaman']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php require_once 'views/footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>