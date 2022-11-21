@extends('layouts.app')

@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Logowanie</div>
                  <div class="card-body">
                    @if (\Session::has('not verified'))
                        <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('not verified') !!}</li>
                        </ul>
                        </div>
                    @endif
                    @if (\Session::has('verify'))
                    <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('verify') !!}</li>
                    </ul>
                    </div>
                    @endif
                    @if (\Session::has('passchange'))
                    <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('passchange') !!}</li>
                    </ul>
                    </div>
                    @endif
                    @if (\Session::has('not_login'))
                    <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('not_login') !!}</li>
                    </ul>
                    </div>
                    @endif
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <a href="{{ route(login.google) }}" class="btn btn-danger btn-block">Zaloguj się przez Google</a>
                                <a href="{{ route(login.facebook) }}" class="btn btn-primary btn-block">Zaloguj się przez Facebook</a>
                                <a href="{{ route(login.github) }}" class="btn btn-dark btn-block">Zaloguj się przez Github</a>
                            </div>
                          </div>
                          <p style="text-align: center"> LUB</p>   
                                                     --}}   
                            <div class = "form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                              <div class="col-md-6" > 
                                    <input type="text" id="email_adress" class="form-control" name="email" required autofocus> 
                                        @if ($errors->has('email'))
                                            <span class ="text-danger">{{ $errors->first('email') }}</span>
                                        @endif 
                                    </div> 
                                </div> 
     
                                <div class="form-group row"> 
                                        <label for="password" class="col-md-4 col-form-label text-md-right" >Hasło</label> 
                                        <div class= "col-md-6" > 
                                            <input type="password" id="password" class="form-control" name="password" required> 
                                                @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Pamiętaj mnie
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <a href="{{ route('forget.password.get') }}">Zapomniałeś hasła?</a>
                                    </label>
                                </div>
                            </div>
                        </div>  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
