            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Rents Book</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
            </head>
            </head>
            <body>
            <nav class="navbar navbar-dark navbar-expand-lg bg-danger">
            <div class="container">
            <a class="navbar-brand" href="#">
            <img src="images/books.png"
            alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Rents Book
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Horror</a></li>
            <li><a class="dropdown-item" href="#">Comedy</a></li>
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            </ul>
            </li>
            </li>
            @guest
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
            </li>
            @endguest
            @auth
            <li class="nav-item">
                <a href="/logout"><i class="bi bi-box-arrow-left p-1"></i> Logout</a>
            </li>
            @endauth
            </ul>
            </div>
            </div>
            </nav>
        {{-- corousel --}}
            <div id="carouselExampleInterval" class="carousel slide"
            style="max-height:400px; max-widht:70%"  data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="500">
            <img src="https://img.freepik.com/free-vector/savannah-with-acacia-trees-early-morning_107791-11467.jpg?w=1480&t=st=1675755004~exp=1675755604~hmac=96cbec8485d580b83de023e526cce2a57ea9d27285b7e1beec48b7443a51b019" class="d-block w-100" alt="..."
             style="max-height: 400px; object-fit:cover;">
            </div>
             <div class="carousel-item" data-bs-interval="500">
            <img src="http://www.kitatv.com/wp-content/uploads/2019/08/8-Aplikasi-Paling-Banyak-Iklannya7.png" class="d-block w-100" alt="..."
            style="max-height: 400px; object-fit:cover;">
            </div>
            <div class="carousel-item" ata-bs-interval="500">
            <img src="https://img.freepik.com/free-photo/group-elephants-walking-dry-grass-wilderness_181624-18109.jpg?w=1060&t=st=1675755039~exp=1675755639~hmac=80c4556658f49fa1d5b6885a40bd2e96c624a5d992da9d7a5097a5dca64bac88" class="d-block w-100" alt="..."
            style="max-height: 400px; object-fit:cover;">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
            </div>
      {{-- akhir --}}

      {{-- Awal Jumbtron --}}
            <div class="container" style="margin-top: 100px;">
            <div class="row">
            <div class="col-4">
            <h2>Raii Book</h2>
            <a href="/register" class="btn btn-outline-primary">Ayo Daftar sekarang</a>
            </div>
            <div class="col-8">
            <p><p></p>maunya apa?</p>
            </div>
            </div>
            </div>
{{-- Akhir Jumbtron --}}

{{-- awal Card Pupular Book --}}
            <section style="background-color: #DC0000">
            <div class="container my-5">
            <div class="row text-center">
            <h2>Popular Book</h2>
            </div>
            <div class="owl-carousel owl-theme">
            <div class="item service-item">
            <div class="row mt-4 ms-5">
            <div class="col-lg-4 mb-5">
            <div class="card" style="width: 18rem;">
            <img src="https://cdn.gramedia.com/uploads/items/bumi-manusia-edit.jpg" class="card-img-top class="style="max-height: 300px" alt="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gramedia.com%2Fbest-seller%2Fresensi-novel-bumi-manusia%2F&psig=AOvVaw3FcA6kiPYvkNJgG0QPa8BV&ust=1674803225480000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCIie9azW5PwCFQAAAAAdAAAAABAD">
            <div class="card-body" style="max-height: 200px">
            <h5 class="card-title">Bumi Manusia</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="https://id.wikipedia.org/wiki/Bumi_Manusia_(novel)" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="card" style="width: 18rem;">
            <img src="https://cdn.gramedia.com/uploads/items/img067.jpg" class="card-img-top class="style="max-height: 300px" alt="">
            <div class="card-body" style="max-height: 200px">
                <h5 class="card-title">Tenggelamnya Kapal Van Der Wijck</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="https://id.wikipedia.org/wiki/Tenggelamnya_Kapal_Van_der_Wijck_(film)" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>

        <div class="col-lg-4 mb-5">
            <div class="card" style="width: 18rem;">
            <img src="https://upload.wikimedia.org/wikipedia/id/8/86/Dear_Nathan_%28poster%29.jpg" class="card-img-top class="style="max-height: 300px" alt="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbukubaru%2F2109011157497pvOP8U1gR.png&w=256&q=75">
            <div class="card-body" style="max-height: 200px">
                <h5 class="card-title">Dear Nathan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="https://id.wikipedia.org/wiki/Dear_Nathan" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
{{-- akhir awal Card Pupular Book --}}


{{-- massage --}}
        <div class="container">
        <div class="row text-center">
        <h2>Messege</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
            <form action="/" method='post'>
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Messege</label>
                  <textarea name="message" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
{{-- Akhir Massage --}}
{{-- Footer --}}
    <footer class="bg-secondary text-center align-items-center" style="height:40px";>
    <p>Created by <a href="#" style="text-decoration: none; color: white;" target="_blank">Aneymous</a></p>
</footer>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
