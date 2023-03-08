<html>
    <head>
        <title>Cara Menampilkan Data pada Form Berdasarkan Pilihan Combobox</title>
    </head>
    <body>
        <h3>Menampilkan Data pada Form Berdasarkan Pilihan Combo Box</h3>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
            <p>Pilih Pegawai:</p>
            <select name="id_ticket" style="width:200px;">
               <?php
                $konek=mysqli_connect("localhost", "root", "", "travego_");
                //query menampilkan name pegawai ke dalam combobox
                $query    =mysqli_query($konek, "SELECT * FROM ticket ORDER BY id_ticket");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['id_ticket'];?>"><?php echo $data['name'];?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Pilih">
            <a href="form.php">Refresh</a>
        </form>
        <h4>Data Pegawai</h4>
        <?php
        if (isset($_GET['id_ticket'])) {
            $id_ticket=$_GET['id_ticket'];

            //menampilkan data pegawai berdasarkan pilihan combobox ke dalam form
            $tamPeg=mysqli_query($konek, "SELECT * FROM ticket WHERE id_ticket='$id_ticket'");
            $tpeg = mysqli_fetch_array($tamPeg);
        
        ?>
        <form action="#" method="POST">
        <table border="0" cellpadding="2">
            <tr>
                <td width="100">NIP</td>
                <td width="280">: <input type="text" name="name" value="<?php echo $tpeg['name']; ?>" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="tanggal_pergi" value="<?php echo $tpeg['tanggal_pergi']; ?>" /></td>
            </tr>
            <tr>
                <td>Unit Kerja</td>
                <td>: <input type="text" name="type_pasenger" value="<?php echo $tpeg['type_pasenger']; ?>" /></td>
            </tr>
            <tr>
                <td>Gol</td>
                <td>: <input type="text" name="id_ticket" value="<?php echo $tpeg['id_ticket']; ?>" /></td>
            </tr>
            <tr>
                <td>Pangkat</td>
                <td>: <input type="text" name="kelas_penerbangan" value="<?php echo $tpeg['kelas_penerbangan']; ?>" /></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: <input type="text" name="waktu_keberangkatan" value="<?php echo $tpeg['waktu_keberangkatan']; ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td>  <input type="submit" value="Save"></td>
            </tr>
        </table>
        </form>
        <?php
        }
        ?>
    </body>
</html>