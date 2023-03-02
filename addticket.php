<table class="table " border="1">
  <thead>
    <tr>
    <th scope="col">no</th>
      <th scope="col" name="id_ticket">id_ticket</th>
      <th scope="col" name="harga">harga</th>
      <th scope="col" name="kelas_penerbangan">kelas_penerbangan</th>
    </tr>
</thead>


<?php
include "config.php";
include "bot.php";

$no=1;
$ambildata =mysqli_query($konek, "SELECT id_ticket, harga, kelas_penerbangan FROM ticket");
while ($tampil = mysqli_fetch_array($ambildata)){
    // output data of each row
        echo "
        <tr>
        <td>$no</td>
        <td>$tampil[id_ticket]</td>
        <td>$tampil[harga]</td>
        <td>$tampil[kelas_penerbangan]</td>
        </tr>";

    $no++;

}if($ambildata){
  header('Location:nextpemesananuser1.php');
}

$konek->close();
?>
</table>