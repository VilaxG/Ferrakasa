<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
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
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                    </li>
                </ul>
                <span class="navbar-item">
                    <a href="#administrador.php" class="btn btn-info    ">Cerrar sesion</a>
                </span>
            </div>
        </div>
    </nav>
    <div class=" secciones">
        <div class="row justify-content-evenly  seccion" style="margin-top: 15%;">
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                        class="bi bi-person-bounding-box card-img-top" viewBox="0 0 16 16"
                        style="margin-top: 10px; color: rgb(218, 96, 15);">
                        <path
                            d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Personal</h5>
                        <p class="card-text">
                            CRUD para administrar al personal total
                            <br>
                        </p>
                        <a href="personal.php" class="btn btn-warning">Administrar</a>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                        class="bi bi-list card-img-top" viewBox="0 0 16 16" style="color: rgb(218, 96, 15);">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Materiales</h5>
                        <p class="card-text">
                            CRUD para administrar los materiales de los diferentes inventarios
                        </p>
                        <a href="material.php" class="btn btn-warning">Administrar</a>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor"
                        class="bi bi-shop card-img-top" viewBox="0 0 16 16" style="color: rgb(218, 96, 15);">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                    </svg>

                    <div class="card-body">
                        <h5 class="card-title">Tienda</h5>
                        <p class="card-text">
                            CRUD para administrar los locales de la franqicia
                            <br><br>
                        </p>
                        <a href="tienda.php" class="btn btn-warning">Administrar</a>
                    </div>
                </div>
            </div>
        </div>

        <!--
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
-->

    </div>
    <script src="adminpage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>