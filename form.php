<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pesonajombang";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Sertakan file konfigurasi
require_once "koneksi.php";

// Tetapkan variabel dan inisialisasikan dengan nilai kosong
$nama_lengkap = $nomer_identitas = $no_hp = $rekomendasi = $jadwal_keberangkatan = $pengunjung_dewasa = $pengunjung_anakanak = $harga_tiket = $total_bayar = "";
$nama_lengkap_err = $nomer_identitas_err = $no_hp_err = $rekomendasi_err = $jadwal_keberangkatan_err = $pengunjung_dewasa_err = $pengunjung_anakanak_err = $harga_tiket_err = $total_bayar_err = "";

// Proses data formulir saat formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi nama lengkap
    $nama_lengkap = trim($_POST["nama_lengkap"]);
    if (empty($nama_lengkap)) {
        $nama_lengkap_err = "Silakan masukkan nama lengkap.";
    } else {
        $nama_lengkap = $nama_lengkap;
    }

    // Validasi nomer identitas
    $nomer_identitas = trim($_POST["nomer_identitas"]);
    if (empty($nomer_identitas)) {
        $nomer_identitas_err = "Silakan masukkan nomor identitas.";
    } else {
        $nomer_identitas = $nomer_identitas;
    }

    // Validasi nomor HP
    $no_hp = trim($_POST["no_hp"]);
    if (empty($no_hp)) {
        $no_hp_err = "Silakan masukkan nomor HP.";
    } else {
        $no_hp = $no_hp;
    }

    // Validasi rekomendasi
    $rekomendasi = trim($_POST["rekomendasi"]);
    if (empty($rekomendasi) || $rekomendasi == "Pilih Jenis Wisata") {
        $rekomendasi_err = "Silakan pilih jenis wisata.";
    } else {
        $rekomendasi = $rekomendasi;
    }

    // Validasi jadwal keberangkatan
    $jadwal_keberangkatan = trim($_POST["jadwal_keberangkatan"]);
    if (empty($jadwal_keberangkatan)) {
        $jadwal_keberangkatan_err = "Silakan pilih jadwal keberangkatan.";
    } else {
        $jadwal_keberangkatan = $jadwal_keberangkatan;
    }

    // Validasi jumlah pengunjung dewasa
    $pengunjung_dewasa = trim($_POST["pengunjung_dewasa"]);
    if (empty($pengunjung_dewasa)) {
        $pengunjung_dewasa_err = "Silakan masukkan jumlah pengunjung dewasa.";
    } else {
        $pengunjung_dewasa = $pengunjung_dewasa;
    }

    // Validasi jumlah pengunjung anak-anak
    $pengunjung_anakanak = trim($_POST["pengunjung_anakanak"]);
    if (empty($pengunjung_anakanak)) {
        $pengunjung_anakanak_err = "Silakan masukkan jumlah pengunjung anak-anak.";
    } else {
        $pengunjung_anakanak = $pengunjung_anakanak;
    }

    // Validasi harga tiket
    $harga_tiket = trim($_POST["harga_tiket"]);
    if (empty($harga_tiket)) {
        $harga_tiket_err = "Silakan pilih jenis wisata terlebih dahulu.";
    } else {
        $harga_tiket = $harga_tiket;
    }

    // Validasi total bayar
    $total_bayar = trim($_POST["total_bayar"]);
    if (empty($total_bayar)) {
        $total_bayar_err = "Total bayar tidak dapat dikosongkan.";
    } else {
        $total_bayar = $total_bayar;
    }

    // Periksa apakah tidak ada kesalahan input sebelum menyimpan data
    if (empty($nama_lengkap_err) && empty($nomer_identitas_err) && empty($no_hp_err) && empty($rekomendasi_err) && empty($jadwal_keberangkatan_err) && empty($pengunjung_dewasa_err) && empty($pengunjung_anakanak_err) && empty($harga_tiket_err) && empty($total_bayar_err)) {
        // Buat dan jalankan query SQL untuk menyimpan data
        $sql = "INSERT INTO tb_form (nama_lengkap, nomer_identitas, no_hp, rekomendasi, jadwal_keberangkatan, pengunjung_dewasa, pengunjung_anakanak, harga_tiket, total_bayar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            // Bind parameter ke pernyataan yang disiapkan sebagai parameter
            $stmt->bind_param("sssssiidd", $param_nama_lengkap, $param_nomer_identitas, $param_no_hp, $param_rekomendasi, $param_jadwal_keberangkatan, $param_pengunjung_dewasa, $param_pengunjung_anakanak, $param_harga_tiket, $param_total_bayar);

            // Tetapkan nilai parameter
            $param_nama_lengkap = $nama_lengkap;
            $param_nomer_identitas = $nomer_identitas;
            $param_no_hp = $no_hp;
            $param_rekomendasi = $rekomendasi;
            $param_jadwal_keberangkatan = $jadwal_keberangkatan;
            $param_pengunjung_dewasa = $pengunjung_dewasa;
            $param_pengunjung_anakanak = $pengunjung_anakanak;
            $param_harga_tiket = $harga_tiket;
            $param_total_bayar = $total_bayar;

            // Cobalah untuk melaksanakan pernyataan yang disiapkan
            if ($stmt->execute()) {
                // Rekaman berhasil dibuat. Redirect ke halaman landing
                header("location: index.html");
                exit();
            } else {
                echo "Oops! Terjadi kesalahan. Silakan coba lagi nanti.";
            }
        }

        // Tutup pernyataan
        $stmt->close();
    }

    // Tutup koneksi
    $conn->close();
}
?>
