<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rincian | SIBANKUM (Sistem Informasi Bantuan Hukum)</title>
    <meta name="description" content="SIBANKUM | Sistem Informasi Bantuan Hukum">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
      <a href="index#beranda" class="menu-item tooltips"><span>Beranda</span> <i class="fa fa-home"></i> </a>
      <a href="index#tentang" class="menu-item tooltips"><span>Tentang</span> <i class="fa fa-bank"></i> </a>
      <a href="index#produk" class="menu-item tooltips"><span>Produk Hukum Pertanian</span> <i class="fa fa-gavel"></i> </a>
      <a href="index#bantuan" class="menu-item tooltips"><span>Layanan Bantuan Hukum</span> <i class="fa fa-handshake-o"></i> </a>
      <a href="index#visi-misi" class="menu-item tooltips"><span>Visi Misi</span> <i class="fa fa-balance-scale"></i> </a>
      <a href="index#alur" class="menu-item tooltips"><span>Alur Penyelesaian Perkara</span> <i class="fa fa-retweet"></i> </a>
      <a href="index#kontak" class="menu-item tooltips"><span>Kontak</span> <i class="fa fa-envelope-o"></i> </a>
  </nav>

    <div id="page">
        <section class="section-page header dark" style="background-image: url('/assets/img/bg4.jpg')">
            <div class="container">
                <img class="logo" src="/assets/img/logo.png" alt="Logo">
                <h1>Sistem Informasi Bantuan Hukum</h1>
                <h4>Rincian Dokumen</h4>
            </div>
        </section>
        <section class="section-page details light">
            <div class="container">

                <p>Nomor: {{ $case->number }}</p>
                <hr>

                <p>Jenis Pengadilan</p>
                <h5>{{ $case->court_name }}</h5>
                <hr>

                <?php
                    if($case->court_type_id === 1) {
                      $content = '<p>Pokok Perkara</p><h5>'.$case->principal.'</h5>';
                    }
                    elseif($case->court_type_id === 2) {
                      $content = '<p>Objek Perkara</p><h5>'.$case->object.'</h5>';
                    }
                    if($case->court_type_id === 3) {
                      $content = '<p>Pokok Permohonan</p><h5>'.$case->proposal.'</h5>';
                    }
                    if($case->court_type_id === 4) {
                      $content = '<p>Pokok Permohonan</p><h5>'.$case->proposal.'</h5>';
                    }
                ?>
                <?php echo  $content; ?>
                <hr>

                <p>Nomor Perkara</p>
                <h5>{{ $case->case_number }}</h5>
                <hr>
                <?php
                  if (isset($party_side1->court_party_name)) {
                    $party_side1_name = $party_side1->court_party_name; 
                  } else {
                    $party_side1_name = '';
                  }
                ?>
                <p>{{ $party_side1_name }}</p>
                <ul>
                  @forelse ($party_side1 as $party_side1)
                  <li><strong>{{ $party_side1->case_party_name }}</strong> - {{ $party_side1->description }}</li>
                  @empty
                  @endforelse
                </ul>
                <hr>
                <?php
                  if (isset($party_side2->court_party_name)) {
                    $party_side2_name = $party_side2->court_party_name; 
                  } else {
                    $party_side2_name = '';
                  }
                ?>
                <p>{{ $party_side2_name }}</p>
                <ul>
                  @forelse ($party_side2 as $party_side2)
                  <li><strong>{{ $party_side2->case_party_name }}</strong> - {{ $party_side2->description }}</li>
                  @empty
                  @endforelse
                </ul>
                <hr>

                <p>Agenda</p>
                <table class="table table-striped table-bordered">
                  @forelse ($trial_schedule as $trial_schedule)
                  <?php
                  // date formatting
                  // remove zero time
                  $timestampStart = strtotime($trial_schedule->date_start);
                   if (date("H:i:s", $timestampStart) != "00:00:00") {
                      $dmyStart = date("d-m-Y H:i:s", $timestampStart);
                   } else {
                      $dmyStart = date("d-m-Y", $timestampStart);
                   }
                  //Convert it to DD-MM-YYYY
                  //$dmyStart = date("d-m-Y H:i:s", $timestampStart);
                  if($trial_schedule->date_start < $trial_schedule->date_end){
                    $timestampEnd = strtotime($trial_schedule->date_end);
                   if (date("H:i:s", $timestampEnd) != "00:00:00") {
                      $dmyEnd = ' s/d '.date("d-m-Y H:i:s", $timestampEnd);
                   } else {
                      $dmyEnd = ' s/d '.date("d-m-Y", $timestampEnd);
                   }
                  } else {
                    $dmyEnd = '';
                  }
                  ?>
                  <tr>
                    <td>{{ $dmyStart }}{{ $dmyEnd }}</td>
                    <td>{{ $trial_schedule->agenda }}</td>
                  </tr>
                  @empty
                  @endforelse
                </table>

                <a download href="{{ $case->address }}" target="_blank" class="btn btn-primary mt-2">Unduh File</a>

            </div>
        </section>
        <footer>
          <p class="small mt-4">&copy;<script>document.write(new Date().getFullYear())</script> - HAK CIPTA KEMENTERIAN PERTANIAN, RI</p>
        </footer>
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

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

</body>
</html>
