<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hasil Pencarian | SIBANKUM (Sistem Informasi Bantuan Hukum)</title>
    <meta name="description" content="SIBANKUM | Sistem Informasi Bantuan Hukum">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.css"/>
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
        <section class="section-page header dark" style="background-image: url('./assets/img/bg4.jpg')">
            <div class="container">
                <img class="logo" src="./assets/img/logo.png" alt="Logo">
                <h1>Sistem Informasi Bantuan Hukum</h1>
                <h4>Hasil Pencarian</h4>
            </div>
        </section>
        <section class="section-page list light">
            <div class="container">
              <table id="table_id" class="table dataTable table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
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
                      <tr>
                          <td>{{ $data->court_type }}</td>
                          <td>{{ $data->work_unit }}</td>
                          <td>{{ $data->case_number }}</td>
                          <td><?php echo $materi; ?></td>
                          <td><a href="/detail/{{ $data->uuid }}"><button class="btn btn-sm btn-success">Rincian</button></a></td>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
    </script>

</body>
</html>
