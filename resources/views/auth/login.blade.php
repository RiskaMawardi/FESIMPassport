<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome back! | Login Account</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="shortcut icon" href="../assets/landing-page/img/imig.png">
</head>
<style>
    .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
    }

    /* #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#C3E0E5 ,#5885AF);
        overflow: hidden;
    }

    #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#C3E0E5 ,#5885AF);
        overflow: hidden;
    } */

    .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
    }

</style>

<body>
    <section class="background-radial-gradient overflow-hidden" style="background-size: 100vh 80vh no-repeat;">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <img class="" src="../assets/landing-page/img/imig.png" alt="" width="15%">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Selamat Datang di Website Aplikasi <br />
                        <span style="color: hsl(218, 81%, 75%)">Pembutan Passport</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass mt-5">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="{{route('loginStore')}}" method="POST">
                                @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3" name="email" class="form-control" />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4" name="password" class="form-control" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>
                                <input type="hidden" name="role" value="false">


                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color:#274472">
                                    Login
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>don't have account? <a href="/index-register" class="text-decoration-none">Register here</a></p>
                                    <!-- <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="with-pattern-1 position-relative pt-5" style="background-color:#274472">
      <div class="container py-5">
        <div class="row gy-4">
          <div class="col-lg-3"><img class="mb-4" src="../assets/landing-page/img/loggo.png" alt="" width="110">
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
          <div class="col-lg-2">
            <h2 class="h5 mb-4">Quick Links</h2>
            <div class="d-flex">
              <ul class="list-unstyled d-inline-block me-4 mb-0">
                <li class="mb-2"><a class="footer-link" href="#!">History</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">About us</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">Contact us</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2">
            <h2 class="h5 mb-4">Services</h2>
            <div class="d-flex">
              <ul class="list-unstyled me-4 mb-0">
                <li class="mb-2"><a class="footer-link" href="#!">History</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">About us</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">Contact us</a></li>
                <li class="mb-2"><a class="footer-link" href="#!">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5">
            <h2 class="h5 mb-4">Contact Info</h2>
            <ul class="list-unstyled me-4 mb-3">
              <li class="mb-2 text-muted">728  Ocello Street, San Diego, California. </li>
              <li class="mb-2"><a class="footer-link" href="tel:619-851-4132">619-851-4132</a></li>
              <li class="mb-2"><a class="footer-link" href="mailto:Nova@example.com">Nova@example.com</a></li>
            </ul>
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a class="social-link" href="#!"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#!"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#!"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#!"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyrights">       
        <div class="container text-center py-4">
          <p class="mb-0 text-muted text-sm">&copy; 2021, Your company. Template by <a href="https://bootstrapious.com/p/app-landing-page" class="text-reset">Bootstrapious</a>.</p>
          <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
</body>

</html>
