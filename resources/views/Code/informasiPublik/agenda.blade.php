<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agenda | Kelurahan Temas</title>
    <link rel="shortcut icon" href="../../Assets/Logo_Kota_Batu,_Jawa_Timur_(Seal_of_Batu,_East_Java).svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="/CSS/hover.css"/>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
      
      body {
        font-family: "Poppins", sans-serif;
      } 

      .flex-grow-1 {
        flex: 1;
      }
    </style>
    
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header id="header"> 
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <table>
            <tr>
                <td>
                  <a href="/">
                    <img height="40" data-sticky-top="33" src="../../Assets/Logo_Kota_Batu,_Jawa_Timur_(Seal_of_Batu,_East_Java).svg"/>
                  </a>
                </td>
                <td>
                  <h6 class="ms-2 mt-1">
                    <a href="/" class="text-dark">
                      <strong class="fs-6" >Kelurahan Temas</strong>
                        <br/><span class="fs-6">Kota Batu</span> 
                      </a>
                  </h6>
                </td>
            </tr>
          </table>
  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-semibold">
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/visi-misi">Visi & Misi</a></li>
                    <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                    <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                    <li><a class="dropdown-item" href="/demografi">Demografi</a></li>
                    <li><a class="dropdown-item" href="/geografis">Geografis</a></li>
                    <li><a class="dropdown-item" href="/peta">Peta</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kelembagaan
                </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/lpmk">LPMK</a></li>
                    <li><a class="dropdown-item" href="/bkm">BKM</a></li>
                    <li><a class="dropdown-item" href="/linmas">Linmas</a></li>
                    <li><a class="dropdown-item" href="/kim">KIM</a></li>
                    <li><a class="dropdown-item" href="/pkk">PKK</a></li>
                    <li><a class="dropdown-item" href="/karang-taruna">Karang Taruna</a></li>
                    <li><a class="dropdown-item" href="/fa">Forum Anak</a></li>
                    <li><a class="dropdown-item" href="/pokdarwis">POKDARWIS</a></li>
                    <li><a class="dropdown-item" href="/fprb">FPRB</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pengembangan Lokal
                </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/sarana-prasarana">Sarana Prasarana</a></li>
                    <li><a class="dropdown-item" href="/umkm">UMKM</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Informasi Publik
                </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/berita">Berita</a></li>
                    <li><a class="dropdown-item" href="/agenda">Agenda</a></li>
                    <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
                    <li><a class="dropdown-item" href="/galeri">Galeri</a></li>
                  </ul>
              </li>
              <li class="nav-item ms-3">
                <a style="margin-top: -2px;", class="nav-link active" href="/layanan">Layanan</a>
              </li>
              <li class="nav-item ms-3">
                <a style="margin-top: -2px;", class="nav-link active" href="/kontak">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
      
    <main class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h2 class="mb-4">Agenda</h2>
          <h2>{{ $agenda->title }}</h2>
          <p>{{ $agenda->created_at->diffForHumans() }} • {{ $agenda->user->name }}</p>
          <img style="max-height: 500px; max-width:800px; overflow:hidden" src="{{ asset('storage/' . $agenda->image) }}" alt="" class="image-fluid me-3">
          <article class="my-3 fs-6">
            <p>{!! $agenda->body !!}</p>
          </article>
          <a href="/agenda">< Kembali ke Agenda</a>
        </div>
      </div>
    </main>

    <footer id="footer" class="mt-5">
      <div class="text-bg-dark">
        <div class="container pt-4">
          <div class="row justify-content-between">
    
          <div class="col-lg-3 col-md-6 mb-4">
              <div>
                <h3>Temas</h3>
                <p>
                  Temas adalah sebuah kelurahan di Kecamatan Batu, Kota Batu, Provinsi Jawa Timur, Indonesia.
                  <br>
                  <strong>Jalan Wukir No 709
                  Kode Pos 65315</strong><br>
                </p>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4">
              <h4>Kontak Temas</h4>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-telephone text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h5>Telepon</h5>
                  <p><a class="link-underline-opacity-0" href="#" target="_blank">+62 812-3351-548</a></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-envelope text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h6>Email</h6>
                  <p><a href="#" target="_blank">Temas</a></p>
                </div>
              </div>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4">
              <h4>Media Sosial</h4>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-facebook text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h6>Facebook</h6>
                  <p><a href="#" target="_blank">Temas</a></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-instagram text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h6>Instagram</h6>
                  <p><a href="https://www.instagram.com/temas_sae/" target="_blank">temas_sae</a></p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2 social-links">
                  <h3><a href="#" target="_blank"><i class="bi bi-youtube text-light"></i></a></h3>
                </div>
                <div class="col-lg-10">
                  <h6>Youtube</h6>
                  <p><a href="https://www.youtube.com/@temassaetvdesa537" target="_blank">@temassaetvdesa537</a></p>
                </div>
              </div>
            </div>
    
          </div>
        </div>
      </div>
      <div class="text-center bg-black text-light p-2">
        <span><i class="bi bi-c-circle"></i> Copyright. All Rights Reserved</span> <br>
        <span>Temas</span>
      </div>
    </footer>
    </body>
  </html>