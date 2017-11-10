@extends('Layouts.master')

@section('content')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        </br>

                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ukf') }}"> Späť</a>
                        </div>

                         <h1>Admin Login</h1>

                    </div>



                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('admin.login')}}">
                            {{csrf_field()}}


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                    <input id="password" type="password" class="form-control" name="heslo" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group"style="margin-top: 1%">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Zapamätaj si ma
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-sign-in"></i>
                                        Prihlásenie
                                    </button>

                                    <a class="btn btn-link" href="{{route('admin.login')}}">
                                        Zabudli ste heslo? (nefunguje ešte)
                                    </a>
                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
@endsection
