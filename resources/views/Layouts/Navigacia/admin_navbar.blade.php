<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3a454b; border-radius: 0px 0px 6px 6px">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true" style="font-size: 160%"></i></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

   <div class="collapse navbar-collapse nav02" id="navbarTogglerDemo02">

        <div style='float: right; margin-left: auto;'>
            <a class="btn btn-dark" style="display: inline-block" href="{{ route('zames.logout') }}">Odhasit</a>
        </div>

    </div>
</nav>