<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas 8</title>
   <style>
      table {
            border-collapse: collapse;
      }
      th, td {
            font-size: 13px; 
            border: 1px solid; 
            padding: 3px 5px; 
      }
      th {
            background: #CCCCCC;
            font-size: 12px;
      }
   </style>
</head>
<body>
   <div class="container">
      <center><h1> SISTEM PERPUSTAKAAN SMA BHAKTI NUSA </h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM anggota';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Anggota</h3>
         <table>
          <tr>
            <th>ID Anggota</th>
            <th>Nama Anggota</th>
            <th>Alamat</th>
            <th>TTL</th>
            <th>Status</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_anggota'];?></td>
               <td><?= $row['nm_anggota'];?></td>
               <td><?= $row['alamat'];?></td>
               <td><?= $row['ttl_anggota'];?></td>
               <td><?= $row['status_anggota'];?></td>

            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM buku';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel Buku</h3>
         <table>
          <tr>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Jenis Buku</th>
            <th>Penerbit</th>

         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['kd_buku'];?></td>
               <td><?= $row['judul_buku'];?></td>
               <td><?= $row['pengarang'];?></td>
               <td><?= $row['jenis_buku'];?></td>
               <td><?= $row['penerbit'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM pinjam';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Peminjaman</h3>
         <table>
          <tr>
            <th>ID Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Jumlah Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>ID Anggota</th>
            <th>Kode Buku</th>
         </tr>
         <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pinjam'];?></td>
               <td><?= $row['tgl_pinjam'];?></td>
               <td><?= $row['jml_pinjam'];?></td>
               <td><?= $row['tgl_kembali'];?></td>
               <td><?= $row['id_anggota'];?></td>
               <td><?= $row['kd_buku'];?></td>

            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>  
      </div>
   </div>
</body>
</html>