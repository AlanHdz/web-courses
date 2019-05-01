<li class="nav-item dropdown">
        <a 
        href=""
        class="nav-link dropdown-toggle"
        id="navbarDropdownMenuCourses"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false" 
        >
        {{ __('Cursos') }}
        </a>
    
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuCourses">
            <a class="dropdown-item" href="#">
                {{ __('Cursos desarrollados por mi') }}
            </a>
            <a class="dropdown-item" href="#">
                {{ __('Crear curso') }}
            </a>
        </div>
    </li>

@include('partials.navigations.profile')
@include('partials.navigations.logged')

    