<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="control.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light barra">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="ferrakasa.webp" alt="" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<div class="collapse navbar-collapse" id="navbarText">
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
-->
        </div>
    </nav>
    <div class="container secciones">
        <div class="row seccion">
            <h2>Personal</h2>
            <div class="col-2 icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <a class="btn btn-warning" href="#" role="button"> Administrador</a>
            </div>
            <div class="col-2 icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <a class="btn btn-warning" href="#" role="button">Vendedor A</a>
            </div>
        </div>
        <div class="row seccion">
            <h2>Articulos</h2>
            <div class="col-2 icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
                <a class="btn btn-warning" href="#" role="button">Acero</a>
            </div>
            <div class="col-2 icono">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path
                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
                <a class="btn btn-warning" href="#" role="button">Madera</a>
            </div>
        </div>
        <button onclick="aparecer('externa')">Clic</button>
        
        <div class="externa col-10" id="externa">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque labore voluptatum rerum eius quasi
                explicabo totam enim voluptatem laudantium cum iste, consectetur, nam illum harum ipsum expedita
                deleniti sapiente atque. Delectus dignissimos repudiandae iste odit doloribus amet rerum fuga
                blanditiis, cumque molestias maiores cupiditate architecto fugiat labore magnam! Incidunt a voluptate
                aliquid vero reiciendis, non quaerat officiis eum, corrupti animi at qui dolores ea quod architecto ad
                asperiores cupiditate beatae rem pariatur consequuntur veritatis quisquam nemo soluta. Iusto dignissimos
                maiores aspernatur incidunt accusantium, quos ullam impedit facilis esse doloremque aliquam earum?
                Nesciunt pariatur, cum, unde, itaque vitae earum a sit placeat reiciendis accusantium dolorum obcaecati
                id eveniet. Cupiditate vitae perferendis qui magni quisquam asperiores voluptatem numquam quia vel
                dolorum exercitationem rerum tempora tempore harum mollitia sequi, libero, iusto laboriosam.
                Consequuntur sapiente quibusdam architecto qui incidunt placeat maxime eaque tempore aliquam? Impedit
                dolores laudantium unde in, nulla quos ab vitae assumenda deserunt eveniet eligendi ullam ipsa at
                voluptate ducimus cum consequuntur! Quaerat vitae voluptates facilis nisi earum eos officiis provident
                eius harum iure tempora rem vel molestiae pariatur, tenetur numquam tempore a corrupti ducimus aliquam,
                dolore rerum cupiditate eligendi porro. Provident quae, iste alias obcaecati nobis eum nam perspiciatis
                enim! Ullam possimus repellendus pariatur optio sit, accusamus numquam minima facilis quidem quasi odio
                vero ducimus, tempore, assumenda alias. Illo praesentium ex voluptate nihil velit amet beatae ea,
                quisquam, molestias vitae culpa porro. Dolore recusandae optio nisi velit reprehenderit quae a numquam
                deserunt aliquid! Magnam quos temporibus veniam modi beatae nam voluptates omnis commodi repellendus
                dicta. Illo ea pariatur tenetur voluptatum dolores voluptas, accusamus vitae in dolorum ullam sit libero
                provident consequuntur repudiandae, adipisci facilis. Obcaecati, veritatis voluptatum. Autem totam eius,
                assumenda sint tempore cum libero non repellendus dignissimos tenetur delectus, facilis nobis? Quas sunt
                .</p>
                <button onclick="aparecer('externa')">Cerrar</button>
        </div>
    
    </div>
    <script src="adminpage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>