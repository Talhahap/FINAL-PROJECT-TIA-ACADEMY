<!DOCTYPE html>
<html lang="id">

<head>
    <!-- basic -->
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- site metas -->
    <title>Haya Auto Express</title>
    <meta name="keywords" content="jual mobil, beli mobil, mobil bekas">
    <meta name="description" content="Haya Auto Express - Platform terbaik untuk jual beli mobil bekas di Indonesia">
    <meta name="author" content="Haya Auto Express">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/car.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <p class="text-header">Haya Auto Express</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-12">
                    <div class="text-bg p-0">
                        <h1 class="mb-1">Temukan Harga Mobil Bekas Terbaik</h1>
                        <strong class="mb-3">Platform Prediksi Harga Mobil Terpercaya</strong>

                        <a href="#">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- end banner -->
    <!-- car -->
    <div class="car">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>VARIETAS MOBIL</h2>
                        <span>Kami memprediksi harga beragam mobil bekas sesuai dengan kebutuhan Anda.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 padding_leri">
                    <div class="car_box">
                        <figure><img src="{{ asset('images/car_img1.png') }}" alt="#" /></figure>
                        <h3>Hyundai</h3>
                    </div>
                </div>
                <div class="col-md-4 padding_leri">
                    <div class="car_box">
                        <figure><img src="{{ asset('images/car_img2.png') }}" alt="#" /></figure>
                        <h3>Audi</h3>
                    </div>
                </div>
                <div class="col-md-4 padding_leri">
                    <div class="car_box">
                        <figure><img src="{{ asset('images/car_img3.png') }}" alt="#" /></figure>
                        <h3>BMW X5</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end car -->
    <!-- bestCar -->
    <div id="contact" class="bestCar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3 id="hasil" style="color:white"> </h3>
                    <img id="plot" src="" width=100%>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-md-12 offset-md-12">
                            <form class="main_form" id="predictForm">
                                <div class="titlepage">
                                    <h2>Temukan Harga Mobil Bekas Terbaik</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <label for="model" class="form-label">Merk <label
                                                class="text-red">*</label></label>
                                        <!-- <select class="form-control" id="model" name="model" required>
                                            <option value="" selected disabled>Pilih Merk Mobil</option>
                                            <option value="0">BMW 3X13</option>
                                            <option value="1">Daiatsu Sigra</option>
                                            <option value="2">Daihatsi Ayla R</option>
                                            <option value="3">Daihatsu Ayla</option>
                                            <option value="4">Daihatsu Ayla M</option>
                                            <option value="5">Daihatsu Ayla R</option>
                                            <option value="6">Daihatsu Ayla X</option>
                                            <option value="7">Daihatsu Gran Max</option>
                                            <option value="8">Daihatsu Grand Max Delvan</option>
                                            <option value="9">Daihatsu Grand Max PS AC PU</option>
                                            <option value="10">Daihatsu Sigra</option>
                                            <option value="11">Daihatsu Sigra</option>
                                            <option value="12">Daihatsu Sigra M</option>
                                            <option value="13">Daihatsu Sigra R</option>
                                            <option value="14">Daihatsu Sigra R DLX</option>
                                            <option value="15">Daihatsu Terios TX ADVENTURE</option>
                                            <option value="16">Daihatsu Xenia</option>
                                            <option value="17">Daihatsu Xenia</option>
                                            <option value="18">Daihatsu Xenia DLX VTTi</option>
                                            <option value="19">Daihatsu Xenia R</option>
                                            <option value="20">Daihatsu Xenia VVTI</option>
                                            <option value="21">Daihatsu Xenia XI VVTI</option>
                                            <option value="22">Datsun GO + PANCA A</option>
                                            <option value="23">Honda Accord VTi</option>
                                            <option value="24">Honda BRV E CVT CKD</option>
                                            <option value="25">Honda Brio</option>
                                            <option value="26">Honda Brio E</option>
                                            <option value="27">Honda Brio IVTEC E</option>
                                            <option value="28">Honda Brio S</option>
                                            <option value="29">Honda Brio Satya E</option>
                                            <option value="30">Honda CR-V</option>
                                            <option value="31">Honda CRV Turbo Prestige</option>
                                            <option value="32">Honda CRV i-VTEC</option>
                                            <option value="33">Honda Freed G83</option>
                                            <option value="34">Honda HRV S</option>
                                            <option value="35">Honda Jazz</option>
                                            <option value="36">Honda Jazz GE8</option>
                                            <option value="37">Honda Jazz RS</option>
                                            <option value="38">Honda Mobilio E</option>
                                            <option value="39">Honda civic type R</option>
                                            <option value="40">Isuzu Kijang Phanter</option>
                                            <option value="41">Mitsubishi</option>
                                            <option value="42">Mitsubishi Colt L 300</option>
                                            <option value="43">Mitsubishi Colt T120 SS</option>
                                            <option value="44">Mitsubishi L300</option>
                                            <option value="45">Mitsubishi Mirage</option>
                                            <option value="46">Mitsubishi Pajero Sport DAKAR HI POWER</option>
                                            <option value="47">Mitsubishi Pajero Sport GLX</option>
                                            <option value="48">Mitsubishi Strada TRITON DOUBLE CABIN EXCEED</option>
                                            <option value="49">Mitsubishi T120SS 3-WAY WIDE DECK</option>
                                            <option value="50">Mitsubishi T120SS T</option>
                                            <option value="51">Nissan Grand Livina</option>
                                            <option value="52">Nissan Grand Livina SV</option>
                                            <option value="53">Nissan March</option>
                                            <option value="54">Nissan Serena Comfort Touring</option>
                                            <option value="55">Nissan X Trail</option>
                                            <option value="56">Suzuki Carry Futura</option>
                                            <option value="57">Suzuki Carry Futura FD</option>
                                            <option value="58">Suzuki Carry Futura ST 150</option>
                                            <option value="59">Suzuki Carry Mega</option>
                                            <option value="60">Suzuki Carry STANDAR PU</option>
                                            <option value="61">Suzuki Ertiga</option>
                                            <option value="62">Suzuki Ertiga DX</option>
                                            <option value="63">Suzuki Ertiga GL</option>
                                            <option value="64">Suzuki Ertiga GL</option>
                                            <option value="65">Suzuki Ertiga GL DOUBLE BLOWER</option>
                                            <option value="66">Suzuki Mega Carry PU AC PS</option>
                                            <option value="67">Toyota Agya</option>
                                            <option value="68">Toyota Agya G</option>
                                            <option value="69">Toyota Avanza</option>
                                            <option value="70">Toyota Avanza</option>
                                            <option value="71">Toyota Avanza E</option>
                                            <option value="72">Toyota Avanza G</option>
                                            <option value="73">Toyota Avanza Veloz</option>
                                            <option value="74">Toyota Calya</option>
                                            <option value="75">Toyota Calya E</option>
                                            <option value="76">Toyota Calya G</option>
                                            <option value="77">Toyota Etios Valco</option>
                                            <option value="78">Toyota Fortuner</option>
                                            <option value="79">Toyota Fortuner</option>
                                            <option value="80">Toyota Fortuner G</option>
                                            <option value="81">Toyota Fortuner VRZ TRD LUX</option>
                                            <option value="82">Toyota Fortuner VRZ TRD LUX AT</option>
                                            <option value="83">Toyota Hilux Single Cap</option>
                                            <option value="84">Toyota Innova G</option>
                                            <option value="85">Toyota Innova V</option>
                                            <option value="86">Toyota Inova</option>
                                            <option value="87">Toyota Kijang Innova</option>
                                            <option value="88">Toyota Kijang Innova V</option>
                                            <option value="89">Toyota Kijang Invova</option>
                                            <option value="90">Toyota Rush</option>
                                            <option value="91">Toyota Sienta V</option>
                                            <option value="92">Toyota Supra mk4</option>
                                            <option value="93">Toyota Vios</option>
                                            <option value="94">Toyota Yaris E</option>
                                            <option value="95">Toyota Yaris E FL</option>
                                            <option value="96">Toyota Yaris G</option>
                                            <option value="97">Toyota Yaris J</option>
                                            <option value="98">Toyota Yaris J MC</option>
                                            <option value="99">Toyota Yaris S</option>
                                            <option value="100">Toyota Yaris S GR SPORT 7 AB</option>
                                        </select> -->
                                        <input class="form-control" min="1500" max="2099" id="model" name="model"
                                            type="text" placeholder="Masukan Mobil">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="transmisi" class="form-label">Tahun <label
                                                class="text-red">*</label></label>
                                        <input class="form-control" min="1500" max="2099" id="tahun" name="tahun"
                                            type="number" placeholder="Masukan Tahun Mobil">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="transmisi" class="form-label">Transmisi <label
                                                class="text-red">*</label></label>
                                        <select class="form-control" id="transmisi" name="transmisi" required>
                                            <option value="" selected disabled>Pilih Transmisi Mobil </option>
                                            <option value="0">Manual</option>
                                            <option value="1">Automatic</option>
                                            <option value="2">Semi-Auto</option>
                                        </select>

                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="jarak_tempuh" class="form-label">Jarak Tempuh <label
                                                class="text-red">*</label></label>
                                        <input class="form-control" id="jarak_tempuh" name="jarak_tempuh" type="number"
                                            placeholder="Masukan Jarak Tempuh Mobil">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="bahan_bakar" class="form-label">Bahan Bakar <label
                                                class="text-red">*</label>
                                        </label>
                                        <select class="form-control" id="bahan_bakar" name="bahan_bakar" required>
                                            <option value="" selected disabled>Pilih Bahan Bakar Mobil</option>
                                            <option value="0">Petrol/Gasoline/Bensin</option>
                                            <option value="1">Diesel/Solar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="pajak" class="form-label">Pajak <label class="text-red">*</label>
                                        </label>
                                        <input class="form-control" id="pajak" name="pajak" type="number"
                                            placeholder="Masukan Pajak Mobil">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="mpg" class="form-label">MPG (Mil Per Galon)<label
                                                class="text-red">*</label>
                                        </label>
                                        <input class="form-control" id="mpg" name="mpg" type="number"
                                            placeholder="Masukan MPG Mobil">
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label for="ukuran_mesin" class="form-label">Ukuran Mesin <label
                                                class="text-red">*</label>
                                        </label>
                                        <input class="form-control" type="number" id="ukuran_mesin" name="ukuran_mesin"
                                            placeholder="Masukan Ukuran Mesin Mobil">
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="find_btn" type="button" onclick="cariSekarang(event)">Cari
                                            Sekarang</button>
                                    </div>
                                    <div class="col-md-12 mt-3" id="hasilContainer" style="display: none;">
                                        <label for="hasil" class="form-label-hasil text-center">Hasil Pencarian
                                        </label><br>
                                        <p>Berdasarkan kriteria yang telah ditentukan, harga yang disarankan adalah
                                            sejumlah :</p>
                                        <input class="form-control" type="text" id="hasilHarga" name="hasilHarga"
                                            required disabled>
                                        <div class="col-sm-12">
                                            <a href="javascript:void(0);" onclick="location.reload();"><button
                                                    class="find_btn" type="button">Ok</button></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end bestCar -->

    <!-- choose  section -->
    <div class=" choose ">
        <div class=" container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Mengapa Memilih Kami</h2>
                        <span>Berikut alasan mengapa Anda harus memilih <span class="branding">Haya Auto Express</span>
                            sebagai platform prediksi
                            harga mobil bekas Anda.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="choose_box">
                        <span>01</span>
                        <p>Kami menyediakan berbagai jenis mobil bekas berkualitas dengan
                            harga terjangkau dan proses
                            yang mudah.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="choose_box">
                        <span>02</span>
                        <p>Kami memiliki layanan pelanggan yang siap membantu Anda 24/7
                            untuk memastikan pengalaman jual
                            beli mobil Anda berjalan lancar.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="choose_box">
                        <span>03</span>
                        <p>Kami menawarkan pilihan asuransi untuk memastikan Anda merasa
                            aman dan terlindungi selama
                            transaksi jual beli.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end choose  section -->
    <!-- customer -->
    <div class="cutomer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Apa Kata Pelanggan Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <!-- <div class="cross_img">
                                            <figure><img src="{{ asset('images/cross_img.png') }}" alt="#" /></figure>
                                        </div> -->
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Budi Santoso</h4>
                                                <span>Pembeli</span>
                                                <p>Saya sangat puas dengan layanan Haya Auto
                                                    Express. Proses beli sangat
                                                    mudah dan mobil yang saya beli dalam
                                                    kondisi sangat baik.</p>
                                                <i><img src="{{ asset('images/te1.png') }}" alt="#" /></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <!-- <div class="cross_img">
                                            <figure><img src="{{ asset('images/cross_img.png') }}" alt="#" /></figure>
                                        </div> -->
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Siti Aisyah</h4>
                                                <span>Pembeli</span>
                                                <p>Pengalaman beli mobil di Haya Auto
                                                    Express sangat memuaskan. Layanan
                                                    pelanggan sangat responsif dan membantu.
                                                </p>
                                                <i><img src="{{ asset('images/te1.png') }}" alt="#" /></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <!-- <div class="cross_img">
                                            <figure><img src="{{ asset('images/cross_img.png') }}" alt="#" /></figure>
                                        </div> -->
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <h4>Andi Wijaya</h4>
                                                <span>Pembeli</span>
                                                <p>Mobil yang disediakan sangat bervariasi
                                                    dan dalam kondisi baik. Saya
                                                    pasti akan menggunakan Haya Auto Express
                                                    lagi di masa depan.</p>
                                                <i><img src="{{ asset('images/te1.png') }}" alt="#" /></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Sebelumnya</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Selanjutnya</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end customer -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cont_call">
                            <h3> <strong class="multi color_chang"> Hubungi
                                    Kami</strong></h3>
                            <h4><a href="https://wa.me/+6282330478047">(+62)82330478047</a><br>
                                <a href="mailto:hayaautoexpress@gmail.com">hayaautoexpress@gmail.com</a>
                            </h4>
                        </div>
                        <div class="cont">
                            <h3> <strong class="multi"> Haya Auto Express</strong>
                                Platform Prediksi Harga Mobil Bekas Terbaik 2024
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-footer">Copyright © 2024 | Developed with ♥ by Haya Auto Express</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
    </script>

