<div class="container mt-5">
    <a href="admin2.php?halaman=add-ticket">add ticket</a><br>
    <a href="admin2.php?halaman=admin">admin</a><br>
    <a href="admin2.php?halaman=user">user</a><br>
    <a href="admin2.php?halaman=add-new-field">add-new-field</a><br>
    <a href="admin2.php?halaman=select-ticket">select-ticket</a><br>
    <a href="admin2.php?halaman=pemesanan">pemesanan</a>
</div>

<div class="ktn text-dark" id="body" style="padding-left: 22px;">
            <?php
                if(isset($_GET['halaman'])){
                    $page = $_GET['halaman'];
                    switch($page){
                        case 'add-ticket':
                            include "ticket.php";
                            break;
                        case 'admin':
                            include "pekerja.php";
                            break;
                        case 'user':
                            include "user.php";
                            break;
                        case 'add-new-field':
                            include "mull_add_new_field_js/add.php";
                            break;
                        case 'select-ticket':
                            include "mull_add_new_field_js/coba2.php";
                            break;
                        case 'pemesanan':
                            include "mull_add_new_field_js/pemesanan.php";
                            break;
                        default:
                            echo "<center>halaman tidak ditemukan</center>";
                            break;
                    }
                }else{
                    include "pekerja.php";
                }
            ?>
        </div> 