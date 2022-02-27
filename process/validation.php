<?php

function validate($judul, $penulis, $tahun_terbit, $jumlah_halaman)
{
    global $koneksi;
    if ((empty(trim($judul)) || empty(trim($penulis)) || empty(trim($tahun_terbit)) || empty(trim($jumlah_halaman)
    ((len($judul)<5) || (len($judul)>20)) && ((len($penulis)<5) || (len($penulis)>20)) && ($tahun_terbit<2000) || ($tahun_terbit<2021) ) || ($jumlah_halama<0)) {
        echo
        '<script>
            alert("Harap isi form dengan benar, tidak boleh ada yang kosong")
        </script>';
    }
}
