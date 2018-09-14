

@include('partials.nav')</a>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" >Nombre y Apellido</label>

                            
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                                                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                         
                        </div>
                        <div class="form-group{{ $errors->has('celphone') ? ' has-error' : '' }}">
                            <label for="celphone" >Celular</label>

                            
                                <input id="celphone" type="text" class="form-control" name="celphone" value="{{ old('celphone') }}" required autofocus>

                                @if ($errors->has('celphone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celphone') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                         <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surnamemother" >Nombre y Apellido de su madre</label>

                            
                                <input id="surnamemother" type="text" class="form-control" name="surnamemother" value="{{ old('surnamemother') }}" required autofocus>

                                @if ($errors->has('surnamemother'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surnamemother') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surnamepather" >Nombre y Apellido de su padre</label>

                            
                                <input id="surnamepather" type="text" class="form-control" name="surnamepather" value="{{ old('surnamemother') }}" required autofocus>

                                @if ($errors->has('surnamemother'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surnamemother') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                          <div class="form-group{{ $errors->has('nacimiento') ? ' has-error' : '' }}">
                            <label for="nacimiento" >Fecha de Nacimiento</label>

                            
                                <input id="nacimiento" type="date" class="form-control" name="nacimiento" value="{{ old('nacimiento') }}" required autofocus>

                                @if ($errors->has('nacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nacimiento') }}</strong>
                                    </span>
                                @endif
                            
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Direccion de Email</label>

                           
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

