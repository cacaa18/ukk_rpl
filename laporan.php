<div class="card bg-white">
    <div class="card-body">
        <h1 class="mt-4">Laporan Peminjaman Buku</h1>
<div class="row">
<div class ="col_md_12">
    <a href="cetak.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i>Cetak Data</a>
    <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Buku</th>   
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Peminjaman</th>
        </tr>
        <?php
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN   user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
        while($data = mysqli_fetch_array($query)){
          ?>
              <tr>
              <td><?php echo $i++; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['judul']; ?></td>
              <td><?php echo $data['tanggal_peminjaman']; ?></td>
              <td><?php echo $data['tanggal_pengembalian']; ?></td>
              <td><?php echo $data['status_peminjaman']; ?></td>
              <td>
                <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-info">Ubah</a>
                <a onclick="return confirm('apakah anda yakin menghapus data ini??')" href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
              </td>
              </tr>
              <?php
        }
        ?>
    </table>
</div>
</div>
    </div>
</div> 