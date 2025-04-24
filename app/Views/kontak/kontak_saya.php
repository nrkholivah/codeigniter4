<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Saya</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/kontak_saya.css'); ?>">
</head>

<body>

    <h2>Form Kontak Saya </h2>
    <form id="myForm">
        <label for="nama">Nama Pengontak:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="perusahaan">Perusahaan:</label><br>
        <input type="text" id="perusahaan" name="perusahaan" required><br><br>

        <label for="alasan">Alasan Mengontak:</label><br>
        <select id="alasan" name="alasan" required>
            <option value="">Pilih Alasan</option>
            <option value="memesan_web">Memesan Web</option>
            <option value="bekerja_sama">Bekerja sama</option>
            <option value="rapat_kerja">Rapat Kerja</option>
        </select><br><br>

        <button type="button" onclick="kirimKeWhatsApp()">Kirim ke WhatsApp</button>
    </form>

    <script>
        function kirimKeWhatsApp() {
            var nama = document.getElementById("nama").value;
            var perusahaan = document.getElementById("perusahaan").value;
            var alasan = document.getElementById("alasan").value;

            if (nama && perusahaan && alasan) {
                var pesan = "Nama: " + nama + "\nPerusahaan: " + perusahaan + "\nAlasan: " + alasan;
                var encodedPesan = encodeURIComponent(pesan);
                var nomorWhatsApp = "+6281275902829";
                var urlWhatsApp = "https://wa.me/+6281275902829" + "?text=" + encodedPesan;
                window.open(urlWhatsApp, "_blank");
            } else {
                alert("Harap isi semua bidang!");
            }
        }
    </script>
</body>

</html>