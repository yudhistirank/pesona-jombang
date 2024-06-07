<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesona Jombang - BLOG</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<section class="sub-header">
    <nav>
        <a href="index.html"><img src="img/LogoPJ.png" alt="Pesona Jombang"></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="rekomendasi.html">Wisata & Kuliner</a></li>
                    <li><a href="pesantiket.php">Pesan Tiket</a></li>
                    <li><a href="tentang.html">Tentang Kami</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Pesan Tiket</h1>
</section>

<!-- BLog Konten -->

<section class="blog-isi">
    <div class="row">
        <div class="blog-kiri">
            <h2>Harga Tiket</h2>
            <p>Jombang menawarkan berbagai destinasi wisata menarik yang siap dieksplorasi. Untuk mempermudah perjalanan Anda, kami menyediakan layanan pemesanan tiket online yang cepat dan praktis.
                Nikmati keindahan alam, kekayaan budaya, dan aneka kuliner Jombang tanpa repot antre panjang. Cukup pilih destinasi favorit Anda, pesan tiket, dan siap-siap untuk petualangan seru!</p>
                <br>
            <p>Kami memahami pentingnya kenyamanan dan kepuasan Anda. Oleh karena itu, sistem kami dirancang untuk memberikan pengalaman pemesanan yang mudah dan aman. Mulai dari wisata alam seperti
                Goa Sigolo Golo hingga tempat bersejarah seperti Candi Rimbi, semua dapat Anda akses hanya dengan beberapa klik. Jangan lewatkan kesempatan untuk menciptakan kenangan indah bersama keluarga dan teman-teman.
                Pesan tiket Anda sekarang dan rasakan pesona Jombang yang sesungguhnya!</p>
        <a href="pesantiket.html" class="btn">Pesan Sekarang</a>
                
        <div class="comment-box">
    <h3>Form Pemesanan Tiket</h3>
    <form class="comment-form" id="formPemesanan" action="form.php" method="post">
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
        <input type="text" name="nomer_identitas" placeholder="Nomer Identitas" required>
        <input type="text" name="no_hp" placeholder="No. HP" required>
        <select name="rekomendasi" id="rekomendasi" onchange="hargaTiket()" required>
            <option selected>Pilih Jenis Wisata</option>
            <option value="Tanah Senja">Tanah Senja</option>
            <option value="Agropolis">Agropolis</option>
            <option value="Sumber Biru">Sumber Biru</option>
            <option value="Candi Rimbi">Candi Rimbi</option>
            <option value="Kedung Cinet">Kedung Cinet</option>
            <option value="Duran Duren">Duran Duren</option>
            <option value="Goa Sigolo-golo">Goa Sigolo-golo</option>
            <option value="Baletani">Baletani</option>
            <option value="Banyu Mili Wonosalam">Banyu Mili Wonosalam</option>
        </select>
        <input type="date" name="jadwal_keberangkatan" required>
        <input type="number" name="pengunjung_dewasa" id="pengunjung_dewasa" placeholder="Jumlah Pengunjung Dewasa" required>
        <input type="number" name="pengunjung_anakanak" id="pengunjung_anakanak" placeholder="Jumlah Pengunjung Anak-Anak" required>
        <p>Harga Tiket: Rp. <input type="number" name="harga_tiket" id="harga_tiket" readonly required style="border: none;"></p>
        <p>Total Bayar: Rp. <input type="number" name="total_bayar" id="total_bayar" readonly required style="border: none;"></p>
        <div style="display: flex; align-items: center;">
            <input type="checkbox" name="setuju" required style="margin-right: 10px;">
            <span>Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.</span>
        </div>
        <br>
        <button type="submit" name="pesan" class="btn blue-btn">
        Pesan Tiket
        </button>
    </form>
</div>

        </div>
        
        <div class="blog-kanan">
            <h3>HARGA TIKET WISATA</h3>
            <div>
                <span>Tanah Senja</span>
                <span>Rp 10.000</span>
            </div>
            <div>
                <span>Agropolis</span>
                <span>Rp 20.000</span>
            </div>
            <div>
                <span>Sumber Biru</span>
                <span>Rp 10.000</span>
            </div>
            <div>
                <span>Candi Rimbi</span>
                <span>Rp 5.000</span>
            </div>
            <div>
                <span>Kedung Cinet</span>
                <span>Rp 5.000 </span>
            </div>
            <div>
                <span>Duran Duren</span>
                <span>Rp 25.000</span>
            </div>
            <div>
                <span>Goa Sigolo-golo</span>
                <span> Rp 15.000</span>
            </div>
            <div>
                <span>Baletani</span>
                <span>Rp 15.000</span>
            </div>
            <div>
                <span>Banyu Mili Wonosalam</span>
                <span>Rp 10.000</span>
            </div>
        </div>
    </div>

</section>

<!-- Footer -->
<section class="footer" id="Tentang">
    <h4>Tentang Kami</h4>
    <p>Pesona Jombang adalah platform yang menyediakan informasi destinasi wisata dan kuliner di Jombang.
        <br> Kami berkomitmen untuk mempromosikan keindahan dan kekayaan alam<br> serta budaya Jombang kepada dunia.</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
    </div>
    <p>Developed With <i class="fa fa-heart-o"></i> by Kelompok 14</p>

</section>

<!-- JavaScript untuk logika harga tiket dan perhitungan total bayar -->
<script>
    function hargaTiket() {
        const kelas = document.getElementById("rekomendasi").value;
        const hargaTiket = document.getElementById("harga_tiket");

        // Set harga berdasarkan tempat wisata
        switch (kelas) {
            case "Tanah Senja":
                hargaTiket.value = 10000;
                break;
            case "Agropolis":
                hargaTiket.value = 20000;
                break;
            case "Sumber Biru":
                hargaTiket.value = 10000;
                break;
            case "Candi Rimbi":
                hargaTiket.value = 5000;
                break;
            case "Kedung Cinet":
                hargaTiket.value = 5000;
                break;
            case "Duran Duren":
                hargaTiket.value = 25000;
                break;
            case "Goa Sigolo-golo":
                hargaTiket.value = 15000;
                break;
            case "Baletani":
                hargaTiket.value = 15000;
                break;
            case "Banyu Mili Wonosalam":
                hargaTiket.value = 10000;
                break;
            default:
                hargaTiket.value = 0;
        }
        
        hitungTotalBayar();
    }

    function hitungTotalBayar() {
        const pengunjungDewasa = parseInt(document.getElementById("pengunjung_dewasa").value) || 0;
        const pengunjungAnak = parseInt(document.getElementById("pengunjung_anakanak").value) || 0;
        const hargaTiket = parseInt(document.getElementById("harga_tiket").value) || 0;
        const totalBayar = (pengunjungDewasa * hargaTiket) + (pengunjungAnak * hargaTiket * 0.5);
        
        document.getElementById("total_bayar").value = totalBayar;
    }

    // Tambahkan event listener untuk perubahan pada input jumlah pengunjung
    document.getElementById("pengunjung_dewasa").addEventListener("input", hitungTotalBayar);
    document.getElementById("pengunjung_anakanak").addEventListener("input", hitungTotalBayar);
</script>


<!-- JS toogle menu -->
<script>
    var navLink = document.getElementById("navLink");
    function showMenu(){
        navLink.style.right = "0";
    }
    function hideMenu(){
        navLink.style.right = "-200px";
    }
    

</script>

<script src="https://kit.fontawesome.com/a07b076ce3.js" crossorigin="anonymous"></script>
        
</body>
</html>

























