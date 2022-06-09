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
<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url(); ?>/assets/img/logo-sevima.png" alt="" width="100" height="24" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard">Beranda</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berkas">Berkas</a>
                </li> -->
            </ul>
            <div class="d-flex">
                <ul class="right navbar-nav me-auto mb-2 mb-lg-0">   
                <?php if($login == TRUE) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Data Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Data Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berkas">Data Berkas</a>
                </li>                 
                <?php } ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             <span class="glyphicon glyphicon-user"></span> Helo<b> <?=$username?></b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if($login != TRUE) { ?>
                            <li><a class="dropdown-item" href="/register">SignUp</a></li>
                            <li>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Login</a>
                            </li>
                            <?php }?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/login/logout">Logout</a></li>
                        </ul>
                    </li>    
                           
                </ul>
            </div>
        </div>
    </div>
  </nav>