</body>
<script>
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

function formatRupiah(angka) {
    return "Rp. " + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function cariSekarang() {
    event.preventDefault();

    Swal.fire({
        title: "Tunjukkan Hasil Analisa?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak"
    }).then((result) => {
        if (result.isConfirmed) {
            // Ambil nilai input dari form
            // const model = parseInt(document.getElementById('model').value);
            const tahun = parseInt(document.getElementById('tahun').value);
            const transmisi = parseInt(document.getElementById('transmisi').value);
            const jarakTempuh = parseFloat(document.getElementById('jarak_tempuh').value);
            const bahanBakar = parseInt(document.getElementById('bahan_bakar').value);
            const pajak = parseFloat(document.getElementById('pajak').value);
            const mpg = parseFloat(document.getElementById('mpg').value);
            const ukuranMesin = parseFloat(document.getElementById('ukuran_mesin').value);

            const data = {
                'model': 1,
                'tahun': tahun,
                'transmisi': transmisi,
                'jarak_tempuh': jarakTempuh,
                'bahan_bakar': bahanBakar,
                'pajak': pajak,
                'mpg': mpg,
                'ukuran_mesin': ukuranMesin,
            };

            console.log("Data yang dikirim:", data);

            // Kirim data ke API backend
            fetch('/predict', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(responseData => {
                    if (responseData.error) {
                        Swal.fire("Error", responseData.error, "error");
                    } else {
                        console.log("Menampilkan hasil prediksi...");
                        document.getElementById("hasilContainer").style.display = "block";

                        const harga = responseData["Prediksi Harga"];
                        console.log(harga);

                        // Format harga menjadi Rupiah
                        const hargaFormatted = formatRupiah(harga);

                        const hasilInput = document.getElementById("hasilHarga");

                        // Hapus atribut disabled sementara
                        hasilInput.disabled = false;

                        // Isi nilai yang sudah diformat ke input
                        hasilInput.value = hargaFormatted;

                        // Tambahkan atribut disabled kembali (opsional)
                        hasilInput.disabled = true;
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire("Error", "Terjadi kesalahan saat memproses permintaan.", "error");
                });
        }
    });
}
</script>

</html>
