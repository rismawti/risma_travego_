<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col" name="id_ticket">id_ticket</th>
      <th scope="col" name="nama">nama</th>
      <th scope="col" name="harga">harga</th>
      <th scope="col" name="kelas_penerbangan">kelas_penerbangan</th>
      <th scope="col" name="tanggal_pergi">tanggal_pergi</th>
      <th scope="col" name="waktu_keberangkatan">waktu keberangkatan</th>
      <th scope="col" name="waktu_tiba">waktu tiba</th>
      <th scope="col" name="type_passenger">type passenger</th>
      <th scope="col" name="dari">dari</th>
      <th scope="col" name="menuju">menuju</th>
      <th scope="col" name="stock">stock</th>
      <th scope="col" name="edit">edit</th>
    </tr>
</thead>

<?php
include "config.php";
include "bot.php";

$no=1;
$ambildata =mysqli_query($konek, "SELECT * FROM ticket");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo "
        <tr>
        <td>$no</td>
        <td>$tampil[id_ticket]</td>
        <td>$tampil[name]</td>
        <td>Rp.$tampil[harga]</td>
        <td>$tampil[kelas_penerbangan]</td>
        <td>$tampil[tanggal_pergi]</td>
        <td>$tampil[waktu_keberangkatan]</td>
        <td>$tampil[waktu_tiba]</td>
        <td>$tampil[type_pasenger]</td>
        <td>$tampil[dari]</td>
        <td>$tampil[menuju]</td>
        <td>$tampil[stock]</td>
        <td><a href='?kode=$tampil[id_ticket]'>hapus</a>
        <a href='edit.php?kode1=$tampil[id_ticket]'>edit</td>
        </tr>";

    $no++;
}
?>
</table>
<a href="ticketaction.php" class="btn btn-primary">add+</a>
<a href="admin2.php" class="btn btn-primary">back</a>
<a href="coba2.php">back to coba2</a>
<?php
if(isset($_GET['kode'])){
    mysqli_query($konek, "DELETE FROM ticket WHERE id_ticket='$_GET[kode]'");

echo "data telah terhapus";
echo"<meta http-equiv=refresh content=2;URL='ticket.php'>";
}
?>
