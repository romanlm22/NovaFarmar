<nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-4">

    <div class="container-fluid">

        <!-- LOGO -->
        <a class="navbar-brand" href="/">MiTienda</a>

        <!-- BOTÓN HAMBURGUESA -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- CONTENIDO COLAPSABLE -->
        <div class="collapse navbar-collapse" id="navbarContenido">

            <!-- BUSCADOR -->
            <form class="d-flex mx-auto my-3 my-lg-0 w-100 w-lg-50">
                <input class="form-control" type="search" placeholder="Buscar productos...">
            </form>

            <!-- MENÚ -->
            <ul class="navbar-nav ms-auto align-items-lg-center gap-2">

                <!-- CATEGORÍAS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">
                        Categorías
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/categoria1">Cuidado Personal</a></li>
                        <li><a class="dropdown-item" href="/categoria2">Belleza</a></li>
                        <li><a class="dropdown-item" href="/categoria3">Medicamentos</a></li>
                    </ul>
                </li>

                <!-- BOTONES -->
                <li class="nav-item">
                    <a href="/registros" class="btn btn-light w-100">Ingresar</a>
                </li>

                <li class="nav-item">
                    <a href="/acercaNosotros" class="btn btn-light w-100">Sobre Nosotros</a>
                </li>

                <li class="nav-item">
                    <a href="/contacto" class="btn btn-light w-100">Contacto</a>
                </li>

                <li class="nav-item">
                    <a href="/carrito" class="btn btn-light position-relative w-100">
                        <i class="bi bi-cart"></i>

                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            0
                        </span>
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>