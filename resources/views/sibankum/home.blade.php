<!DOCTYPE html>
<html class="no-js">
  
<!-- Mirrored from demo.themeroyal.info/madrin/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Aug 2015 08:44:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><title>SIBANKUM | Sistem Informasi Bantuan Hukum</title>
    <link rel="shortcut icon" href="{{ asset('sbk/favicon.png') }}">
    <meta name="description" content="Madrin Law">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('sbk/assets/styles/main.css') !!}
    {!! Html::script('sbk/vendors/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') !!}<!-- Modernizr -->    
    <script type="text/javascript">
      function required()
      {
        var empt = document.forms["search"]["keyword"].value;
        if (empt == null || empt == "")
        {
          alert("Kata Kunci Tidah Boleh Kosong");
          return false;
        }
      }
                  
    </script>
  </head>
  <body><!--[if lt IE 8]>
    <p class="browsehappy">
      You are using an <strong>outdated</strong> browser.
      Please <a href="http://browsehappy.com/">upgrade your browser</a>
      to improve your experience.
    </p><![endif]-->
    <div id="ryl-main-hamburger" class="ryl-hamburger"><i class="icon-menu"></i></div>
    <div id="ryl-nav-right" class="ryl-nav-right">
      <div class="ryl-nav-right-content-wrapper">
        <div class="ryl-close-nav-right"><i class="icon-wrong6"></i></div>
        <header><a href="/index">
            <div class="ryl-madrin-logo-1"></div>
            <h4>SIBANKUM</h4></a></header>
        <ul class="ryl-nav-right-content">
          <li><a href="/index#home">BERANDA</a></li>
          <li><a href="/index#about">TENTANG</a></li>
          <li><a href="/index#produk-hukum">PRODUK HUKUM PERTANIAN</a></li>
          <li><a href="/index#layanan-bantuan-hukum">LAYANAN BANTUAN HUKUM</a></li>
          <li><a href="/index#visi-misi">VISI MISI</a></li>
          <li><a href="/index#alur">ALUR PENYELESAIAN PERKARA</a></li>
          <!--<li><a href="/index#process">PROCESS</a></li>
          <li><a href="/index<#news">BERITA</a></li>-->
          <li><a href="/index#contact">KONTAK</a></li>
          <li><a href="/login">LOGIN</a></li>
        </ul>
        <footer>
          <!--<ul class="ryl-list-inline-block">
            <li><a href="#"><i class="ryl-icon-circle-border-2 icon-email29"></i></a></li>
            <li><a href="#"><i class="ryl-icon-circle-border-2 icon-facebook"></i></a></li>
            <li><a href="#"><i class="ryl-icon-circle-border-2 icon-twitter"></i></a></li>
            <li><a data-target="#ryl-modal-search" data-toggle="modal"><i class="ryl-icon-circle-border-2 icon-search"></i></a></li>
          </ul>-->
        </footer>
      </div>
    </div>
    <div id="ryl-modal-search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
      <div class="ryl-modal-dialog ryl-modal-search">
        <div data-dismiss="modal" class="ryl-dismiss-modal"><i class="icon-wrong6"></i></div>
        <div class="ryl-search-wrapper">
          <input type="search" placeholder="Search..."/>
          <button><i class="icon-search"></i></button>
        </div>
      </div>
    </div>
    <div id="ryl-modal-blog-article" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
      <div class="ryl-modal-dialog ryl-modal-blog-article">
        <div data-dismiss="modal" class="ryl-dismiss-modal"><i class="icon-wrong6"></i></div>
        <div class="container ryl-col-nopadding">
          <article class="ryl-bg-light">
            <div class="ryl-blog-article-time">
              <div class="ryl-day">6</div>
              <div class="ryl-month">DEC</div>
            </div><img src="{{ asset('sbk/assets/images/case-study-bg1.jpg') }}" alt="blog image" class="img-responsive"/>
            <h3>Blog title</h3>
            <div class="ryl-blog-article-detail"><span class="ryl-margin-right-30">Posted: <span class="ryl-color-main">December 6, 2014</span></span><span class="ryl-margin-right-30">By: <span class="ryl-color-main">Admin</span></span><span class="ryl-margin-right-30">Category: <span class="ryl-color-main">HTML/CSS</span></span><span>Comment: <span class="ryl-color-main">20</span></span></div>
            <p>In the past few weeks, we’ve released our 20th theme Hoarder, reached $1 million in sales and 27,000 units sold over at ThemeForest, and notched our free plugin count up to 4. Not to mention all the awesome works in progress. Phew! It’s a busy and exciting time for both our team and our customers.</p>
            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
            <p class="ryl-fs-5">Veritatis et quasi architecto.</p>
            <p>In the past few weeks, we’ve released our 20th theme Hoarder, reached $1 million in sales and 27,000 units sold over at ThemeForest, and notched our free plugin count up to 4. Not to mention all the awesome works in progress. Phew! It’s a busy and exciting time for both our team and our customers.</p>
            <p class="ryl-fs-5">Perspiciatis unde omnis iste natus error sit.</p>
            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur</p>
            <div class="ryl-blog-article-tag"><a href="#">html5</a><a href="#">css3</a><a href="#">javascript</a><a href="#">fireworks</a></div>
            <div class="ryl-blog-article-share"><span>Share this post</span>
              <ul class="ryl-list-inline-block">
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-gplus"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="ryl-blog-article-comment">
              <h4>Leave A Comment</h4>
              <form class="ryl-form-input-style-2">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <input type="text" placeholder="Name:"/>
                    <input type="email" placeholder="Email:"/>
                    <input type="text" placeholder="Subject:"/>
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <textarea placeholder="Message:"></textarea>
                  </div>
                  <div class="col-xs-12 ryl-submit">
                    <button class="ryl-btn-2">SUBMIT NOW</button>
                  </div>
                </div>
              </form>
            </div>
          </article>
        </div>
      </div>
    </div>
    <div id="ryl-modal-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
      <div class="ryl-modal-dialog ryl-modal-video">
        <div data-dismiss="modal" class="ryl-dismiss-modal"><i class="icon-wrong6"></i></div>
        <div class="ryl-cell-vertical-wrapper">
          <div class="ryl-cell-middle">
            <div class="container">
              <div class="ryl-video-wrapper">
                <script src="{{ asset('sbk/assets/scripts/froogaloop2.min.js') }}">
                </script>
                <iframe id="rylVimeo" src="http://player.vimeo.com/video/46115836?api=1&amp;player_id=rylVimeo;title=0&amp;amp;byline=0&amp;amp;portrait=5&amp;amp;color=ffdd3a" frameborder="0" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" allowfullscreen="allowfullscreen"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="ryl-main">
      <header id="home" class="ryl-bg-dots ryl-color-light">
        <div data-stellar-background-ratio="0.25" class="ryl-overlay-bg ryl-home-parallax-background-style-2 ryl-parallax-bg"></div>
        <header id="ryl-home-header" class="clearfix ryl-home-header-style-2">
          <div class="container-fluid">
            <div class="row"></div>
            <div class="col-md-4"><a href="/index" class="ryl-madrin-brand">
                <div class="ryl-madrin-logo-2"></div>
                <h4 class="ryl-light-heading"><center>SIBANKUM</center></h4></a></div>
            <div class="ryl-home-header-right-side col-md-8 visible-md visible-lg">
              <ul class="ryl-list-inline-block">
                <lis><a href="/index#about" class="ryl-btn-trans-1"><i class="ryl-icon-inline-text icon-right106"></i>Tentang</a></lis>
                <!--<li><a href="#"><i class="ryl-icon-circle-border-2 icon-email29"></i></a></li>
                <li><a href="#"><i class="ryl-icon-circle-border-2 icon-facebook"></i></a></li>-->
                <li><a href="#"><i class="ryl-icon-circle-border-2 icon-menu ryl-hamburger"></i></a></li>
                <!--<li><a data-target="#ryl-modal-search" data-toggle="modal"><i class="ryl-icon-circle-border-2 icon-search"></i></a></li>-->
              </ul>
            </div>
          </div>
        </header>
        <div id="ryl-home-content" class="container-fluid ryl-cell-vertical-wrapper ryl-home-content-style-2">
          <div class="ryl-cell-middle text-center"><b class="ryl-fs-1">SISTEM INFORMASI BANTUAN HUKUM</b>
            <!--<hr class="ryl-margin-bottom-35">-->
            <p class="ryl-fs-4 ryl-fw-medium">Mesin Pencari Dokumen Bantuan Hukum</p>
            <form class="ryl-form-input-style-1" action="/result" method="post" name="search" onsubmit="return required()">
              {!! csrf_field() !!}
                  <div class="row">
                    <div class="col-xs-12 text-center">
                      <input type="text" name="keyword" placeholder="Kata Kunci*"/>
                    </div>
                    <div class="col-xs-12 text-center ryl-submit">
                      <button class="ryl-btn-2">SEARCH</button>
                    </div>
                  </div>
                </form>
            
            <a href="#about" class="ryl-next-section"><i class="icon-thin36"></i></a>
          </div>
        </div>
      </header>
      <section id="about" class="ryl-bg-light">
        <header class="ryl-section-header-style-2 ryl-bg-gray">
          <div class="container ryl-padding-top-20 ryl-padding-bottom-20">
            <div class="ryl-madrin-logo-dark-3 ryl-center-block ryl-margin-bottom-35"></div>
            <!--<h4 class="ryl-margin-bottom-30">NARASI</h4>-->
            <p class="ryl-margin-bottom-30">Advokasi hukum lingkup Kementerian Pertanian yang dilaksanakan dalam rangka mengantisipasi akibat hukum yang ditimbulkan dalam suatu pelaksanaan kegiatan baik litigasi dan non litigasi dengan pembatasan tertentu. Diperlukan penanganan berupa bantuan hukum secara terkoordinasi dengan obyek penyelesaian meliputi: pengamanan kebijakan berupa beschiking dan regeling, permasalahan aset negara berupa tanah/bangunan, perjanjian/wanprestasi, permasalahan tender/lelang, perizinan, kepegawaian, aspek perdata dan tata usaha negara, judicial review di mahkamah agung, dan constitutional review di mahkamah konstitusi, serta menghadapi gugatan masyarakat, lembaga swadaya masyarakat dan pihak swasta terhadap Menteri Pertanian, Direktur Jenderal/Kepala Badan lingkup eselon I Kementerian Pertanian.<br /><br />
