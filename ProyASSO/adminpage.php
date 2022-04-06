<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="control.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light barra">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="ferrakasa.webp" alt="" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#sec1">Altas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#sec2">Bajas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sec3">Modificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Admnistrador.html">Salir</a>
                    </li>
                </ul>
                <span class="navbar-text">
              Navbar text with an inline element
            </span>
            </div>
        </div>
    </nav>
    <div class="container secciones">
        <div class="row seccion">
            <h2>Personal</h2>
            <div class="col-2">
                <img src="user.jpg">
                <button>Administrador</button>
            </div>
            <div class="col-2">
                <img src="user.jpg">
                <button>Vendedor A</button>
            </div>
        </div>
        <div class="row seccion">
            <h2>Articulos</h2>
            <div class="col-2">
                <img src="articulo.jpg">
                <button>Acero</button>
            </div>
            <div class="col-2">
                <img src="articulo.jpg">
                <button>Madera</button>
            </div>
        </div>
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>