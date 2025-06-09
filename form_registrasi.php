<?php
// form_registrasi.php
include_once 'top.php';
include_once 'menu.php';
?>
<div class="container mt-5">
    <h2>Form Registrasi Mahasiswa</h2>
    <form action="proses_registrasi.php" method="POST" class="card p-4 mt-3">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <select class="form-select" id="prodi" name="prodi">
                <?php
                $prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
                foreach ($prodi as $key => $value) {
                    echo "<option value='$key'>$value</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Skill</label>
            <div>
                <?php
                $skills = ["HTML", "CSS", "JavaScript", "PHP", "Python", "Java"];
                foreach ($skills as $skill) {
                    echo "<div class='form-check'>
                            <input class='form-check-input' type='checkbox' name='skill[]' value='$skill' id='$skill'>
                            <label class='form-check-label' for='$skill'>$skill</label>
                          </div>";
                }
                ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
<?php
include_once 'bottom.php';
?>
