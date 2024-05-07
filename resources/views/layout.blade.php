<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>!CameYá¡</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <div class="container-scroller">



        <nav class="navbar navbar-expand-lg pt-0 pb-1">
            <div class="container-fluid px-5  mx-5">
                <a class="navbar-brand logo py-0" href="#">
                    <img src="images/logo-cameya.png" alt="" width="140">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse px-4" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto m-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active item-nav" aria-current="page" href="#">Inicio</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div class="contenedor m-5 col-md-12">
                <div class="row">
                    <div class="col-md-2">
                        <nav class="nav flex-column nav-underline w-4">
                            <a class="nav-link active" aria-current="page" href="#">Categorias</a>
                            <a class="nav-link" href="#">Empleados</a>
                            <a class="nav-link" href="#">Empleadores</a>
                            <a class="nav-link" href="#">Servicios Prestados</a>

                        </nav>
                    </div>


                    <div class="col-md-9 grid-margin mr-4 stretch-card">
                        <div class="card">
                            <div class="card-body">

                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between p-5 col-md-11">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">¡CameYá! con ❤️ por:
                        ADSO-7.</span>
                    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Todos los derechos reservados
                        © 2024. </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
    </div>
    {{--  --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
