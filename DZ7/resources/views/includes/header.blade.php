<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav collapse navbar-collapse" id="navbarNav">
        <a class="nav-item nav-link " >
            {{__('Главная')}}
        </a>
        <a class="nav-item nav-link">
            {{__('UserForm')}}
        </a>
        <a class="nav-item nav-link">
            {{__('Contacts')}}
        </a>
        <a class="nav-item nav-link">
            {{__('Add Book')}}
        </a>
        <a class="nav-item nav-link">
            {{__('Users')}}
        </a>
    </div>
</nav>