Dasar Hukum: Pasal 65 Ayat (2) Permentan Nomor 43/2015 tentang Organisasi dan Tata Kerja Kementerian Pertanian.
.</p>
            <hr/>
          </div>
        </header>
      </section>
      <section id="produk-hukum">
        <div data-stellar-background-ratio="0.25" class="ryl-overlay-bg ryl-case-study-parallax-background-style-1 ryl-parallax-bg"></div>
        <header class="ryl-section-header-style-2  ryl-bg-gray">
          <div class="container">
            <h3>Produk Hukum Pertanian</h3>
            <p>Produk hukum pertanian terbagi menjadi dua, Undang-Undang dan Peraturan pemerintah.</p>
            <hr/>
          </div>
        </header>
        <div class="ryl-margin-top-90 clearfix"></div>
        <div class="ryl-margin-top-90 clearfix hidden-sm"></div>
        <div class="ryl-margin-top-90 clearfix hidden-sm hidden xs"></div>
        <div class="ryl-margin-top-90 clearfix visible-lg"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-xs-12 ryl-section-item">
              <div class="ryl-text-carousel has-nav owl-carousel has-index">
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 12 Tahun 1992 tentang Budidaya Tanaman.</p>
                    <p><a href="/undang-undang/UU-NO-12-Tahun-1992.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 16 Tahun 1992 tentang Karantina Hewan, Ikan da Tumbuhan</p>
                    <p><a href="/undang-undang/UU-NO-16-Tahun-1992.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 29 Tahun 2000 tentang Perlindungan Varietas Tanaman</p>
                    <p><a href="/undang-undang/UU-NO-29-Tahun-2000.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 18 Tahun 2004 tentang Perkebunan</p>
                    <p><a href="/undang-undang/UU-NO-18-Tahun-2004.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 4 Tahun 2006 tentang Pengesahan <em>International Treaty On Plant Genetic Resources For Food and Agriculture</em> (Perjanjian Mengenai Sumber Daya Genetik Tanaman Untuk Pangan dan Pertanian)</p>
                    <p><a href="/undang-undang/UU-NO-4-Tahun-2006.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 16 Tahun 2006 tentang Sistem Penyuluhan Pertanian, Perikanan dan Kehutanan</p>
                    <p><a href="/undang-undang/UU-NO-16-Tahun-2006.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan</p>
                    <p><a href="/undang-undang/UU-NO-18-Tahun-2009.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 41 Tahun 2009 tentang Perlindungan Lahan Pertanian Pangan Berkelanjutan</p>
                    <p><a href="/undang-undang/UU-NO-41-Tahun-2009.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 13 Tahun 2010 tentang Hortikultura</p>
                    <p><a href="/undang-undang/UU-NO-13-Tahun-2010.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 18 Tahun 2012 tentang Pangan</p>
                    <p><a href="/undang-undang/UU-NO-18-Tahun-2012.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p>Undang-Undang Nomor 19 Tahun 2013 tentang Perlindungan dan Pemberdayaan Petani</p>
                    <p><a href="/undang-undang/UU-NO-19-Tahun-2013.pdf" target="_blank"><button class="ryl-btn-2">Unduh</button></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="layanan-bantuan-hukum" class="ryl-bg-light">
        <header class="ryl-section-header-style-2  ryl-bg-gray">
          <div class="container">
            <h3>LAYANAN BANTUAN HUKUM</h3>
            <p>Layanan Bantuan Hukum berupa pemberian pertimbangan hukum (litigasi/non litigasi),  legal opinion, dan kajian hukum yang dikoordinasikan dengan unit eselon I terkait, melakukan mediasi dan pemberian bantuan hukum dalam menghadapi gugatan perdata dan tata usaha negara terhadap Kementerian Pertanian yang dilakukan secara koordinasi, </p>
            <hr/>
          </div>
        </header>
        <!--<div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 ryl-section-item">
              <div class="ryl-service-item">
                <div class="ryl-service-icon"><i class="ryl-icon-super-square-1 icon-law"></i></div>
                <h6 class="ryl-bold-heading">FREE CONSULTING</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, which don’t look even slightly believable and more.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 ryl-section-item">
              <div class="ryl-service-item">
                <div class="ryl-service-icon"><i class="ryl-icon-super-square-1 icon-2442"></i></div>
                <h6 class="ryl-bold-heading">SPECIAL SERVICES</h6>
                <p>Curabitur vulputate, ligula lacinia scelrisque tempor, lacus lacus ornare ante, ac egeistas est urna sit amet arcu. Class aptent taeraciti sociosqu ad litora torquent.</p>
              </div>
            </div>
            <div class="col-xs-12 clearfix hidden-lg hidden-md"></div>
            <div class="col-md-3 col-sm-6 col-xs-12 ryl-section-item">
              <div class="ryl-service-item">
                <div class="ryl-service-icon"><i class="ryl-icon-super-square-1 icon-meeting1"></i></div>
                <h6 class="ryl-bold-heading">DISCUSS STRATEGY BUILDS</h6>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 ryl-section-item">
              <div class="ryl-service-item">
                <div class="ryl-service-icon"><i class="ryl-icon-super-square-1 icon-businessman170"></i></div>
                <h6 class="ryl-bold-heading">MEDIATION</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, which don’t look even slightly believable and more.</p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-3 col-sm-6 col-xs-12 ryl-section-item">
              <div class="ryl-service-item">
                <div class="ryl-service-icon"><i class="ryl-icon-super-square-1 icon-shopping159"></i></div>
                <h6 class="ryl-bold-heading">CILVIL LAW</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, which don’t look even slightly believable and more.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 ryl-section-item">
              <div class="ryl-service-item">
                <div class="ryl-service-icon"><i class="ryl-icon-super-square-1 icon-shopping159"></i></div>
                <h6 class="ryl-bold-heading">FAMILY DISPUTES</h6>
                <p>Curabitur vulputate, ligula lacinia scelrisque tempor, lacus lacus ornare ante, ac egeistas est urna sit amet arcu. Class aptent taeraciti sociosqu ad litora torquent.</p>
              </div>
            </div>
            <div class="col-xs-12 clearfix hidden-lg hidden-md"></div>
            <div class="col-md-3 col-sm-6 col-xs-12 ryl-section-item">
              <div class="ryl-service-item">
                <div class="ryl-service-icon"><i class="ryl-icon-super-square-1 icon-talk2"></i></div>
                <h6 class="ryl-bold-heading">CRIMINAL CHARGES</h6>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.</p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 ryl-section-item">
              <div class="ryl-service-item">
                <div class="ryl-service-icon"><i class="ryl-icon-super-square-1 icon-two220"></i></div>
                <h6 class="ryl-bold-heading">BANKRUPTCY</h6>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, which don’t look even slightly believable and more.</p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>-->
      </section>
      <section id="visi-misi">
        <div data-stellar-background-ratio="0.25" class="ryl-overlay-bg ryl-testimonial-parallax-background-style-3 ryl-parallax-bg"></div>
        <header class="ryl-section-header-style-2  ryl-bg-trans ryl-section-header-left ryl-margin-top-50 ryl-margin-bottom-50">
          <div class="container">
            <h3 style="color:black">VISI dan MISI</h3>
            <!--<p style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
            <hr/>
          </div>
        </header>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-xs-12 ryl-section-item">
              <div class="ryl-text-carousel has-nav owl-carousel has-index">
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p><strong>Visi:</strong><br />
                    Terwujud dan berfungsinya sistem hukum pertanian dan tersedianya informasi publik yang lengkap dalam mendukung pembangunan pertanian.
                    </p>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content">
                    <p><strong>Misi:</strong> <br />
                    Memberikan Pertimbangan dan Bantuan Hukum.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ryl-margin-top-90 clearfix visible-lg"></div>
      </section>
      <section id="alur" class="ryl-bg-light">
        <header class="ryl-section-header-style-2  ryl-bg-gray">
          <div class="container">
            <h3>ALUR PENYELESAIAN PERKARA</h3>
            <p>Berikut alur penyelesaian perkara</p>
            <hr/>
          </div>
        </header>
        <div class="container ryl-section-item">
          <div class="ryl-process-wrapper">
            <div id="ryl-process-list" class="ryl-process-style-2">

                  <center>
                    <h5 class="ryl-bold-heading">PROSES PENYELESAIAN PERKARA PERDATA</h5>
                    <p><img src="sbk/assets/images/flow-perdata.png" /></p>
                    <h5 class="ryl-bold-heading">PROSES PENYELESAIAN PERKARA DI PTUN</h5>
                    <p><img src="sbk/assets/images/flow-ptun.png" /></p>
                </center>
              <!--<div class="ryl-process-item">
                <div class="ryl-icon"><i class="ryl-icon-super-square-1 icon-businessman170"></i></div>
                <div class="ryl-line"></div>
                <div class="ryl-content">
                  <h5 class="ryl-bold-heading">PROSES PENYELESAIAN PERKARA PERDATA</h5>
                  <p><img src="sbk/assets/images/flow-perdata.png" /></p>
                </div>
              </div>
              <div class="ryl-process-item">
                <div class="ryl-icon"><i class="ryl-icon-super-square-1 icon-shopping159"></i></div>
                <div class="ryl-line"></div>
                <div class="ryl-content">
                  <h5 class="ryl-bold-heading">RESEARCH</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
              </div>
              <div class="ryl-process-item">
                <div class="ryl-icon"><i class="ryl-icon-super-square-1 icon-talk2"></i></div>
                <div class="ryl-line"></div>
                <div class="ryl-content">
                  <h5 class="ryl-bold-heading">DISCUSSION</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
              </div>
              <div class="ryl-process-item">
                <div class="ryl-icon"><i class="ryl-icon-super-square-1 icon-meeting1"></i></div>
                <div class="ryl-line"></div>
                <div class="ryl-content">
                  <h5 class="ryl-bold-heading">MEDIATION</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
              </div>-->
            </div>
          </div>
        </div>
        <div class="container ryl-section-item text-center"><a href="#contact" class="ryl-btn-2">HUBUNGI KAMI</a></div>
      </section>
      <section id="twitter" class="ryl-bg-dots ryl-color-light">
        <div class="ryl-margin-top-90"></div>
        <div data-stellar-background-ratio="0.25" class="ryl-overlay-bg ryl-twitter-parallax-background-style-2 ryl-parallax-bg"></div>
        <div class="ryl-section-item">
          <div class="ryl-fullwidth-carousel ryl-twitter-rss-carousel has-nav">
            <div class="ryl-twitter-rss-item">
              <div class="ryl-logo"><i class="icon-twitter"></i></div>
              <div class="ryl-content">
                <p>Kementerian Pertanian selalu menjunjung tinggi hukum dan undang undang.</p>
              </div>
              <div class="ryl-info">
                <div class="ryl-time">About 6 hours ago</div><a href="#">@kementan</a>
              </div>
            </div>
            <div class="ryl-twitter-rss-item">
              <div class="ryl-logo"><i class="icon-twitter"></i></div>
              <div class="ryl-content">
                <p>Memberikan pertimbangan dan bantuan hukum merupakan bagian dari visi dan misi kami.</p>
              </div>
              <div class="ryl-info">
                <div class="ryl-time">About 7 hours ago</div><a href="#">@kementan</a>
              </div>
            </div>
            <div class="ryl-twitter-rss-item">
              <div class="ryl-logo"><i class="icon-twitter"></i></div>
              <div class="ryl-content">
                <p>Advokasi hukum lingkup Kementerian Pertanian yang dilaksanakan dalam rangka mengantisipasi akibat hukum yang ditimbulkan dalam suatu pelaksanaan kegiatan baik litigasi dan non litigasi dengan pembatasan tertentu.</p>
              </div>
              <div class="ryl-info">
                <div class="ryl-time">About 8 hours ago</div><a href="#">@kementan</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--<section id="pricing-table" class="ryl-bg-light">
        <header class="ryl-section-header-style-2  ryl-bg-gray">
          <div class="container">
            <h3>PRICING TABLE</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. </p>
            <hr/>
          </div>
        </header>
        <div class="container ryl-section-item">
          <div class="ryl-pricing-table-wrapper">
            <div class="ryl-pricing-table">
              <div class="ryl-pricing-table-item">
                <div class="ryl-title">BASIC</div>
                <div class="ryl-price">$29</div>
                <ul>
                  <li class="ryl-option">Web Design</li>
                  <li class="ryl-option">Web Development</li>
                  <li class="ryl-option">Photo Graphy</li>
                  <li class="ryl-option">Email Marketing</li>
                  <li class="ryl-option">Ultimate Support</li>
                  <li class="ryl-option">One Domain Support</li>
                </ul>
                <button href="#" class="ryl-btn-2 ryl-purchase">PURCHASE</button>
              </div>
              <div class="ryl-pricing-table-item ryl-active">
                <div class="ryl-title">STANDARD</div>
                <div class="ryl-price">$39</div>
                <ul>
                  <li class="ryl-option">Web Design</li>
                  <li class="ryl-option">Web Development</li>
                  <li class="ryl-option">Photo Graphy</li>
                  <li class="ryl-option">Email Marketing</li>
                  <li class="ryl-option">Ultimate Support</li>
                  <li class="ryl-option">One Domain Support</li>
                </ul>
                <button href="#" class="ryl-btn-2 ryl-purchase">PURCHASE</button>
              </div>
              <div class="ryl-pricing-table-item">
                <div class="ryl-title">PROFESSIONAL</div>
                <div class="ryl-price">$49</div>
                <ul>
                  <li class="ryl-option">Web Design</li>
                  <li class="ryl-option">Web Development</li>
                  <li class="ryl-option">Photo Graphy</li>
                  <li class="ryl-option">Email Marketing</li>
                  <li class="ryl-option">Ultimate Support</li>
                  <li class="ryl-option">One Domain Support</li>
                </ul>
                <button href="#" class="ryl-btn-2 ryl-purchase">PURCHASE</button>
              </div>
              <div class="ryl-pricing-table-item">
                <div class="ryl-title">ULTIMATE</div>
                <div class="ryl-price">$59</div>
                <ul>
                  <li class="ryl-option">Web Design</li>
                  <li class="ryl-option">Web Development</li>
                  <li class="ryl-option">Photo Graphy</li>
                  <li class="ryl-option">Email Marketing</li>
                  <li class="ryl-option">Ultimate Support</li>
                  <li class="ryl-option">One Domain Support</li>
                </ul>
                <button href="#" class="ryl-btn-2 ryl-purchase">PURCHASE</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="news" class="ryl-bg-dots">
        <div data-stellar-background-ratio="0.25" class="ryl-overlay-bg ryl-news-parallax-background-style-2 ryl-parallax-bg"></div>
        <header class="ryl-section-header-style-2  ryl-bg-gray">
          <div class="container">
            <h3>NEWS</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. </p>
            <hr/>
          </div>
        </header>
        <div class="ryl-margin-bottom-40 clearfix visible-lg"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-4 ryl-section-item">
              <div class="ryl-news-style-2-carousel ryl-text-carousel has-nav owl-carousel">
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content ryl-news-style-2-content">
                    <div class="ryl-news-time">
                      <div class="ryl-day">05</div>
                      <div class="ryl-month">DEC</div>
                    </div>
                    <p>Global</p>
                    <h4>Europese economie klimt langzaam uit dal</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p><a data-target="#ryl-modal-blog-article" data-toggle="modal" class="ryl-readmore">Readmore</a>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content ryl-news-style-2-content">
                    <div class="ryl-news-time">
                      <div class="ryl-day">08</div>
                      <div class="ryl-month">DEC</div>
                    </div>
                    <p>Global</p>
                    <h4>Lorem ipsum dolor sit amet, consectetur.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p><a data-target="#ryl-modal-blog-article" data-toggle="modal" class="ryl-readmore">Readmore</a>
                  </div>
                </div>
                <div class="ryl-text-carousel-item">
                  <div class="ryl-text-carousel-content ryl-news-style-2-content">
                    <div class="ryl-news-time">
                      <div class="ryl-day">09</div>
                      <div class="ryl-month">DEC</div>
                    </div>
                    <p>Global</p>
                    <h4>Lorem ipsum dolor sit amet, consectetur.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p><a data-target="#ryl-modal-blog-article" data-toggle="modal" class="ryl-readmore">Readmore</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->
      <section id="contact" class="ryl-bg-trans-dark-1">
        <div data-stellar-background-ratio="0.25" class="ryl-overlay-bg ryl-contact-parallax-background-style-1 ryl-parallax-bg"></div>
        <header class="ryl-section-header-style-2  ryl-bg-gray">
          <div class="container">
            <h3>HUBUNGI KAMI</h3>
            <p>Anda dapat menghubungi kami pada alamat berikut. </p>
            <hr/>
          </div>
        </header>
        <div class="clearfix ryl-color-light ryl-relative">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 ryl-section-item">
                <div class="ryl-contact-info"><span class="ryl-info-item"><i class="ryl-icon-inline-text icon-location"></i>Jl. Harsono RM No.3 Ragunan - Pasar Minggu
