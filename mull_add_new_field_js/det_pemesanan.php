<?php
session_start();
$konek=mysqli_connect("localhost", "root", "", "travego_");
echo "<pre>";
print_r($_SESSION['pemesanan']);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="konten">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>name</th>
                        <th>harga</th>
                        <th>jumlah</th>
                        <th>type passenger</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($_SESSION["pemesanan"] as $id_ticket=>$jumlah): ?>
                    <?php
                    $data = $konek->query("SELECT * FROM ticket WHERE id_ticket='$id_ticket'");
                    $perticket = $data->fetch_assoc();
                    $totharga = $perticket['harga'] * $jumlah;
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $perticket["name"]; ?></td>
                        <td>Rp.<?php echo number_format($perticket['harga']); ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>Rp.<?php echo number_format($totharga); ?></td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>