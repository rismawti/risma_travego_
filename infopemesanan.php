<br>
<br>
<br>
<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col" name="dari">Dari</th>
      <th scope="col" name="menuju">Menuju</th>
      <th scope="col" name="tanggal_pergi">Tanggal Pergi</th>
      <th scope="col" name="tanggal_pulang">Tanggal Pulang</th>
      <th scope="col" name="kelas_penerbangan">Kelas Penerbangan</th>
      <th scope="col" name="passenger">passenger</th>
    </tr>
  </thead>
  <?php
include "nav.php";
include "config.php";
include "bot.php";

$no=1;
$ambildata =mysqli_query($konek, "SELECT * FROM pemesanan");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo "
        <tr>
        <td>$no</td>
        <td>$tampil[dari]</td>
        <td>$tampil[menuju]</td>
        <td>$tampil[tanggal_pergi]</td>
        <td>$tampil[tanggal_pulang]</td>
        <td>$tampil[kelas_penerbangan]</td>
        <td>$tampil[passenger]</td>
        </tr>";

    $no++;
}
?>
</table>