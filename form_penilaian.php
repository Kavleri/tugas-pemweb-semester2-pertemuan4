<?php
// form_penilaian.php
include_once 'top.php';
include_once 'menu.php';
?>
<div class="container mt-5">
    <h2>Form Penilaian Siswa</h2>
    <form action="nilai_post.php" method="POST" class="card p-4 mt-3">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="matkul" class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control" id="matkul" name="matkul" required>
        </div>
        <div class="mb-3">
            <label for="nilai_uts" class="form-label">Nilai UTS</label>
            <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" required>
        </div>
        <div class="mb-3">
            <label for="nilai_uas" class="form-label">Nilai UAS</label>
            <input type="number" class="form-control" id="nilai_uas" name="nilai_uas" required>
        </div>
        <div class="mb-3">
            <label for="nilai_tugas" class="form-label">Nilai Tugas</label>
            <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" required>
        </div>
        <button type="submit" class="btn btn-primary">Proses</button>
    </form>
</div>
<?php
include_once 'bottom.php';
?>
