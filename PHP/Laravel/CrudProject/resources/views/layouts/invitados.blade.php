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
            <li class="nav-item"><a class="nav-link" href="#">Ingresar</a></li>
            <a href="https://www.sena.edu.co/es-co/Paginas/default.aspx"><img src="https://sena.edu.co/Style%20Library/alayout/images/logoSena.png" alt="" style="max-width: 50px;"></a>
            <li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="bi" width="24" height="24"><use xlink:href="#cart"></use></svg>
            </a></li>
            </ul>
        </div>
        </div>
    </div>
    </nav>

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">BIENVENIDO A<span style="color: green;"> HOTEL</span></h1>
                </div>
            </div>
        </section>

    <!-- SECCIÓN DE HABITACIONES -->
    
        <div class="album py-5 bg-light" style="background-color:blue;">
        <div class="container">
            <h2 class="text-center mb-4 fw-light">HABITACIONES</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/3933020/pexels-photo-3933020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Habitación simple</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                    </div>
                    <small class="text-muted">$1.0000.000</small>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/7214473/pexels-photo-7214473.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Habitación doble</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                    </div>
                    <small class="text-muted">$2.000.000</small>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/14613154/pexels-photo-14613154.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Habitación triple</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                    </div>
                    <small class="text-muted">$3.000.000</small>
                    </div>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/2030037/pexels-photo-2030037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Habitación familiar</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                    </div>
                    <small class="text-muted">$4.000.000</small>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/6394574/pexels-photo-6394574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Suite</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                    </div>
                    <small class="text-muted">$5.000.000</small>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/18801079/pexels-photo-18801079/free-photo-of-lujo-lampara-apartamento-sofa.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Suite VIP</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Reservar</button>
                    </div>
                    <small class="text-muted">$20.000.000</small>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- SECCION DE SERVICIOS -->

        <div class="album py-5 bg-light">
        <div class="container">
        <h2 class="text-center mb-4 fw-light">SERVICIOS</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/3212179/pexels-photo-3212179.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Spa</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Solicitar</button>
                    </div>
                    <small class="text-muted">Gratis con tu reserva</small>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/863988/pexels-photo-863988.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Piscina</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Solicitar</button>
                    </div>
                    <small class="text-muted">Gratis con tu reserva</small>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Gimnasio</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Solicitar</button>
                    </div>
                    <small class="text-muted">Gratis con tu reserva</small>
                    </div>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/110472/pexels-photo-110472.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Bar</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Solicitar</button>
                    </div>
                    <small class="text-muted"></small>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Restaurante</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Solicitar</button>
                    </div>
                    <small class="text-muted"></small>
                    </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                <img src="https://images.pexels.com/photos/6761094/pexels-photo-6761094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="bd-placeholder-img card-img-top" alt="" srcset="" width="300px" height="300" style="object-fit: cover;">

                <div class="card-body">
                    <h4>Turismo local</h4>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Solicitar</button>
                    </div>
                    <small class="text-muted"></small>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
  </main>
<footer class="bg-dark text-white text-center py-3">
    <div class="container">
        <p>&copy; Hotel Sena 2023. Todos los derechos reservados.</p>
        <ul class="list-inline">
            <li class="list-inline-item" style="text-decoration: none;"><a href="#">Política de privacidad</a></li>
            <li class="list-inline-item" style="text-decoration: none;"><a href="#">Términos y condiciones</a></li>
            <li class="list-inline-item" style="text-decoration: none;"><a href="#">Contacto</a></li>
        </ul>
    </div>
</footer>
</body>
</html>
