<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <title><?=$title?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">            
            <img src="<?php echo base_url(); ?>/assets/img/logo-sevima.png" alt="" width="100" height="24" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" >
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login/logout">Logout</a>
                </li>                
            </ul>
        </div>
    </div>
  </nav>
  <div class="row" style="margin-top:80px;">
    <div class="col-md-10 col-sm-12 col-lg-10">
        <div class="container">            
            <?php //foreach($berita as $row):?>
            <div col-sm-12 col-md-3 col-lg-4>
                <div class="card" style="width: 18rem;">
                    <img src="<?php //echo base_url(); ?>/assets/img/Distro-Linux.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="/berita/detail/<?=$row['id']?>">
                        <h5 class="card-title"><?php //echo $row['title']?>Terlengkap, Rekomendasi Distro Linux 2022 untuk Kamu Coba!</h5>
                        <!-- <p class="card-text">Kejuaraan balap mobil listrik dunia Formula E sukses terselenggara di Jakarta International E-Prix Circuit (JIEC) di kawasan Ancol, Jakarta. Lalu selesai Formula E, sirkuit anyar ini bakal dipakai untuk apa?</p> -->
                        <!-- <a href="#" class="btn btn-warning">Go somewhere</a> -->
                    </a>
                    </div>
                </div>            
            </div>
            <?php //endforeach;?>   
            
            <div class="mt-4 p-5 rounded">
                <h1>Terlengkap, Rekomendasi Distro Linux 2022 untuk Kamu Coba!</h1>
                <p>
                    Linux merupakan salah satu sistem operasi yang cukup umum ditemui dan digunakan oleh banyak orang selain Windows dan Mac OS. Linux merupakan sistem operasi yang andal dan aman karena saat ini ekosistemnya semakin membesar.
                </p>
            </div>
        </div>
        
    </div>
    <div class="col-md-2 col-sm-12 col-lg-2"> 
        link berita
    </div>
 </div>

 <!-- Popper.js first, then Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>