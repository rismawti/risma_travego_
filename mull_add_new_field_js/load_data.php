<?php
    if(isset($_GET['type_pasenger'])){
        $type_pasenger=$_GET['type_pasenger'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    $konek=mysqli_connect("localhost", "root", "", "travego_");
    $query    =mysqli_query($konek, "SELECT * FROM ticket WHERE type_pasenger='$type_pasenger'");
    $result    =mysqli_fetch_array($query);
?>
<html>
<head>
    <title>Script PHP untuk Menampilkan Data dari Database Derdasarkan Id</title>
</head>
<body>
    <h2>Detail Data Karyawan</h2>
    <p><i>Note: Dibawah ini adalah detail informasi karyawan berdasarkan type_pasenger</i> <b><?php echo $type_pasenger?></b></p>
    <table border="0" cellpadding="4">
        <tr>
            <td size="90">NIK</td>
            <td>: <?php echo $result['id_ticket']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $result['name']?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>: <?php echo $result['kelas_penerbangan']?>, <?php echo $result['kelas_penerbangan']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $result['tanggal_pergi']?></td>
        </tr>
        <tr>
            <td>Department</td>
            <td>: <?php echo $result['waktu_keberangkatan']?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: <?php echo $result['waktu_tiba']?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>: <?php echo $result['type_pasenger']?></td>
        </tr>
        <tr height="40">
            <td></td>
            <td>   <a href="mesubuta.php">Kembali</a></td>
        </tr>
    </table>
</body>
</html>