<?php
include "config.php";
include "bot.php";
include "navhome.php";
?>
<div class="card mb-3" style="max-width: 540px;">
<?php

$sql = "SELECT id_ticket, name, kelas_penerbangan FROM ticket";
$result = $konek->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["id_ticket"]. $row["name"]. $row["kelas_penerbangan"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title h3" name="id_ticket"></h5>
        <p class="card-text h5" name="name"></p>
        <p class="card-text"><small class="text-muted" name="kelas_penerbangan"></small></p>
      </div>
    </div>
  </div>
</div>