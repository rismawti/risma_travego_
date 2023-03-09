<html>
<head>
    <title>Script PHP untuk Menampilkan Data dari Database Derdasarkan Id</title>
</head>
<body>
    <h2>Data Karyawan</h2>
    <table border="1" cellpadding="4">
        <tr bgcolor="silver">
            <th>No</th>
            <th>NIK</th>
            <th>Nama Karyawan</th>
            <th>Dept.</td>
            <th>Jabatan</th>
            <th>Action</th>
        </tr>
        <?php
        $konek=mysqli_connect("localhost", "root", "", "travego_");
        $no=0;
        $query    =mysqli_query($konek, "SELECT * FROM ticket ORDER BY type_pasenger DESC");
        while($result    =mysqli_fetch_array($query)){
        $no++    
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $result['name']?></td>
            <td><?php echo $result['kelas_penerbangan']?></td>
            <td><?php echo $result['tanggal_pergi']?></td>
            <td><?php echo $result['type_pasenger']?></td>
            <td><a href="load_data.php?type_pasenger=<?=$result['type_pasenger']?>">Detail</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>