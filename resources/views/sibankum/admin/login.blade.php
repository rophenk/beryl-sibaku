<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | SIBANKUM (Sistem Informasi Bantuan Hukum)</title>
    <meta name="description" content="Login SIBANKUM">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    {!! Html::style('assets/sibankum.css') !!}
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}"/>
</head>
<body>
    <div id="login">
        <section class="section dark" style="background-image: url('{{ asset('assets/img/bg4.jpg') }}')">
            <div class="container">
                <img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <h1>Sistem Informasi Bantuan Hukum</h1>
                <h4>Silakan masuk untuk melanjutkan</h4>
                <div class="alert alert-danger" role="alert" style="max-width:380px;margin: 0 auto 20px; display:none">
                  Nama pengguna/kata sandi tidak cocok
                </div>
                <form action="login" method="post">
                    {!! csrf_field() !!}
                    <div class="input-wrapper">
                        <input class="input-search" type="text" name="keyword" placeholder="Nama Pengguna" required>
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="input-wrapper">
                        <input class="input-search" type="password" name="keyword" placeholder="Kata Sandi" required>
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success mt-2"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Masuk</button>
                </form>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</body>
</html>
