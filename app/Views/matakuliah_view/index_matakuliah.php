<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah: Pemrograman Website</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/pemweb.css'); ?>">
</head>

<body>
    <section id="deskripsi">
        <h2>Deskripsi</h2>
        <p><?= esc($matkul['deskripsi']) ?></p>
        <p>Durasi: 1 Semester <br>Jadwal: Senin, 09.00-11.00 <br><a href="https://classroom.google.com/c/NzU0NTY3MzAzODMw">Classroom</a></p>
    </section>

    <section id="hasil-pembelajaran">
        <h2>Hasil Pembelajaran</h2>
        <ul>
            <?php foreach (explode("\n", $matkul['hasil_pembelajaran']) as $hasil): ?>
                <li><?= esc($hasil) ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section id="dosen">
        <h2>Informasi Dosen</h2>
        <p><?= esc($matkul['informasi_dosen']) ?>
        </p>
    </section>
</body>

</html>