<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col" name="dari">dari</th>
      <th scope="col" name="menuju">menuju</th>
      <th scope="col" name="tanggal_pergi">tanggal_pergi</th>
      <th scope="col" name="email">email</th>
      <th scope="col" name="password">password</th>
      <th scope="col" name="no_tlp">no tlp</th>
      <th scope="col" name="alamat">alamat</th>
      <th scope="col" name="picture">pict</th>
      <th scope="col" name="role">role</th>
      <th scope="col" name="option">edit</th>
    </tr>
</thead>

<?php
include "navhome.php";
include "config.php";
include "bot.php";

$no=1;
$ambildata =mysqli_query($konek, "SELECT * FROM ticket WHERE role='admin'");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo "
        <tr>
        <td>$no</td>
        <td>$tampil[userID]</td>
        <td>$tampil[username]</td>
        <td>$tampil[name]</td>
        <td>$tampil[email]</td>
        <td>$tampil[no_tlp]</td>
        <td>$tampil[password]</td>
        <td>$tampil[alamat]</td>
        <td><img width='70' src='../image/<?=$tampil[picture]'</td>
        <td>$tampil[role]</td>
        <td><a href='?kode=$tampil[userID]'>hapus</a>
        </tr>";

    $no++;
}
?>
</table>
<a href="addworker.php" class="btn btn-primary">add+</a>
<?php
if(isset($_GET['kode'])){
    mysqli_query($konek, "DELETE FROM users WHERE userID='$_GET[kode]'");

echo "data telah terhapus";
echo"<meta http-equiv=refresh content=2;URL='pekerja.php'>";
}
?>




