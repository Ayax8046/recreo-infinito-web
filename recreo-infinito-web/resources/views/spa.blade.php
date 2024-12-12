<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WEB | Recreo Infinito</title>

    <!-- Incluir Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Estilos de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- Scripts de jQuery y DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- APEXCHARTS -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- Archivos generados por Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background: linear-gradient(to right, #002f94, #0068f6);">
    <div id="navegacion"></div>

    <div id="app"></div> <!-- Vue se montará aquí -->

    <div class="bg-black p-4 mt-5">
        <div class="row row-cols-auto container">
            <div class="col-md-4 d-flex justify-content-end">
                <img src="/images/location.png" class="img-fluid rounded" alt="">
            </div>

            <div class="col-md-4">
                <p class="text-white">Aquí Estamos</p>
                <p class="text-white">56 Rue Louis Rouquier, 92300 Levallois-Perret, Francia</p>

                <p class="text-white mt-5">Contacto</p>
                <p class="text-white"><i class="bi bi-phone"></i> +34 652 14 18 87</p>
                <p class="text-white"><i class="bi bi-envelope"></i> recreoifinito@gmail.com</p>
            </div>

            <div class="col-md-4">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="/servicios/paintball">Paintball</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/servicios/restaurante">Restaurante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/servicios/karts">Karts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/servicios/ocio">Zona Ocio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/servicios/jumping">Jumping Zone</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-5 row row-cols-auto container d-flex justify-content-center">
            <p class="d-flex justify-content-center align-items-center text-white">Recreo Infinito - David Elena Heredia
            </p>
            <span class="text-end text-white">2024 <i class="bi bi-c-circle"></i> 2025</span>
        </div>
    </div>
</body>

</html>
