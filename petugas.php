<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Petugas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Data Petugas</h2>
    <div>
        <a href="petugas_tambah.php">+ Tambah Petugas</a>
    </div>
    <!-- Tabel untuk menampilkan data petugas -->
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Username</th>
          <th>Email</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("koneksi.php");

          // Pastikan variabel koneksi sudah terdefinisi
          if(isset($koneksi)){
            // Query untuk mengambil data petugas
            $sql = "SELECT id_user, nama, username, email, alamat FROM user WHERE level = 'petugas'";
            $result = mysqli_query($koneksi, $sql);

            // Periksa apakah ada data yang ditemukan
            if(mysqli_num_rows($result) > 0) {
              // Tampilkan data petugas
              while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['id_user'] . "</td>";
                  echo "<td>" . $row['nama'] . "</td>";
                  echo "<td>" . $row['username'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['alamat'] . "</td>";
                  echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='5'>Tidak ada data petugas</td></tr>";
            }

            // Bebaskan hasil query
            mysqli_free_result($result);
          } else {
            echo '<tr><td colspan="5">Tidak dapat terhubung ke database</td></tr>';
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
