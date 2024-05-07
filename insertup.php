<?php
if (isset($_POST['simpan'])) { //untuk create
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $jurusan    = $_POST['Jurusan'];

    if ($nim && $nama && $alamat && $jurusan) {
        if ($op == 'edit') { //untk update
            $sql1       = "UPDATE tabel SET nim = '$nim',nama='$nama',alamat = '$alamat',jurusan='$jurusan' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "INSERT INTO tabel(nim,nama,alamat,jurusan) values ('$nim','$nama','$alamat','$jurusan')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}