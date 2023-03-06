<?php
include "config.php";
include "bot.php";

if(isset($_POST["kode1"])){
    $id_ticket= $_POST["id_ticket"];
    $harga =$_POST["harga"];
    $dari= $_POST["dari"];
    $menuju= $_POST["menuju"];
    $tanggal_pergi= $_POST["tanggal_pergi"];
    $kelas_penerbangan=$_POST["kelas_penerbangan"];

    $sql=$konek->query("UPDATE ticket SET dari='$dari', harga='$harga', menuju='$menuju',     tanggal_pergi='$tanggal_pergi', kelas_penerbangan='$kelas_penerbangan' WHERE id_ticket='$id_ticket'");
    if($sql){
        echo("<script LANGUAGE='JavaScript'>window.alert('berhasil di update');
        window.location.href='ticket.php?halaman=ticket'</script>")
    }
}
?>
<form action="" method="post" class="col-5 position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label h4">id ticket</label>
            <input type="text" name="id_ticket" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-6">
        <h3>Dari<img src="icons8-airplane-take-off-30.png" width="30" alt=""> </h3>
                <select class="form-select" name="dari" aria-label="Default select example" name="dari">
                    <option value="jakarta">jakarta</option>
                    <option value="bandung">bandung</option>
                    <option value="aceh">aceh</option>
                </select>
        </div>
        <div class="mb-3 col-6">
        <h3>Menuju <img src="icons8-airplane-landing-30.png" width="30" alt=""></h3>
            <select class="form-select" name="menuju" aria-label="Default select example" name="menuju">
                <option value="bali">bali</option>
                <option value="buol">buol</option>
                <option value="sulut">sulut</option>
                <option value="kalut">kalut</option>
                <option value="jepang">jepang</option>
                <option value="australia">australia</option>
                <option value="new zealand">new zealand</option>
            </select>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputEmail1" class="form-label">tanggal pergi</label>
            <input name="tanggal_pergi" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputPassword1" class="form-label">harga</label>
            <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 col-6">
            <div class="form-group">
                <label for="exampleInputEmail1" class="h5">stock</label>
                    <input type="stock" name="stock" class="form-control" id="stock" aria-describedby="emailHelp"
                            placeholder="....">
            </div>
        </div>
        <div class="mb-3 col-6">
        <h5>passenger type</h5>
                <select class="form-select" aria-label="Default select example" name="type_passenger">
                    <option value="dewasa">dewasa</option>
                    <option value="remaja">remaja</option>
                    <option value="anak_anak">anak_anak</option>
                </select>
            </div>
        </div>

    </div>
  <button type="kode1" class="btn btn-primary">Submit</button>
  <a href="ticket.php" class="btn btn-primary text-white">BACK</a>
</form>