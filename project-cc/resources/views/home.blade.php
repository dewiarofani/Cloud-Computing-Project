@extends('layouts/main')

@section('container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!-- Custom Style for this template -->
<link href="/css/style.css" rel="stylesheet">

{{-- sidebar di page home --}}
<html>
  <body>
    <div class="container-fluid">
        <div class="row">
          @include('partials.dashboard')
          
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Badan Pusat Statistik Kota Surakarta</h1>
              </div>

                <div class="container mt=4">
                  @yield('containerhome')
                </div>

            </main>
          </div>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-u03SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gx0X80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>
      
  </body>
</html>
@endsection

