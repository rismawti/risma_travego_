<h2>Data Karyawan</h2>
    <table border="1" cellpadding="4">
        <tr bgcolor="silver">
            <th>No</th>
            <th>name</th>
            <th>tanggal_pergi</th>
            <th>waktu keberangkatan</td>
            <th>waktu tiba</th>
            <th>type pasenger</th>
        </tr>
        <?php
        $konek=mysqli_connect("localhost", "root", "", "travego_");
        $no=0;
        $query =mysqli_query($konek, "SELECT * FROM ticket ORDER BY id_ticket DESC");
        while($result=mysqli_fetch_array($query)){
        $no++    
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $result['name']?></td>
            <td><?php echo $result['tanggal_pergi']?></td>
            <td><?php echo $result['waktu_keberangkatan']?></td>
            <td><?php echo $result['waktu_tiba']?></td>
            <td><?php echo $result['type_pasenger']?></td>
            <td><a href="bbb.php?id_ticket=<?=$result['id_ticket']?>">Detail</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    if(isset($_GET['id_ticket'])){
        $id_ticket    =$_GET['id_ticket'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    $konek=mysqli_connect("localhost", "root", "", "travego_");
    $query    =mysqli_query($konek, "SELECT * FROM ticket WHERE id_ticket='$id_ticket'");
    $result    =mysqli_fetch_array($query);
?>
<html>
<head>
    <title>Script PHP untuk Menampilkan Data dari Database Derdasarkan Id</title>
</head>
<body>
    <h2>Detail Data Karyawan</h2>
    <p><i>Note: Dibawah ini adalah detail informasi karyawan berdasarkan id_ticket</i> <b><?php echo $id_ticket?></b></p>
    <table border="0" cellpadding="4">
        <tr>
            <td size="90">NIK</td>
            <td>: <?php echo $result['name']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $result['tanggal_pergi']?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>: <?php echo $result['waktu_keberangkatan']?>, <?php echo $result['waktu_keberangkatan']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $result['waktu_tiba']?></td>
        </tr>
        <tr>
            <td>Department</td>
            <td>: <?php echo $result['kelas_penerbangan']?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: <?php echo $result['type_pasenger']?></td>
        </tr>
        <tr height="40">
            <td></td>
            <td>   <a href="bbb.php">Kembali</a></td>
        </tr>
    </table>