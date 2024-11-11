<!DOCTYPE html>
<html lang="id">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
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
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
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
                  <div class="text-bg">
                     <h1>Temukan Harga Mobil Bekas Terbaik</h1>
                     <strong>Platform Prediksi Harga Mobil Terpercaya</strong>
                     <span></span>
                     <p>
                        
                     </p>
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
                     <figure><img src="{{ asset('images/car_img1.png') }}" alt="#"/></figure>
                     <h3>Hyundai</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="{{ asset('images/car_img2.png') }}" alt="#"/></figure>
                     <h3>Audi</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="{{ asset('images/car_img3.png') }}" alt="#"/></figure>
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
                                 <input class="form-control" id="model" name="model" type="number" placeholder="Masukan Merk Mobil">
                              </div>
                           <div class="col-md-12 mt-3">
                                 <input class="form-control" id="tahun" name="tahun" type="number" placeholder="Masukan Tahun">
                              </div>
                           <div class="col-md-12 mt-3">
                                    <label for="Transmisi" class="form-label"> Masukan Transmisi Mobil<label
                                     class="text-red">*</label></label>
                                       <select class="form-control" id="transmisi" name="transmisi" required>
                                          <option value="" selected disabled>Pilih Transmisi Mobil </option>
                                             <option value="Manual">Manual</option>
                                             <option value="Automatic">Automatic</option>
                                             <option value="Semi-Auto">Semi-Auto</option>
                                       </select>

                              </div>
                           <div class="col-md-12 mt-3">
                                 <input class="form-control" id="jarak_tempuh" name="jarak_tempuh" type="number"  placeholder="Masukan Jarak Tempuh">
                              </div>
                           <div class="col-md-12 mt-3">                       
                                    <label for="Bahan_Bakar" class="form-label"> 
                                       Masukan Bahan Bakar mobil
                                       <label class="text-red">*</label>
                                    </label> 
                                    <select class="form-control" id="bahan-bakar" name="bahan-bakar" required>
                                       <option value="" selected disabled>Pilih Bahan Bakar Mobil</option>
                                       <option value="Petrol/Gasoline/Bensin">Petrol/Gasoline/Bensin</option>
                                       <option value="Diesel/Solar">Diesel/Solar</option>
                                     </select>
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="pajak"  name="pajak" type="number" placeholder="Masukan Pajak">
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="mpg"  name="mpg" type="number" placeholder="Masukan MPG">
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="ukuran_mesin" name="ukuran_mesin" placeholder="Masukan Ukuran Mesin">
                              </div>
                              <div class="col-sm-12">
                                 <button class="find_btn">Cari Sekarang</button>
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
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Mengapa Memilih Kami</h2>
                     <span>Berikut alasan mengapa Anda harus memilih Haya Auto Express sebagai platform prediksi harga mobil bekas Anda.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>01</span>
                     <p>Kami menyediakan berbagai jenis mobil bekas berkualitas dengan harga terjangkau dan proses yang mudah.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>02</span>
                     <p>Kami memiliki layanan pelanggan yang siap membantu Anda 24/7 untuk memastikan pengalaman jual beli mobil Anda berjalan lancar.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>03</span>
                     <p>Kami menawarkan pilihan asuransi untuk memastikan Anda merasa aman dan terlindungi selama transaksi jual beli.</p>
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
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="cross_img">
                                    <figure><img src="{{ asset('images/cross_img.png') }}" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Budi Santoso</h4>
                                       <span>Pembeli</span>
                                       <p>Saya sangat puas dengan layanan Haya Auto Express. Proses beli sangat mudah dan mobil yang saya beli dalam kondisi sangat baik.</p>
                                       <i><img src="{{ asset('images/te1.png') }}" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="{{ asset('images/cross_img.png') }}" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Siti Aisyah</h4>
                                       <span>Pembeli</span>
                                       <p>Pengalaman beli mobil di Haya Auto Express sangat memuaskan. Layanan pelanggan sangat responsif dan membantu.</p>
                                       <i><img src="{{ asset('images/te1.png') }}" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="{{ asset('images/cross_img.png') }}" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Andi Wijaya</h4>
                                       <span>Pembeli</span>
                                       <p>Mobil yang disediakan sangat bervariasi dan dalam kondisi baik. Saya pasti akan menggunakan Haya Auto Express lagi di masa depan.</p>
                                       <i><img src="{{ asset('images/te1.png') }}" alt="#"/></i>
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
                        <h3> <strong class="multi color_chang"> Hubungi Kami</strong><br>
                           (+62) 82330478047<br>
                           hayaautoexpress@gmail.com
                        </h3>
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
                        <p>(+62) 82330478047 hayaautoexpress@gmail.com</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
   <script>
        document.getElementById('predictForm').onsubmit = async function(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const params = new URLSearchParams(formData).toString();
            const response = await fetch(`http://localhost:5000/predicts?${params}`);
            const result = await response.json();
            var img = document.getElementById('plot');
    
            // Change the src attribute
            img.src = 'http://localhost:5000/gambar';
            var hasil = document.getElementById('hasil');
    
            // Change the src attribute
            hasil.textContent  = 'Hasil Prediksi: '+result['predict'];
            //document.getElementById('scatterPlot').src = result.plot_url;
        };

    function sendColab() {
    event.preventDefault();
    // Menghentikan perilaku default dari tombol submit

    Swal.fire({
        title: "Cari Sekarang",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak"
      }).then((result) => {
        if (result.isConfirmed) {

            // Ambil nilai dari form input
            const MasukanMerkMobil = document.getElementById('merk_mobil').value; // merk mobil
            const ModelNumeric =
                Model === 'BMX 3X13' ? 0 :
                Model === 'Daihatsu Ayla' ? 1 :
                Model === 'Daihatsu Ayla M' ? 2 :
                Model === 'Daihatsu Ayla R' ? 3 :
                Model === 'Daihatsu Ayla X' ? 4 :
                Model === 'Daihatsu Gran Max' ? 5 :
                Model === 'Daihatsu Grand Max Delvan' ? 6 :
                Model === 'Daihatsu Grand Max PS AC PU' ? 7 :
                Model === 'Daihatsu Sigra' ? 8 :
                Model === 'Daihatsu Sigra R' ? 9 :
                Model === 'Daihatsu Sigra R DLX' ? 10 :
                Model === 'Daihatsu Sigra M' ? 11 :
                Model === 'Daihatsu Terios TX ADVENTURE' ? 12 :
                Model === 'Daihatsu Xenia' ? 13 :
                Model === 'Daihatsu Xenia DLX VTTi' ? 14 :
                Model === 'Daihatsu Xenia R' ? 15 :
                Model === 'Daihatsu Xenia VVTI' ? 16 :
                Model === 'Daihatsu Xenia XI VVTI' ? 17 :
                Model === 'Datsun GO + PANCA A' ? 18 :
                Model === 'Honda Accord VTi' ? 19 :
                Model === 'Honda Brio' ? 20 :
                Model === 'Honda Brio E' ? 21 :
                Model === 'Honda Brio IVTEC E' ? 22 :
                Model === 'Honda Brio S' ? 23 :
                Model === 'Honda Brio Satya E' ? 24 :
                Model === 'Honda BRV E CVT CKD' ? 25 :
                Model === 'Honda civic type R' ? 26 :
                Model === 'Honda CR-V' ? 27 :
                Model === 'Honda CRV i-VTEC' ? 28 :
                Model === 'Honda CRV Turbo Prestige' ? 29 :
                Model === 'Honda Freed G83' ? 30 :
                Model === 'Honda HRV S' ? 31 :
                Model === 'Honda Jazz' ? 32 :
                Model === 'Honda Jazz GE8' ? 33 :
                Model === 'Honda Jazz RS' ? 34 :
                Model === 'Honda Mobilio E' ? 35 :
                Model === 'Isuzu Kijang Phanter' ? 36 :
                Model === 'Mitsubishi' ? 37 :
                Model === 'Mitsubishi Colt L 300' ? 38 :
                Model === 'Mitsubishi Colt T120 SS' ? 39 :
                Model === 'Mitsubishi L300' ? 40 :
                Model === 'Mitsubishi Mirage' ? 41 :
                Model === 'Mitsubishi Pajero Sport DAKAR HI POWER' ? 42 :
                Model === 'Mitsubishi Pajero Sport GLX' ? 43 :
                Model === 'Mitsubishi Strada TRITON DOUBLE CABIN EXCEED' ? 44 :
                Model === 'Mitsubishi T120SS 3-WAY WIDE DECK' ? 45 :
                Model === 'Mitsubishi T120SS T' ? 46 :
                Model === 'Nissan Grand Livina' ? 47 :
                Model === 'Nissan Grand Livina SV' ? 48 :
                Model === 'Nissan March' ? 49 :
                Model === 'Nissan Serena Comfort Touring' ? 50 :
                Model === 'Nissan X Trail' ? 51 :
                Model === 'Toyota Agya' ? 52 :
                Model === 'Toyota Agya G' ? 53 :
                Model === 'Toyota Avanza' ? 54 : 
                Model === 'Toyota Avanza E'? 55 :
                Model === 'Toyota Avanza G' ? 56 :
                Model === 'Toyota Avanza Veloz' ? 57 :
                Model === 'Toyota Calya' ? 58 :
                Model === 'Toyota Calya E' ? 59 :
                Model === 'Toyota Calya G' ? 60 :
                Model === 'Toyota Etios Valco' ? 61 :
                Model === 'Toyota Fortuner' ? 62 :
                Model === 'Toyota Fortuner G' ? 63 :
                Model === 'Toyota Fortuner VRZ TRD LUX' ? 64 :
                Model === 'Toyota Fortuner VRZ TRD LUX AT' ? 65 :
                Model === 'Toyota Hilux Single Cap' ? 66 :
                Model === 'Toyota Inova' ? 67 :
                Model === 'Toyota Innova G' ? 68 :
                Model === 'Toyota Innova V' ? 69 :
                Model === 'Toyota Kijang Innova' ? 70 :
                Model === 'Toyota Kijang Innova V' ? 71 :
                Model === 'Toyota Rush' ? 72 :
                Model === 'Toyota Sienta V' ? 73 :
                Model === 'Toyota Supra mk4' ? 74 : 
                Model === 'Toyota Vios' ? 75 :
                Model === 'Toyota Yaris E' ? 76 :
                Model === 'Toyota Yaris E FL' ? 77 :
                Model === 'Toyota Yaris G'  ? 78 :
                Model === 'Toyota Yaris J' ? 79 :
                Model === 'Toyota Yaris J MC' ? 80 :
                Model === 'Toyota Yaris S' ? 81 ;
                Model === 'Toyota Yaris S GR SPORT 7 AB' ? 82 :
                Model === 'Suzuki Carry Futura FD' ? 83 :
                Model === 'Suzuki Carry Futura' ? 84 :
                Model === 'Suzuki Carry Futura ST 150' ? 85 :
                Model === 'Suzuki Carry Mega' ? 86 :
                Model === 'Suzuki Carry STANDAR PU' ? 87 :
                Model === 'Suzuki Ertiga' ? 88 :   
                Model === 'Suzuki Ertiga DX' ? 89 :
                Model === 'Suzuki Ertiga GL' ? 90 :
                Model === 'Suzuki Ertiga GL DOUBLE'? 91 :
                Model === 'Suzuki Ertiga GL DOUBLE BLOWER' ? 92 :
                Model === 'Suzuki Mega Carry PU AC PS' ? 93 :
                ;

            const MasukanTransmisi = document.getElementById('transmisi').value; // Transmisi mobil
            const MasukanTransmisiNumeric =
               MasukanTransmisi === 'Manual' ? 0 :
               MasukanTransmisi === 'Automatic' ? 1 :
               MasukanTransmisi === 'Semi-Auto' ? 2 :
               ;

            const MasukanBahanBakar = document.getElementById('bahan_bakar').value; // Bahan Bakar mobil
            const MasukanBahanBakarNumeric =
               MasukanBahanBakar === 'Petrol/Gasoline/Bensin' ? 0 :
               MasukanBahanBakar === 'Diesel/Solar' ? 1 :
               ;
                   
    </script>
</html>
