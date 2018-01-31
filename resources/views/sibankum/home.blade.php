<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIBANKUM (Sistem Informasi Bantuan Hukum)</title>
    <meta name="description" content="SIBANKUM (Sistem Informasi Bantuan Hukum)">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    {!! Html::style('assets/plugins/fullPage/jquery.fullpage.min.css') !!}
    {!! Html::style('assets/plugins/owlCarousel/assets/owl.carousel.min.css') !!}
    {!! Html::style('assets/plugins/owlCarousel/assets/owl.theme.default.min.css') !!}
    {!! Html::style('assets/css/sibankum.css') !!}
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}"/>
</head>
<body>
    <nav class="menu">
        <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
        <label class="menu-open-button" for="menu-open">
  				<span class="hamburger hamburger-1"></span>
  				<span class="hamburger hamburger-2"></span>
  				<span class="hamburger hamburger-3"></span>
		    </label>
        <a href="#beranda" class="menu-item tooltips"><span>Beranda</span> <i class="fa fa-home"></i> </a>
        <a href="#tentang" class="menu-item tooltips"><span>Tentang</span> <i class="fa fa-bank"></i> </a>
        <a href="#produk" class="menu-item tooltips"><span>Produk Hukum Pertanian</span> <i class="fa fa-gavel"></i> </a>
        <a href="#bantuan" class="menu-item tooltips"><span>Layanan Bantuan Hukum</span> <i class="fa fa-handshake-o"></i> </a>
        <a href="#visi-misi" class="menu-item tooltips"><span>Visi Misi</span> <i class="fa fa-balance-scale"></i> </a>
        <a href="#alur" class="menu-item tooltips"><span>Alur Penyelesaian Perkara</span> <i class="fa fa-retweet"></i> </a>
        <a href="#kontak" class="menu-item tooltips"><span>Kontak</span> <i class="fa fa-envelope-o"></i> </a>
    </nav>
    <div id="fullpage">
        <section class="section dark" id="beranda" style="background-image: url('{{ asset('assets/img/bg1.jpg') }}')">
            <div class="container">
                <img class="logo" src="./assets/img/logo.png" alt="Logo">
                <h1>Sistem Informasi Bantuan Hukum</h1>
                <h4>Mesin Pencari Dokumen Bantuan Hukum</h4>
                <!-- <form class="form-search" action="/result" method="post" name="search" onsubmit="return required()"> -->
                <form class="form-search" action="/result" method="post" name="search" required>
                    {!! csrf_field() !!}
                    <div class="input-wrapper">
                        <input class="input-search" type="text" name="keyword" placeholder="Cari...">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </form>
                <div class="arrow arrow-down">
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </div>
            </div>
        </section>
        <section class="section light" id="tentang" style="background-image: url('{{ asset('assets/img/gedung-pia.jpg') }}')">
            <div class="container">
                <i class="fa fa-bank fa-4x mb-2"></i>
                <h2>Tentang Kami</h2>
                <p>Advokasi hukum lingkup Kementerian Pertanian yang dilaksanakan dalam rangka mengantisipasi akibat hukum yang ditimbulkan dalam suatu pelaksanaan kegiatan baik litigasi dan non litigasi dengan pembatasan tertentu. Diperlukan penanganan
                    berupa bantuan hukum secara terkoordinasi dengan obyek penyelesaian meliputi: pengamanan kebijakan berupa beschiking dan regeling, permasalahan aset negara berupa tanah/bangunan, perjanjian/wanprestasi, permasalahan tender/lelang,
                    perizinan, kepegawaian, aspek perdata dan tata usaha negara, judicial review di mahkamah agung, dan constitutional review di mahkamah konstitusi, serta menghadapi gugatan masyarakat, lembaga swadaya masyarakat dan pihak swasta terhadap
                    Menteri Pertanian, Direktur Jenderal/Kepala Badan lingkup eselon I Kementerian Pertanian.</p>
                <p class="small"><em>Dasar Hukum: Pasal 65 Ayat (2) Permentan Nomor 43/2015 tentang Organisasi dan Tata Kerja Kementerian Pertanian.</em></p>
            </div>
        </section>
        <section class="section dark" id="produk" style="background-image: url('{{ asset('assets/img/bg2.jpg') }}')">
            <div class="container">
                <i class="fa fa-4x fa-gavel mb-2"></i>
                <h2>Produk Hukum Pertanian</h2>
                <p>Produk hukum pertanian terbagi menjadi dua, Undang-Undang dan Peraturan pemerintah.</p>
                <div class="row">
                    <div class="owl-carousel owl-theme produk-slider">

                        <div class="item">
                            <p>Undang-Undang Nomor 18 Tahun 2012 tentang Pangan</p>
                            <p><a download href="/undang-undang/UU-NO-18-Tahun-2012.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 19 Tahun 2013 tentang Perlindungan dan Pemberdayaan Petani</p>
                            <p><a download href="/undang-undang/UU-NO-19-Tahun-2013.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 12 Tahun 1992 tentang Budidaya Tanaman.</p>
                            <p><a download href="/undang-undang/UU-NO-12-Tahun-1992.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 16 Tahun 1992 tentang Karantina Hewan, Ikan dan Tumbuhan</p>
                            <p><a download href="/undang-undang/UU-NO-16-Tahun-1992.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 29 Tahun 2000 tentang Perlindungan Varietas Tanaman</p>
                            <p><a download href="/undang-undang/UU-NO-29-Tahun-2000.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 18 Tahun 2004 tentang Perkebunan</p>
                            <p><a download href="/undang-undang/UU-NO-18-Tahun-2004.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 4 Tahun 2006 tentang Pengesahan <em>International Treaty On Plant Genetic Resources For Food and Agriculture</em> (Perjanjian Mengenai Sumber Daya Genetik Tanaman Untuk Pangan dan Pertanian)</p>
                            <p><a download href="/undang-undang/UU-NO-4-Tahun-2006.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 16 Tahun 2006 tentang Sistem Penyuluhan Pertanian, Perikanan dan Kehutanan</p>
                            <p><a download href="/undang-undang/UU-NO-16-Tahun-2006.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan</p>
                            <p><a download href="/undang-undang/UU-NO-18-Tahun-2009.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 41 Tahun 2009 tentang Perlindungan Lahan Pertanian Pangan Berkelanjutan</p>
                            <p><a download href="/undang-undang/UU-NO-41-Tahun-2009.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 13 Tahun 2010 tentang Hortikultura</p>
                            <p><a download href="/undang-undang/UU-NO-13-Tahun-2010.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 18 Tahun 2012 tentang Pangan</p>
                            <p><a download href="/undang-undang/UU-NO-18-Tahun-2012.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 19 Tahun 2013 tentang Perlindungan dan Pemberdayaan Petani</p>
                            <p><a download href="/undang-undang/UU-NO-19-Tahun-2013.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 12 Tahun 1992 tentang Budidaya Tanaman.</p>
                            <p><a download href="/undang-undang/UU-NO-12-Tahun-1992.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                        <div class="item">
                            <p>Undang-Undang Nomor 16 Tahun 1992 tentang Karantina Hewan, Ikan da Tumbuhan</p>
                            <p><a download href="/undang-undang/UU-NO-16-Tahun-1992.pdf" target="_blank"><button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Unduh</button></a></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="section light" id="bantuan" style="background-image: url('{{ asset('assets/img/bg5.jpg') }}')">
            <div class="container">
                <i class="fa fa-4x fa-handshake-o"></i>
                <h2>Layanan Bantuan Hukum</h2>
                <p>Layanan Bantuan Hukum berupa pemberian pertimbangan hukum (litigasi/non litigasi), legal opinion, dan kajian hukum yang dikoordinasikan dengan unit eselon I terkait, melakukan mediasi dan pemberian bantuan hukum dalam menghadapi gugatan
                    perdata dan tata usaha negara terhadap Kementerian Pertanian yang dilakukan secara koordinasi
            </div>
        </section>
        <section class="section dark" id="visi-misi" style="background-image: url('{{ asset('assets/img/bg4.jpg') }}')">
            <div class="container">
                <i class="fa fa-4x fa-balance-scale mb-2"></i>
                <div class="row">
                    <div class="owl-carousel owl-theme visi-misi-slider">
                        <div class="item">
                            <h2>Visi</h2>
                            <p>Terwujud dan berfungsinya sistem hukum pertanian dan tersedianya informasi publik yang lengkap dalam mendukung pembangunan pertanian.</p>
                        </div>
                        <div class="item">
                            <h2>Misi</h2>
                            <p>Memberikan Pertimbangan dan Bantuan Hukum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section light" id="alur" style="background-image: url('{{ asset('assets/img/bg7.jpg') }}')">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-theme alur-slider">
                        <div class="item">
                            <h2>Proses Penyelesaian Perkara Perdata</h2>
                            <img src="./assets/img/flow-perdata.png" alt="Alur Perdata">
                        </div>
                        <div class="item">
                            <h2>Proses Penyelesaian Perkara di PTUN</h2>
                            <img src="./assets/img/flow-ptun.png" alt="Alur PTUN">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section dark" id="kontak" style="background-image: url('{{ asset('assets/img/bg8.jpg') }}')">
            <div class="container">
                <i class="fa fa-envelope-o fa-4x mb-2"></i>
                <h2>Hubungi Kami</h2>
                <p>Anda dapat menghubungi kami pada alamat berikut:</p>
                <p><strong>Kementerian Pertanian, RI</strong>, Gedung E<br> Jl. Harsono RM No.3 Ragunan - Pasar Minggu<br> Jakarta 12550</p>
                <p class="mt-4">
                   <a target="_blank" href="https://www.facebook.com/kementanRI/"><i class="fa fa-2x fa-facebook-official mr-3" aria-hidden="true"></i></a>&nbsp; &nbsp;
                   <a target="_blank" href="https://twitter.com/@kementan"><i class="fa fa-2x fa-twitter mr-3" aria-hidden="true"></i></a>&nbsp; &nbsp;
                   <a target="_blank" href="https://www.instagram.com/kementerianpertanian/"><i class="fa fa-2x fa-instagram mr-3" aria-hidden="true"></i></a>&nbsp; &nbsp;
                   <a target="_blank" href="https://www.youtube.com/channel/UC757MLmzhe5QXlr9yWyHcpQ"><i class="fa fa-2x fa-youtube-play" aria-hidden="true"></i></a>
                </p>
                <p class="small mt-4">&copy;<script>document.write(new Date().getFullYear())</script> - HAK CIPTA KEMENTERIAN PERTANIAN, RI</p>
            </div>
        </section>
    </div>

    <!-- menu filters -->
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display:none;">
			<defs>
			  <filter id="shadowed-goo">
				  <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
				  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 12 -7" result="goo" />
				  <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
				  <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 2 -0.3" result="shadow" />
				  <feOffset in="shadow" dx="0" dy="0" result="shadow" />
				  <feComposite in2="shadow" in="goo" result="goo" />
				  <feComposite in2="goo" in="SourceGraphic" result="mix" />
			  </filter>
			  <filter id="goo">
				  <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
				  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
				  <feComposite in2="goo" in="SourceGraphic" result="mix" />
			  </filter>
			</defs>
		</svg>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    {!! Html::script('assets/plugins/owlCarousel/owl.carousel.min.js') !!}
    {!! Html::script('assets/plugins/fullPage/jquery.fullpage.min.js') !!}

    <script>
        $(document).ready(function() {

            $('#fullpage').fullpage({
                loopBottom: true
            });

            $(".menu-item").click(function() {
                setTimeout(function() {
                    $("#menu-open").trigger("click");
                }, 500);
            });

            $(".arrow-down i").click(function() {
                $.fn.fullpage.moveSectionDown();
            });

            $('[href="#beranda"]').click(function(e) {
                e.preventDefault();
                $.fn.fullpage.moveTo(1);
            });

            $('[href="#tentang"]').click(function(e) {
                e.preventDefault();
                $.fn.fullpage.moveTo(2);
            });

            $('[href="#produk"]').click(function(e) {
                e.preventDefault();
                $.fn.fullpage.moveTo(3);
            });

            $('[href="#bantuan"]').click(function(e) {
                e.preventDefault();
                $.fn.fullpage.moveTo(4);
            });

            $('[href="#visi-misi"]').click(function(e) {
                e.preventDefault();
                $.fn.fullpage.moveTo(5);
            });

            $('[href="#alur"]').click(function(e) {
                e.preventDefault();
                $.fn.fullpage.moveTo(6);
            });

            $('[href="#kontak"]').click(function(e) {
                e.preventDefault();
                $.fn.fullpage.moveTo(7);
            });

            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoWidth: false,
                items: 1,
                autoplay: true,
                autoplayHoverPause: true,
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
            });

        });
    </script>

</body>
</html>