Jakarta 12550</span><span class="ryl-info-item"><i class="ryl-icon-inline-text icon-phone"></i>+62 21 780 4117</span><span class="ryl-info-item"><i class="ryl-icon-inline-text icon-email29"></i>humas@pertanian.go.id</span><span class="ryl-info-item"><i class="ryl-icon-inline-text icon-domain1"></i>sibankum.pertanian.go.id</span></div>
              </div>
              <!--<div class="col-xs-12 ryl-section-item">
                <form class="ryl-form-input-style-1">
                  <div class="row">
                    <div class="col-md-5 col-xs-12">
                      <input type="text" placeholder="Name*"/>
                      <input type="email" placeholder="Email*"/>
                      <input type="text" placeholder="Subject*"/>
                    </div>
                    <div class="col-md-7 col-xs-12">
                      <textarea placeholder="Message..."></textarea>
                    </div>
                    <div class="col-xs-12 text-center ryl-submit">
                      <button class="ryl-btn-2">SUBMIT NOW</button>
                    </div>
                  </div>
                </form>
              </div>-->
            </div>
          </div>
        </div>
      </section>
      <footer class="ryl-footer-style-2">
        <div class="container">
          <ul class="ryl-list-inline-block ryl-footer-social">
            <li><a href="#"><i class="ryl-icon-circle-border-3 icon-email29"></i></a></li>
            <li><a href="#"><i class="ryl-icon-circle-border-3 icon-linkedin"></i></a></li>
            <li><a href="#"><i class="ryl-icon-circle-border-3 icon-facebook"></i></a></li>
            <li><a href="#"><i class="ryl-icon-circle-border-3 icon-twitter"></i></a></li>
            <li><a href="#"><i class="ryl-icon-circle-border-3 icon-dribbble"></i></a></li>
          </ul>
          <div class="ryl-footer-content">© 2017 - HAK CIPTA <a href="/index">KEMENTERIAN PERTANIAN REPUBLIK INDONESIA</a></div>
        </div>
      </footer>
    </div>
    {!! Html::script('sbk/vendors/jquery/jquery-2.1.4.min.js') !!}
    {!! Html::script('sbk/vendors/html5shiv/html5shiv.min.js') !!}
    {!! Html::script('sbk/vendors/jquery-easing/jquery.easing-1.3.min.js') !!}
    {!! Html::script('sbk/vendors/owl.carousel2/owl.carousel.min.js') !!}
    {!! Html::script('sbk/vendors/easy.piechart/jquery.easypiechart.min.js') !!}
    {!! Html::script('sbk/vendors/stellar/jquery.stellar.min.js') !!}
    {!! Html::script('sbk/vendors/jquery.placeholder/jquery.placeholder.js') !!}
    {!! Html::script('sbk/vendors/countdown/jquery.plugin.min.js') !!}
    {!! Html::script('sbk/vendors/countdown/jquery.countdown.min.js') !!}
    {!! Html::script('sbk/vendors/skrollr/skrollr.min.js') !!}
    {!! Html::script('sbk/vendors/bootstrap-3.3/js/bootstrap.min.js') !!}
    {!! Html::script('sbk/assets/scripts/main.js') !!}
</body>
</html>