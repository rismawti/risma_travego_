<html>
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
            <h3>Menampilkan Data Berdasarkan Dropdown Select Ke Daftar Tabel</h3>
                <form class="addnew" action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
                    <p>Select list:</p>
                    <select name="type_pasenger" style="width:160px;">
                        <?php
                        $konek=mysqli_connect("localhost", "root", "", "travego_");
                        //query menampilkan nama unit kerja ke dalam combobox
                        $query    =mysqli_query($konek, "SELECT * FROM ticket GROUP BY type_pasenger ORDER BY type_pasenger");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?=$data['type_pasenger'];?>"><?php echo $data['type_pasenger'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="submit" value="Pilih">
                    <a href="coba2.php">Refresh</a>
                </form>
                <button id='add3'>Add</button>
                <?php
                if (isset($_GET['type_pasenger'])) {
                    $type_pasenger=trim($_GET['type_pasenger']);
                    
                    //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox
                    $tamPeg=mysqli_query($konek, "SELECT * FROM ticket WHERE type_pasenger='$type_pasenger' ORDER BY id_ticket DESC");
                
                    $no=0;
                    while ($tpeg = mysqli_fetch_array($tamPeg)) {
                    $no++;
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
                                            <?php echo $tpeg["name"]; ?>
                                        </div>
                                        <div class="col">
                                            <?php echo $tpeg["waktu_keberangkatan"]; ?>
                                        </div>
                                        <div class="col">
                                            <?php echo $tpeg["waktu_tiba"]; ?>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-primary"><?php echo $tpeg["harga"]; ?></a>
                                            <center><small><?php echo $tpeg["type_pasenger"]; ?></small></center>
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
                <a href="ticket.php">ticket</a><br>
                <a href="mull_add_new_field_js/add.php">add field</a>
                </div>
            </div>
        </div>
    </div>
        
        <script>
$(document).ready(function() {
    var removeButton = "<button id='remove'>Remove</button>";
    $('#add3').click(function() {
        $('form.addnew:last').after($('form.addnew:first').clone());
        $('form.addnew:last').append(removeButton);

    });
    $('#remove').live('click', function() {
        $(this).closest('form.addnew').remove();
    });
});
</script>
    </body>
