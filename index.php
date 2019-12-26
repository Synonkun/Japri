<form method="POST">
  Nama: <br />
  <input type="text" name="nama" value"" /><br />
  Komentar: <br />
  <textarea name="komentar"></textarea><br />
  <input type="submit" name="submit" value="Kirim" /><br />
</form>
<?php // jika submit button diklik
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $koneksi    = mysql_connect('server', 'username', 'password');
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
 
    // kalau mau kita juga bisa menambahkan validasi form
    if(empty($nama)){
      echo "<p>Nama belum diisi</p>";
    }
    else if (empty($komentar)){
      echo "<p>Komentar belum diisi</p>";
    }
    else { // jika semua syarat validasi sudah terpenuhi, simpan ke database
      $sqlsimpan = "INSERT INTO komentar SET
                    nama = '$nama',
                    komentar = '$komentar'";
      mysql_query($sqlsimpan, $koneksi) 
      or die ("Gagal Perintah SQL". mysql_error());
      echo "<p>Komentar terkirim</p>";
    }
  }
?>
