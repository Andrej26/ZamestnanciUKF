<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #288bd7">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Domov</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

   <div class="collapse navbar-collapse nav02" id="navbarTogglerDemo02">
       <!--<ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Tabulka01</a>
            </li>

            <li class="nav-item">
                <a class="nav02" href="#">Tabulka02</a>
            </li>

            <li class="nav-item">
                <a class="nav03" href="#">Tabulka03</a>
            </li>

            <li class="nav-item">
                <a class="nav04" href="#">Tabulka04</a>
            </li>

            <li class="nav-item">
                <a class="nav05" href="#">Tabulka05</a>
            </li>
        </ul>  -->

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                <!--  <span class="fa fa-search" aria-hidden="true"></span>   -->
                Search
            </button>
        </form>
        <div style="float: right">
            <a class="btn btn-success" style="display: inline-block; margin-left: 10px" href="{{ route('ukf') }}">Späť na hlavnú stránku</a>

            <a class="btn btn-dark" style="display: inline-block" href="{{ route('zames.logout') }}">Odhasit</a>
        </div>

    </div>
</nav>