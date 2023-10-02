<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pagina princial :) miauu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- REFERENCIAS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{('css/styles.css')}}">
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="{{asset('images/logo_empresa.JPG')}}" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="#">Tienda</a></li>
                <li><a href="#">Opcion de ejemplo</a></li>
                <li><a href="#">Otra opción</a></li>
           </ul>            
        </nav>
        <a class="btn" href="#"><button>Contacto</button></a>
    </header>
    <section class="vh-100" style="background-color:#e8e8e8;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block text-center"
                  style="background-color: #9A616D; ">
                    <img src="{{asset('images/logo_empresa.JPG')}}"
                      alt="Cuarzos energía natural" class="img-fluid w-80 mx-auto rounded-circle"
                      style="margin-top:220px; max-width: 400px; height: auto; " />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form>
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">Logo</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión en tu cuenta</h5>
      
                        <div class="form-outline mb-4">
                          <input type="email" id="form2Example17" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">Email</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example27" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Contraseña</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button style="background-color: #1b3039; color: #eceff1; font-size:20px;" class="btn btn-lg btn-block" type="button">Iniciar sesión</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Olvidaste tu contraseña?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes una cuenta? <a href="#!"
                            style="color: #393f81;">Registrate aquí</a></p>
                    
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
