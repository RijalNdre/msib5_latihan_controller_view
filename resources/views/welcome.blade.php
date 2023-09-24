<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Ndreez</title>
    <style>
      html, body {
        height: 100%;
      }
  
      .d-flex-center {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div class="d-flex-center" style="font-family: poppins;">
      <div data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <img src="{{asset('assets/images/logo.png')}}" alt="" style="float: left; width: 300px; height: 300px; margin-left: 50px;" class="rounded-circle">
            </div>
            <div class="col-md-8 my-auto">
              <h1 style="font-weight: bolder">Halo Selamat Datang di Website Saya!</h1>
              <p>Website ini merupakan website profil saya. Di website ini, Anda dapat menemukan lebih banyak informasi tentang saya</p>
                <a href="{{route('profil.index')}}">
                  <button class="btn btn-primary mt-2">Masuk</button>
                </a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
