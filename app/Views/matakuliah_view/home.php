<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nur Kholivah</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/home_view.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#tentang_saya">Tentang Saya</a></li>
                    <li><a href="#about">Mata Kuliah</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero" id="hero">
        <div class="hero_kiri">
            <img src="gambar/user.png" alt="">
        </div>
        <div class="hero_kanan">
            <h1>Hello,<br> Saya Nur Kholivah</h1>
            <h5>Mahasiswi Sistem Informasi</h5>

        </div>
    </section>
    <section class="tentang_saya" id="tentang_saya">
        <div>
            <h1>Tentang Saya</h1>
            <p>
                Saya Mahasiswi jurusan Sistem Informasi di Universitas Pesantren Tinggi Darul `Ulum Jombang
                mampu secara individu maupun berkolaborasi dengan tim,
                bekerja dengan cepat, <em><strong>Up to Date</strong></em>
                terhadap perkembangan teknologi dan informasi, saat ini saya berusia 20 Tahun,
                walaupun umur saya masih terbilang muda,
                tapi saya sudah memiliki beberapa skill yang dapat di andalkan di era 4.0 masa ini,
                <strong>UI UX Design, Program Office</strong>,
                <!--<strong>Adobe Premiere Pro</strong> dan <strong>After Efect</strong>.-->
            </p>
        </div>
    </section>
    <section class="about" id="about">
        <h1>Mata Kuliah</h1>
        <div class="features">
            <?php foreach ($courses as $course): ?>
                <div class="feature">
                    <a href="<?= base_url('index_matakuliah/' . $course['id']) ?>">
                        <img src="<?= base_url('gambar/' . $course['gambar']) ?>" alt="<?= esc($course['nama_kelas']) ?>">
                        <h4><?= esc($course['nama_kelas']) ?></h4>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="contact" id="contact">
        <h3>Kontak Saya</h3>
        <form id="myForm">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>
            <label for="perusahaan">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="alasan">Alasan Mengontak:</label><br>
            <select id="alasan" name="alasan" required>
                <option value="">Pilih Alasan</option>
                <option value="Agenda Lain">Agenda Lain</option>
                <option value="bekerja_sama">Bekerja Sama</option>
                <option value="rapat_kerja">Rapat Kerja</option>
            </select><br><br>

            <button type="button" onclick="kirimKeWhatsApp()">Kirim ke WhatsApp</button>
        </form>

        <script>
            function kirimKeWhatsApp() {
                var nama = document.getElementById("nama").value;
                var email = document.getElementById("email").value;
                var alasan = document.getElementById("alasan").value;

                if (nama && email && alasan) {
                    var pesan = "Nama: " + nama + "\nEmail: " + email + "\nAlasan: " + alasan;
                    var encodedPesan = encodeURIComponent(pesan);
                    var nomorWhatsApp = "+6281275902829";
                    var urlWhatsApp = "https://wa.me/" + nomorWhatsApp + "?text=" + encodedPesan;
                    window.open(urlWhatsApp, "_blank");
                } else {
                    alert("Harap isi semua bidang!");
                }
            }
        </script>
        <div class="ikuti_saya">
            <p>Sosial Media</p>
        </div>
        <ul>
            <li><a href="https://github.com/nrkholivah" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="mailto:nurkholivah1701@gmail.com"><i class="fas fa-envelope"></i></a></li>
            <li><a href="https://www.instagram.com/nrkhlvh_" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.https://www.linkedin.com/in/nur-kholivah-50a03527a/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </section>
    <footer>
        <div class="container_footer">
            <p>&copy; 2025 Nur Kholivah. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>