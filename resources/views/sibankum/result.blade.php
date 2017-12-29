<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><title>SIBANKUM | Sistem Informasi Bantuan Hukum</title>
    <link rel="shortcut icon" href="{{ asset('sbk/favicon.png') }}">
    <meta name="description" content="Madrin Law">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('sbk/assets/styles/main.css') !!}
    {!! Html::script('sbk/vendors/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') !!}<!-- 
  <!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
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
          <!--<li><a href="/index#case-study">STUDI KASUS</a></li>
          <li><a href="/index#service">LAYANAN</a></li>
          <li><a href="/index#testimonial">TESTIMONIAL</a></li>-->
          <li><a href="/index#pricing-table">TERBARU</a></li>
          <!--<li><a href="/index#process">PROCESS</a></li>
          <li><a href="/index<#news">BERITA</a></li>-->
          <li><a href="/index#contact">KONTAK</a></li>
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

      </header>
      <section id="about" class="ryl-bg-light">
        <header class="ryl-section-header-style-2 ryl-bg-gray">
          <div class="container ryl-padding-top-20 ryl-padding-bottom-20">
            <h4 class="ryl-margin-bottom-30">Hasil Pencarian</h4>
            <p class="ryl-margin-bottom-30">
              <table id="table_id" class="display">
                  <thead>
                      <tr>
                          <th>Jenis Perkara</th>
                          <th>Unit Kerja</th>
                          <th>Nomor Perkara</th>
                          <th>Materi</th>
                          <th>Opsi</th>
                      </tr>
                  </thead>
                  <tbody>
                    @forelse ($data as $data)
                      <?php 
                        $materi = '';
                        if($data->id_jenis_perkara == '1') {
                          $materi = $data->principal;
                        }
                        if($data->id_jenis_perkara == '2') {
                          $materi = $data->object;
                        }
                        if($data->id_jenis_perkara == '3') {
                          $materi = $data->proposal;
                        }
                        if($data->id_jenis_perkara == '4') {
                          $materi = $data->proposal;
                        }
                      ?>
                      <tr align="left">
                          <td>{{ $data->court_type }}</td>
                          <td>{{ $data->work_unit }}</td>
                          <td>{{ $data->case_number }}</td>
                          <td><?php echo $materi; ?></td>
                          <td><a href="/detail/{{ $data->uuid }}"><button class="ryl-btn">Detil</button></a></td>
                      </tr>
                    @empty
                    <tr>
                      <td></td>
                          <td>BELUM ADA DATA</td>
                          <td></td>
                          <td></td>
                          <td></td>
                    </tr>
                    @endforelse
                  </tbody>
              </table>
            </p>
            <hr/>
          </div>
        </header>
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
          <div class="ryl-footer-content">© 2017 - ALL RIGHTS RESERVED BY <a href="/index">SIBANKUM</a></div>
        </div>
      </footer>
    </div>


</body>
</html>