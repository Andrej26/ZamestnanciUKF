<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a454b; border-radius: 0px 0px 6px 6px">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Domov</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

   <div class="collapse navbar-collapse nav02" id="navbarTogglerDemo02">

       <div style=' margin-left: auto;'>
            <form class="form-inline my-2 my-lg-0">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">
                   <!--  <span class="fa fa-search" aria-hidden="true"></span>   -->
                  Search
                 </button>
            </form>
       </div>

        <div style='float: right; margin-left: auto;'>
            <a class="btn btn-dark" style="display: inline-block" href="{{ route('zames.logout') }}">Odhasit</a>
        </div>

    </div>
</nav>