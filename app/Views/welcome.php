<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <title><?php echo $title?></title>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                 height: 100%;
            }
        }
    </style>
  </head>
  <body>
  <!-- <nav class="navbar navbar-expand-lg navbar-light sticky-top  bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">            
            <img src="<?php //echo base_url(); ?>/assets/img/logo-sevima.png" alt="" width="100" height="24" class="d-inline-block align-text-top">
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
                <a class="nav-link" href="#">Login</a>
                </li> 
                <li class="nav-item">
                <a class="nav-link" href="/login/logout">Logout</a>
                </li>                
                <?php //echo $username?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>
  </nav> -->

  <!-- <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?php //echo base_url(); ?>/assets/img/logo-sevima.png" alt="" width="100" height="24" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Product</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="right navbar-nav me-auto mb-2 mb-lg-0">                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            welcome
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/register">SignUp</a></li>
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>                    
                </ul>
            </div>
        </div>
    </div>
  </nav> -->

  
  <div class="container">      
      <div class="row mt-4">
        <div class="col-md-10 colmd-10 col-sm-10">            
            <div class="mt-4 p-5 rounded">
                <?php foreach($dtberita as $data){?>
                    <h3><?php echo $data['title'];?></h3>
                    <small><i><?= $data['created_date']; ?></i></small><br> 
                    <img src="<?php echo base_url(); ?>/assets/img/Distro-Linux.png" class="card-img-top" alt="..." style="width:30%">               
                    <p> <?php echo $data['description'];?></p><hr>
                <?php } ?>
                <span class="glyphicon glyphicon-thumbs-up" style="cursor:pointer;"><span class="badge" style="color:black;">10</span></span>
                <button class="btn btn-secondary" type="button" style="margin-left:20px;"> 
                    Komentar <span class="badge">2</span>
                </button>
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button type="submit" class="btn btn-warning btn-sm">Submit</button>
                    </div>
               </form>
               
                <div class="d-flex mt-4" id="list-komentar">                    
                    <!-- <span class="glyphicon glyphicon-user"></span>                     
                    <div>
                        <h5 class="fw-bold"> Rico
                            <small class="text-muted">on February 19, 2021</small>
                        </h5>
                        <p>
                        Mantap infonya
                        </p> 
                        <span class="glyphicon glyphicon-thumbs-up" style="cursor:pointer;"><span class="badge" style="color:black;">5</span></span> 
                        <button class="btn btn-secondary" type="button" style="margin-left:20px;"> 
                            Komentar <span class="badge">1</span>
                        </button>                        
                    </span> <br>
                      
                        <div class="d-flex mt-4">
                        <span class="glyphicon glyphicon-user"></span> 
                            <div>
                                <h5 class="fw-bold">
                                Axsel
                                <small class="text-muted">on February 19, 2021</small>
                                </h5>
                                <p>
                                Ah masa sih 
                                </p>
                                <span class="glyphicon glyphicon-thumbs-up" style="cursor:pointer;"><span class="badge" style="color:black;">0</span></span> 
                                <button class="btn btn-secondary" type="button" style="margin-left:20px;"> Komentar <span class="badge">0</span>
                            </div>
                        </div>
                      
                    </div> -->
                   
                </div>
               
                
            </div>
            
        </div>       

        <div class="col-md-2">
                <?php foreach($dtberita as $data){?>
                    <h5><?php echo $data['title'];?> <small><i><?= $data['created_date']; ?></i></small></h5>
                    
                    <img src="<?php echo base_url(); ?>/assets/img/Distro-Linux.png" class="card-img-top" alt="..." style="width:30%"> 
                                                    
                    <hr>
                <?php } ?>                              
        </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <img src="<?php echo base_url(); ?>/assets/img/logo-sevima.png"
                                        class="img img-responsive" alt="Sevima" style="width:50%">
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid h-custom">
                                    <div class="row d-flex justify-content-center align-items-center h-100">
                                    <!-- <div class="col-md-9 col-lg-6 col-xl-5">
                                        <img src="<?php //echo base_url(); ?>/assets/img/logo-sevima.png"
                                        class="img-fluid" alt="Sample image">
                                    </div> -->
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <form action="/login/auth" method="post" >
                                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                            <h2 >Sign In </h2>
                                            
                                        </div>                                        
                                        <?php if(session()->getFlashdata('msg')):?>
                                                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                        <?php endif;?>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example3">Email address</label>
                                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                            placeholder="" name="email"/>                
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                        <label for="InputForPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="InputForPassword">

                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Checkbox -->
                                            <div class="form-check mb-0">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                            <!-- <label class="form-check-label" for="form2Example3">
                                                Remember me
                                            </label> -->
                                            </div>
                                            <!-- <a href="#!" class="text-body">Forgot password?</a> -->
                                        </div>

                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            <button type="submit" class="btn btn-primary btn-lg"
                                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                                                class="link-danger">Register</a></p>
                                        </div>

                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                                
                            </div>
                        </div>
                    </div>
                </div>
  </div>


   