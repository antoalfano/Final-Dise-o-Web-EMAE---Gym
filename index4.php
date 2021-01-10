<!DOCTYPE html>
<html lang="es">
  <head>
    <!--Required meta tags-->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!--Bootstrap CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <!--Fuente-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />

    <!--Titulo-->
    <title>FIT ARG</title>
  </head>

  <body>
    <header>
      <nav>
        <section class="logo-container">
          <img src="img/logo.png" class="logo" />
        </section>
        <section class="list-container">
          <div class="list">
            <ul>
              <li><a href="index.php">INICIO</a></li>
              <li><a href="index3.php">CLASES</a></li>
              <li><a href="#">SERVICIOS</a></li>
              <li><a href="#foot">CONTACTO</a></li>
            </ul>
          </div>
        </section>
      </nav>
    </header>

    <main class="container mt-4 mb-4">
      <section class="trainers row">
        <article class="col-12 col-md-6 col-lg-4">
          <aside class="card">
            <img src="img/trainer1.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Mario Pérez</h5>
              <p class="card-text">
                Especialista en hacer que las personas sienta la motivación de
                entrenar por convicción propia. Reconocimiento internacional en
                Training Fitness.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Gluteos Firmes</li>
              <li class="list-group-item">Cero Flacides</li>
              <li class="list-group-item">Motivación</li>
            </ul>
          </aside>
        </article>
        <article class="col-12 col-md-6 col-lg-4">
          <aside class="card">
            <img src="img/trainer2.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Francisco Alvarez</h5>
              <p class="card-text">
                Especialista en hacer que las personas sienta la motivación de
                entrenar por convicción propia. Reconocimiento internacional en
                Training Fitness.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Gluteos Firmes</li>
              <li class="list-group-item">Cero Flacides</li>
              <li class="list-group-item">Motivación</li>
            </ul>
          </aside>
        </article>
        <article class="col-12 col-md-6 col-lg-4">
          <aside class="card">
            <img src="img/trainer4.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Maxi Torres</h5>
              <p class="card-text">
                Especialista en hacer que las personas sienta la motivación de
                entrenar por convicción propia. Reconocimiento internacional en
                Training Fitness.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Gluteos Firmes</li>
              <li class="list-group-item">Cero Flacides</li>
              <li class="list-group-item">Motivación</li>
            </ul>
          </aside>
        </article>
        <article class="col-12 col-md-6 col-lg-4">
          <aside class="card">
            <img src="img/trainer3.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Daniel y Maria</h5>
              <p class="card-text">
                Especialista en hacer que las personas sienta la motivación de
                entrenar por convicción propia. Reconocimiento internacional en
                Training Fitness.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Gluteos Firmes</li>
              <li class="list-group-item">Cero Flacides</li>
              <li class="list-group-item">Motivación</li>
            </ul>
          </aside>
        </article>
        <article class="col-12 col-md-6 col-lg-4">
          <aside class="card">
            <img src="img/trainer5.png" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Jose Fernandez</h5>
              <p class="card-text">
                Especialista en hacer que las personas sienta la motivación de
                entrenar por convicción propia. Reconocimiento internacional en
                Training Fitness.
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Gluteos Firmes</li>
              <li class="list-group-item">Cero Flacides</li>
              <li class="list-group-item">Motivación</li>
            </ul>
          </aside>
        </article>
      </section>
      <section class="mt-4">
        <div class="card newsletter-container">
          <h5 class="card-title">Registra tu correo...</h5>
          <div class="card-body">
            <p class="card-text">
              Registrate a nuestro Newsletter para recibir novedades sobre el
              gym, ofertas, promociones, descuentos y mas...
            </p>
            <form action="registro.php" method="POST">
              <div class="mb-3 form-group">
                <label for="exampleFormControlInput1" class="form-label"
                  >Tu Email</label
                >
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="tucorreo@proveedor.com"
                />
              </div>
              <button type="submit" name="registrar" class="btn btn-warning">REGISTRO</button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <!--FOOTER-->

    <footer class="mt-4" id="foot">
      <section class="foot">
        <a name="cont">
          <p class="pie">
            FIT ARG - 2020 &copy;Todos los derechos reservados | info@fitarg.com
            | <img src="img/wsp.png" class="wsp" /> 1158545583 |
            <img src="img/face.png" class="face" /> FIT ARG |
            <img src="img/ig.png" class="ig" /> FIT ARG |
            <img src="img/tt.png" class="tt" /> FIT ARG
          </p></a
        >
      </section>
    </footer>

    <script src="./js/jquery3-5-1.js"></script>
    <script src="./js/popper1-16.min.js"></script>
    <script src="./js/bootstrap/bootstrap.js"></script>
  </body>
</html>
