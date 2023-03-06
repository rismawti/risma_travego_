<?php
include "config.php";
include "bot.php";
include "navhome.php";

$sql = "SELECT id_ticket, name, kelas_penerbangan FROM ticket";
$result = $konek->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id_ticket: " . $row["id_ticket"]. " - Name: " . $row["name"]. " " . $row["kelas_penerbangan"]. "<br>";
  }
} else {
  echo "0 results";
}
?>