<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Profile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <style type="text/css">
    .banner {
        background: url("image/bg_1.jpg")
          no-repeat center center;
        background-size: cover;
        padding-top: 20%;
        padding-bottom: 20%;
        color:white;
      }
      
      .lingkaran {
        display: inline-block;
        border-radius: 50%;
        width: 150px;
        margin: auto;
        height: 150px;
        color: #fff;
        background-color: black;
      }
      
      .lingkaran i {
        position: relative;
        top: 30px;
      }
      
      .crop-img {
        object-fit: cover;
      }
      
      .tim img {
        width: 250px;
        border: 10px solid #cccccc;
      }
      
      a.social {
        display: inline-block;
        width: 40px;
        height: 40px;
        color: #fff;
        border-radius: 50%;
        background-color: #333;
        line-height: 40px;
      }
      
      .client img {
        height: auto;
        max-height: 50px;
      }

    </style>

    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#beranda">Rinda Lestari</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">WELCOME TO MY PROFILE</h4>
        <a href="#beranda">
          <button type="button" class="btn btn-dark btn-lg">
            Beranda
          </button>
        </a>
      </div>
    </div>


    <!-- Beranda -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="beranda">Beranda</h2>
        <p>
         Welcome to my beranda 
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-coffee fa-5x"></i></span>
            <h3 class="mt-3">Drink</h3>
            <p>
                I really like drinking milk coffee
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fa fa-film fa-5x"></i></span>
            <h3 class="mt-3">Film</h3>
            <p>
               
                While drinking coffee of course by watching a movie
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fa fa-music fa-5x"></i
            ></span>
            <h3 class="mt-3">Music</h3>
            <p>
                But if you don't want to drink coffee then while listening to music
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- profil -->
    <div class="container-fluid pt-10pb-10 bg-light">
        <div class="container text-center">
          <h2 class="display-3" id="profil">Profile</h2>
          <p>
            The following is my personal data
          </p>
          <div class="row pt-4 gx-4 gy-4">
            <div class="col-md-4 text-center tim">
              <img
                src="image/3.jpg" class="rounded-circle mb-3"/>
              <h4>Rinda Lestari</h4>
              <p>
                <a href="https://instagram.com/_rindaalstr" class="social"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/Rindaa09/route_laravel" class="social"><i class="fab fa-github"></i></a>
              </p>
            </div>
            <div class="col-md-6">
                <div class="card crop-img">
                  <div class="card-body">
                    <h5 class="card-title">Biodata Diri </h5>
                    <p class="card-text" >
                      Nama : Rinda Lestari <br>
                      Kelas : XII RPL 2 <br>
                      Absen : 27 <br>

                      Nama saya Rinda Lestari dari kelas XII RPL 2, <br>
                    alamat saya berada di dusun kucur, desa sumberrejo, <br>
                     kecamatan purwosari, kabupaten pasuruan, <br>
                      jawa timur, indonesia. <br>
                      Saya mempunyai sebuah hobi yaitu menonton dan mendengarkan musik. <br>
                      Saya sangat suka koleksi film-film yang sudah saya tonton entah mengapa. <br>
                      Baik sekian perkenalan diri saya yang singkat
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
    <!-- galeri -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="galeri">My Gallery</h2>
        <p>
            Welcome to my photo collection
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/4.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Tenth grade</h5>
                <p class="card-text">
                    This photo was taken before the corona virus caused online schools
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/5.jpg"
                class="card-img-top"
                width="200"
                height="200"/>
              <div class="card-body">
                <h5 class="card-title">Eleventh Grade</h5>
                <p class="card-text">
                    If this one was taken in the eleventh grade, that is when the report card was taken even
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/6.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Tenth Grade</h5>
                <p class="card-text">
                    This is the same as the first photo, looks very happy doesn't it
                </p>
              </div>
            </div>
          </div>

          
          <div class="col-md-4">
              <div class="card crop-img">
                  <img
                  src="image/7.jpg"
                  class="card-img-top"
                  width="200"
                  height="200"
                  />
                  <div class="card-body">
                      <h5 class="card-title">Last Saturday</h5>
                      <p class="card-text">
                        Well if this one was taken in tenth grade with our religion teacher
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
      <div class="card crop-img">
        <img
          src="image/8.jpg"
          class="card-img-top"
          width="200"
          height="200"
        />
        <div class="card-body">
          <h5 class="card-title">Birthday Friend</h5>
          <p class="card-text">
              If this one was taken on the birthday of one of us in the photo
          </p>
        </div>
      </div>
    </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/9.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Women's Group</h5>
                <p class="card-text">
                    This photo was taken during a meal at our gym teacher's house
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center pt-5 pb-5">
        All Rights Reserved &copy; 2021
      </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
