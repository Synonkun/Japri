<form action="#" method="get">
 <input type="text" name="nama" placeholder="Nama Kita"></input><br/>
 <input type="text" name="alamat" placeholder="Alamat Kita"></input><br/>
 <input type="submit" name="submit" value="Submit"></input>
</form>
<?php
if( $_GET["nama"] || $_GET["alamat"])
{
 echo "Halo: ". $_GET['nama']. "<br />";
 echo "Alamat Anda: ". $_GET["alamat"]. "<br />";
}
?>
