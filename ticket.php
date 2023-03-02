<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col" name="id_ticket">id_ticket</th>
      <th scope="col" name="username">username</th>
      <th scope="col" name="nama">nama</th>
      <th scope="col" name="harga">harga</th>
      <th scope="col" name="kelas_penerbangan">kelas_penerbangan</th>
      <th class="col" name="no_tlp">no tlp</th>
      <th scope="col" name="status_pembayaran">status_pembayaran</th>
      <th scope="col" name="tanggal_pergi">tanggal_pergi</th>
      <th scope="col" name="tanggal_pulang">tanggal_pulang</th>
      <th scope="col" name="passenger">passenger</th>
      <th scope="col" name="dari">dari</th>
      <th scope="col" name="menuju">menuju</th>
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
        <td>$tampil[username]</td>
        <td>$tampil[name]</td>
        <td>Rp.$tampil[harga]</td>
        <td>$tampil[kelas_penerbangan]</td>
        <td>$tampil[no_tlp]</td>
        <td>$tampil[status_pembayaran]</td>
        <td>$tampil[tanggal_pergi]</td>
        <td>$tampil[tanggal_pulang]</td>
        <td>$tampil[pasenger]</td>
        <td>$tampil[dari]</td>
        <td>$tampil[menuju]</td>
        <td><a href='?kode=$tampil[id_ticket]'>hapus</a>
        </tr>";

    $no++;
}
?>
</table>
<a href="ticketaction.php" class="btn btn-primary">add+</a>
<?php
if(isset($_GET['kode'])){
    mysqli_query($konek, "DELETE FROM ticket WHERE id_ticket='$_GET[kode]'");

echo "data telah terhapus";
echo"<meta http-equiv=refresh content=2;URL='ticket.php'>";
}
?>