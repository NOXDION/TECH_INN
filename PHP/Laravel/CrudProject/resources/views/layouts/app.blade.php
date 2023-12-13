<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
        <svg class="bi" width="24" height="24"><use xlink:href="#aperture"></use></svg>
        Hotel Sena
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="#offcanvas" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="#offcanvas" aria-labelledby="#offcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="#offcanvasLabel">Aperture</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav flex-grow-1 justify-content-between">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="bi" width="24" height="24"><use xlink:href="#aperture"></use></svg>
            </a></li>
            <li class="nav-item"><a class="nav-link" href="/rol">Roles</a></li>
            <li class="nav-item"><a class="nav-link" href="/user">Usuarios</a></li>
            <a href="/"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" style="max-width: 50px;"></a>
            <li class="nav-item"><a class="nav-link" href="/empleado">Empleados</a></li>
            <li class="nav-item"><a class="nav-link" href="/cliente">Clientes</a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="bi" width="24" height="24"><use xlink:href="#cart"></use></svg>
            </a></li>
            </ul>
        </div>
        </div>
    </div>
    </nav>
    @yield('content')
</body>
</html>