<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- My CSS-->
    <style>
        section {
            min-height: 420px;
        }
    
    </style>
    <title>Hello, This is My Project!</title>
  </head>
  <body class="mt-5">



    
<!--untuk membuat navbar di atas-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    </div class="container">
    <a class="navbar-brand" href="#">Ajeng Eka Yudianingrum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">My Adventure</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
    </div>
    </div>
    </div>
    </nav>

<!--Jumbo Tron-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="img/profile1.jpg" width="25%" class="rounded-circle img-thumbnail">
          <h1 class="display-4">AEY TOUR </h1>
          <p class="lead"> Welcome to AEY Tour </p>
        </div>
    </div>

<!--kolom about-->
<section id="about" class="about">

    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>About</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                <p class="text-left">Selamat datang di AEY Tour. AEY Tour adalah perusahaan di bidang biro perjalanan. Kami dapat membantu perjalanan traveling Anda.</p>
            </div>
            <div class="col-md-5 text-center">
                <p class="text-left">Bersama AEY Tour, dapatkan pengalaman travelling yang kamu inginkan.</p>
            </div>
        </div>
    </div>
    </section>
<!--Kolom stok tiket-->
<section id="about" class="about bg-light pb-4">

    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>Stock Tiket</h2>
            </div>
        </div>
        <table class="table table-hover"><br>
        <tr>
        <th scoope="col">Kode</th>
        <th scoope="col">Tujuan</th>
        <th scoope="col">Jenis</th>
        <th scoope="col">Stok</th>
        <th scoope="col">Harga</th>
        </tr>
        @foreach($projek3 as $p3)
        <tr>
        <td>{{$p3->kode}}</td>
        <td>{{$p3->tujuan}}</td>
        <td>{{$p3->jenis}}</td>
        <td>{{$p3->stok}}</td>
        <td>{{$p3->harga}}</td>
        </tr>
        @endforeach
        </table>
    </div>
    </section>
<!--kolom myadventure-->
<section id="My Adventure" class="My Adventuret pb-4">
    <div class='container'>
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2>My Adventure</h2>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                    <img src="img/thumbs/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                      Hallo Traveller! yuk liburan kece bersama kami, foto ini di ambil di bibir pantai Peh Pulo lohh.
                      Pantai Peh Pulo, dikenal juga dengan nama Pantai Sumbersih, berada di Dusun Sumbersih, Kecamatan Panggungrejo, Kabupaten Blitar. 
                      </p>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <img src="img/thumbs/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                      Hallo Traveller! yuk liburan kece bersama kami, foto ini di ambil di bibir pantai Pasetran Gondo Mayit lohh.
                      Pantai Pasetran Gondo Mayit ini terletak di sebelah timur Pantai Tambakrejo, Letaknya masih sama di Desa Tambakrejo, Kec. Wonotirto, Kabupaten Blitar.
                      </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="img/thumbs/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                      Hallo Traveller! yuk liburan kece bersama kami, foto ini di ambil di bibir pantai bagian bawah Pantai Serang lohh, yakin ga penasaran nih ?.
                      Pantai Serang merupakan pantai yang terletak di pesisir Samudra Hindia, tepatnya berada di desa Serang, kecamatan Panggungrejo.
                      </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 pt-4">
            <div class="col-md">
                <div class="card">
                    <img src="img/thumbs/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                      Hallo Traveller! yuk liburan kece bersama kami, foto ini di ambil di kawasan Wisata Gunung Kelud loh lohh.
                      Wisata Gunung Kelud  berada di perbatasan antara Kabupaten Kediri, Kabupaten Blitar, dan Kabupaten Malang.
                      Lokasinya  kira-kira 35 km sebelah timur pusat Kota Kediri dan 25 km sebelah utara pusat Kota Blitar.
                      </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="img/thumbs/5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                      Hallo Traveller! yuk liburan kece bersama kami, foto ini di ambil di bibir Pantai Serang lohh.
                      Pantai Serang merupakan pantai yang terletak di pesisir Samudra Hindia, tepatnya berada di desa Serang, kecamatan Panggungrejo.
                      </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="img/thumbs/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">
                      Hallo Traveller! yuk liburan kece bersama kami, foto ini di ambil di atas bukit Pantai Peh Pulo lohh.
                      Pantai Peh Pulo, dikenal juga dengan nama Pantai Sumbersih, berada di Dusun Sumbersih, Kecamatan Panggungrejo, Kabupaten Blitar.
                      </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--contact-->
<section id="Contact" class="Contact mb-5 bg-light pb-4">
<div class="container">
    <div class="row pt-4 text-center">
        <div class="col">
            <h2>Contact Us</h2>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card text-white bg-primary mb-3 text-center">
        <div class="card-body">
        <h5 class="card-title">Contact Us</h5>
        </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item"><h1>Location</h1></li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Jl.Merdeka No. 12, Blitar</li>
            <li class="list-group-item">East Java, Indonesia</li>
            </ul>
    </div>

    <div class="col-lg-6">
        <form action="projek.blade.php">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat">
        </div>
        <div class="form-group">
            <label for="no">No. Handphone</label>
            <input type="text" class="form-control" id="no">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pesan">Pesan</label>
            <textarea type="text" class="form-control" id="pesan">
            </textarea>
        </div>
        <div class="form-group">
        <button type="button" class="btn btn-primary">Kirim Pesan</button>
        </div>
        </form>       
    </div>
    </div>
</div>
</section>

<footer class="bg-dark text-white">
    <div class="container">
        <div class="row text-center pt-3">
            <div class="col">
                <p>Copyright 2020.</p>
            </div>
        </div>
    </div>
</footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
