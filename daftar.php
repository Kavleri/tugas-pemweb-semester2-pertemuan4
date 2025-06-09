<?php
// daftar.php
include_once 'top.php';
include_once 'menu.php';

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "praktikum_php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM nilai");
?>
<div class="container mt-5">
    <h2>Daftar Nilai Siswa</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai Total</th>
                <th>Kelulusan</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['matkul'] ?></td>
                <td><?= $row['nilai_total'] ?></td>
                <td><?= $row['kelulusan'] ?></td>
                <td><?= $row['grade'] ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php
include_once 'bottom.php';
?>
