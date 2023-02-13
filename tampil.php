<html>
    <head>
        <title>Data Bangunan</title>
    </head>
    <body>
        <center>

            <table border="1">

            <tr>
                <td>No.</td>
                <td>Nama Toko</td>
                <td>Alamat</td>
                <td>No Siup</td>
                <td>Nama Pemilik</td>
                <td>Nama bahan</td>
                <td>Satuan</td>
                <td>Harga</td>
                <td>Aksi</td>
            </tr>

<?php
include("koneksi.php");
$query = mysqli_query($db,"SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan= tb_bahan.id_bahan");

$no = 1;
foreach ($query as $row) :
?>

            <tr>
                <td><?=$no++; ?></td>
                <td><?=$row['nama_toko'];?></td>
                <td><?=$row['alamat'];?></td>
                <td><?=$row['no_siup'];?></td>
                <td><?=$row['nama_pemilik'];?></td>
                <td><?=$row['nama_bahan'];?></td>
                <td><?=$row['satuan'];?></td>
                <td><?=$row['harga'];?></td>
                <td>
                    <a href="edit.php?id_toko=<?= $row['id_toko'];?>"><input type="button" name="Edit" value="Edit"></a>
                    <a href="hapus.php?id_toko=<?= $row['id_toko'];?>"><input type="button" name="Hapus" value="Hapus"></a>
                </td>
            </tr>    
        <?php endforeach; ?>

</center>
 </table>
 <p>
    <td><a href="tambah.php"><input type="button" name="tambah" value="Tambah"></a></td>
    <td><a href="menucuy.php"><input type="button" name="menu" value="MENU"></a></td>

</p>
</body>
</html>