<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ferreksa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='adninistrador.css'>
    <script src='main.js'></script>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e06838;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="ferrakasa.webp" alt="" height="40">
            </a>
        </div>
    </nav>
    <div class="container py-5" style="width: 30%;">
        <div class="card">
            <h5 class="card-header text-center">Iniciar Sesión</h5>
            <div class="card-body">
                <form method="POST" action="login.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="text-align: left;">Correo Electronico</label>
                        <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">No compartas tu información personal con nadie.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="text-align: left;">Password</label>
                        <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
                        <button type="submit" class="btn btn-outline-success" style="height: 40px; position: relative; left: -10%; margin-top: 20px;">Ingresar</button>
                    </div>
                </form>
            </div>
            <!-- <div class="card-footer">
                <div class="d-grid gap-1">
                    <button type="button" class="btn btn-outline-success" style="height: 40px; position: relative; left: -20%;">Ingresar</button>
                </div>
            </div>
            -->
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>