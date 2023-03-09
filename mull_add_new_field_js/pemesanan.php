<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="ticket">
            <?php 
                $konek = mysqli_connect("localhost", "root", "", "travego_");
                $data = $konek->query("SELECT * FROM ticket");
            ?>
            <?php while($perticket=$data->fetch_assoc()){ ?>
            <div class="card mb-3 mt-5" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://pregem.com/wp-content/uploads/2017/03/airline-icon-1.png" class="img-fluid rounded-start p-4" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $perticket["name"]; ?></h5>
                        <p class="card-text"><?php echo $perticket["waktu_keberangkatan"]; ?></p>
                        <p class="card-text"><?php echo $perticket["waktu_tiba"]; ?></p>
                        <p class="card-text btn btn-primary"><?php echo $perticket["harga"]; ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $perticket["type_pasenger"]; ?></small></p>
                        <a href="beli.php?id=<?php echo $perticket['id_ticket']; ?>" class="card-text btn btn-warning">beli</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>