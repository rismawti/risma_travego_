<?php
include "config.php";
include "bot.php";
if(isset($_POST['addticket'])){
    $id_ticket = $_POST['id_ticket'];
    $harga = $_POST['harga'];
    $kelas_penerbangan = ($_POST['kelas_penerbangan']);
    $tanggal_pergi = $_POST['tanggal_pergi'];
    $type_passenger = $_POST['type_passenger'];
    $dari = $_POST['dari'];
    $menuju = $_POST['menuju'];
    $stock = $_POST['stock'];
    
    $data = $konek->query("INSERT INTO ticket(id_ticket, name, harga, kelas_penerbangan, tanggal_pergi, type_pasenger, dari, menuju, stock) 
    VALUES('$_POST[id_ticket]', '','$_POST[harga]', '$_POST[kelas_penerbangan]', '$_POST[tanggal_pergi]','$_POST[type_passenger]','$_POST[dari]','$_POST[menuju]', '$_POST[stock]')");
    if($data){
        header('location:ticket.php');
    }else{
        header('location:ticketaction.php?pesan=gagal');
    }
    
}

?>
<div class="konten p-5" style="background-color: black;">
    <div class="row mx-auto" style="width: 800px;">
        <div class="col-4 text-dark bg-light ">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, reprehenderit. Tempora, amet dolore obcaecati dolorem, et fuga aut non ut nobis minus neque libero cum maxime repellat, ipsum quasi incidunt.
        </div>
        <div class="col-8">
            <form action="" method="post" style="background-color: salmon; padding: 50px;">
                <div class="form-group">
                    <label for="exampleInputEmail1">id_ticket</label>
                    <input type="id_ticket" name="id_ticket" class="form-control" id="id_ticket" aria-describedby="emailHelp"
                    placeholder="....">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">harga</label>
                    <input type="harga" class="form-control" name="harga" id="harga" placeholder="...">
                </div>
                <option selected>kelas penerbangan</option>
                <select class="form-select" name="kelas_penerbangan" aria-label="Default select example">
                    <option value="economy">economy</option>
                    <option value="premium economy">premium economy</option>
                    <option value="vip">vip</option>
                    <option value="vvip">vvip</option>
                </select>
                <option selected>tanggal pergi</option>
                <input type="date" name="tanggal_pergi">
                <div class="row">
                    <div class="col">
                    <h3>Dari<img src="icons8-airplane-take-off-30.png" width="30" alt=""> </h3>
                    <div class="mb-3" style="width: 150px;">
                        <select class="form-select" aria-label="Default select example" name="dari">
                            <option value="jakarta">jakarta</option>
                            <option value="bandung">bandung</option>
                            <option value="aceh">aceh</option>
                        </select>
                    </div>
                    </div>
                    <div class="col">
                        <h3>Menuju <img src="icons8-airplane-landing-30.png" width="30" alt=""></h3>
                            <div class="mb-3" style="width: 150px;">
                                <select class="form-select" aria-label="Default select example" name="menuju">
                                    <option value="bali">bali</option>
                                    <option value="buol">buol</option>
                                    <option value="sulut">sulut</option>
                                    <option value="kalut">kalut</option>
                                    <option value="jepang">jepang</option>
                                    <option value="australia">australia</option>
                                    <option value="new zealand">new zealand</option>
                                </select>
                            </div>  
                    </div>
                    <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="h5">stock</label>
                            <input type="stock" name="stock" class="form-control" id="stock" aria-describedby="emailHelp"
                            placeholder="....">
                        </div>
                    </div>
                    <div class="col">
                    <h5>passenger type</h5>
                            <div class="mb-3" style="width: 150px;">
                                <select class="form-select" aria-label="Default select example" name="type_passenger">
                                    <option value="dewasa">dewasa</option>
                                    <option value="remaja">remaja</option>
                                    <option value="anak_anak">anak_anak</option>
                                </select>
                            </div>  
                    </div>
                    </div>
                    <br>
                    <button type="submit" name="addticket" class="btn btn-primary mt-3">add ticket</button>  
            </form>
            </div>
            <br>
        </div>
</div>
  <br>
  
