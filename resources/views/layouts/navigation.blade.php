<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">VETERINARIO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item my-2">
                <a class="nav-link" href="">Dashboard <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item my-2">
                <a class="nav-link" href="{{route('alta.mascotas')}}">Alta mascotas</a>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link" href="">Pedir cita</a>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link" href="">Gestionar citas</a>
            </li>
            <li class="nav-item my-2">
                <form method="post" action="{{route('logout')}}">
                    @csrf
                    <a class="nav-link" href="#" onclick="event.preventDefault(); this.closest('form').submit() ">Cerrar sesion</a>
                </form>

            </li>

        </ul>
    </div>
</nav>
