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
              <li><a href="index4.php">SERVICIOS</a></li>
              <li><a href="#foot">CONTACTO</a></li>
            </ul>
          </div>
        </section>
      </nav>
    </header>
    <section class="banner">
      <section class="fondo-container">
        <img src="img/carrousel.jpg" class="img-fluid" />
      </section>
    </section>
    <main class="container">
      <section class="action-container">
        <figure class="text-center">
          <figcaption class="blockquote-footer">
            <p class="titulo">Animate a Superarte</p>
            <p class="titulo2">
              Enterate cuales son los servicios que <br />
              ofrecemos para vos.
            </p>
          </figcaption>
        </figure>
      </section>
      <section class="card-container card-group">
        <!--CARDS-->
        <article class="card">
          <img src="img/training1.jpg" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">ENTRENA DESDE CASA</h5>
            <p class="card-text">
              Nuestros mejores entrenadores te ofrecen exclusividad para que
              puedas entrenar cómodamente en tu casa.
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted"
              >FIT ARG - Contratar vía WhatsApp
              <img src="img/wsp.png" class="wsp" /> 1158545583</small
            >
          </div>
        </article>
        <article class="card">
          <img src="img/training2.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">ENTRENA EN NUESTRO GIMNASIO</h5>
            <p class="card-text">
              FIT ARG también te da la posibilidad de tener a tu propio personal
              trainer junto a vos cuando estés entrenando tus rutinas en nuestro
              gimnasio.
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted"
              >FIT ARG - Contratar vía WhatsApp
              <img src="img/wsp.png" class="wsp" /> 1158545583</small
            >
          </div>
        </article>
        <article class="card">
          <img src="img/training3.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">ASESORATE CON UN NUTRICIONISTA</h5>
            <p class="card-text">
              Contamos con nutricionistas, incluyendo veganos y vegetarianos,
              para que puedas hacer una rutina acorde a tus necesidades.
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted"
              >FIT ARG - Contratar vía WhatsApp
              <img src="img/wsp.png" class="wsp" /> 1158545583</small
            >
          </div>
        </article>
      </section>
      <section class="container-form">
        <!--CONTRATAR FORMULARIO-->

        <section>
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
      </section>
    </main>

    <!--FOOTER-->

    <footer class="mt-4">
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
