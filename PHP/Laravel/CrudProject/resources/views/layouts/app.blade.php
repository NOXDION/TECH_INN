<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="/rol" class="nav-link">Roles</a></li>
        <li class="nav-item"><a href="/user" class="nav-link">Usuarios</a></li>
        <li class="nav-item"><a href="/empleado" class="nav-link">Empleados</a></li>
        <li class="nav-item"><a href="/cliente" class="nav-link">Clientes</a></li>
      </ul>
    </header>
    @yield('content')
</body>
</html>