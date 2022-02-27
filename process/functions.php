<?php

function tampilSemuaBuku()
{
    global $koneksi;
    $perintahTampilBuku = $koneksi->prepare("SELECT * FROM books");
    $perintahTampilBuku->execute();
    $books = $perintahTampilBuku->fetchAll();

    return $books; 
}

function tambahBuku($judul, $penulis, $tahun_terbit, $jumlah_halaman)
{
    global $koneksi;
    if (empty(trim($judul)) || empty(trim($penulis)) || empty(trim($tahun_terbit)) || empty(trim($jumlah_halaman))) {
        echo '<script>alert("Harap isi form dengan benar, tidak boleh ada yang kosong")</script>';
    } else {
        $tambahBuku = $koneksi->prepare("
            INSERT INTO books(judul, penulis, tahun_terbit, jumlah_halaman)
            VALUES ('$judul', '$penulis', '$tahun_terbit', '$jumlah_halaman')
        ");
        $tambahBuku->execute();

        echo '<script>
            alert("Buku berhasil ditambah")
            window.location.href="manage-book.php"
            </script>';
    }
}

function tampilBuku($id)
{
    global $koneksi;

    $tampilBuku = $koneksi->prepare("SELECT * FROM books WHERE id='$id'");
    $tampilBuku->execute();
    return $tampilBuku->fetch(PDO::FETCH_OBJ);
}

function editBuku($id, $judul, $penulis, $tahun_terbit, $jumlah_halaman)
{
    global $koneksi;
    
    $statement = $koneksi->prepare("
                UPDATE books SET judul = '$judul', penulis = '$penulis', tahun_terbit = '$tahun_terbit', jumlah_halaman = '$jumlah_halaman' WHERE id = '$id'
                ");
    $statement->execute();

    echo '<script>
    alert("Buku berhasil diedit")
    window.location.href="manage-book.php"
    </script>';
}

function hapusBuku($idBuku)
{
    global $koneksi;
    $hapusBuku = $koneksi->prepare("DELETE FROM books WHERE id='$idBuku'");
    $hapusBuku->execute();
    echo '<script>
        alert("Buku berhasil dihapus")
        window.location.href="manage-book.php"
        </script>';
}
