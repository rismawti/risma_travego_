<?php
$konek=mysqli_connect("localhost", "root", "", "travego_")
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <?php
        $query = "SELECT * FROM ticket ORDER BY id_ticket";
        $result = mysqli_query($konek, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
        ?>
        
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row ">
                <div class="col-md-4">
                    <img src="https://pregem.com/wp-content/uploads/2017/03/airline-icon-1.png" class="img-fluid rounded-start p-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="margin-top: 15%;">
                            <div class="row">
                                <div class="col ">
                                    <?php echo $row["name"]; ?>
                                </div>
                                <div class="col">
                                    <?php echo $row["waktu_keberangkatan"]; ?>
                                </div>
                                <div class="col">
                                    <?php echo $row["waktu_tiba"]; ?>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-primary"><?php echo $row["harga"]; ?></a>
                                    <center><small><?php echo $row["type_pasenger"]; ?></small></center>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
    <button id='add'>Add</button>

    <script>
        $(document).ready(function() {
            var removeButton = "<button id='remove'>Remove</button>";
            $('#add').click(function() {
                $('div.container:last').after($('div.container:first').clone());
                $('div.container:last').append(removeButton);

            });
            $('#remove').live('click', function() {
                $(this).closest('div.container').remove();
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
