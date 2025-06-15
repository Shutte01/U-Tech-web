<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <title>U-Tech | {{ $title }}</title>
  </head>
  <body>
    
    @include('partials.navbar')

    <div id="page-container">
      <div id="content-wrap">
        @yield('container')
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <footer id="footer" style="background-color: #222222; margin-bottom: auto">
      <div class="container">
        <div class="grid-container-footer" style="height: 100px text-align: center; padding-top: 14px;">
          <div class="text-center">
            <p style="color: #FFFFFF">&copy; 2025 U-Tech. All rights reserved.</p>
          </div>
          <div>
          </div>
          <div class="text-center">
            <p style="color: #FFFFFF">
              <a href="https://www.instagram.com/unpadtechclub?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-decoration-none text-light"><i class="bi bi-instagram"></i> Instagram</a> |
              <a href="mailto:unpad.tech.club24@gmail.com" target="_top" class="text-decoration-none text-light"><i class="bi bi-envelope"></i> Gmail</a> | 
              <a href="https://youtube.com/@unpadtechnologyclub?si=GInqBYSOyhSWHAjJ" class="text-decoration-none text-light"><i class="bi bi-youtube"></i> YouTube</a>
            </p>
          </div>    
        </div>
      </div>
    </footer>
  </body>
</html>