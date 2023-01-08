@extends('layouts.app')

@section('content')
 <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10 col-lg-6 ">
              <div class="card border border-warning">
                  <div class="card-header text-center"><h2>Logowanie</h2></div>
                  <div class="card-body">
                    @if (\Session::has('not verified'))
                        <div class="alert alert-warning">
                        <ul>
                            <li>{!! \Session::get('not verified') !!}</li>
                        </ul>
                        </div>
                    @endif
                    @if (\Session::has('verify'))
                    <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('verify') !!}</li>
                    </ul>
                    </div>
                    @endif
                    @if (\Session::has('passchange'))
                    <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('passchange') !!}</li>
                    </ul>
                    </div>
                    @endif
                    @if (\Session::has('not_login'))
                    <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('not_login') !!}</li>
                    </ul>
                    </div>
                    @endif
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="container">
                             <div class="text-center">
				<h3> Zaloguj sie przez portal</h3> 
                          </div>                           <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="col-sm">
                                <a href="{{ route('login.google') }}" class="btn btn-danger btn-block"><i class="fa-brands fa-google"></i> Zaloguj się przez Google</a>
                                </div>
                                <div class="col-sm">
                                <a href="{{ route('login.facebook') }}" class="btn btn-primary btn-block"><i class="fa-brands fa-facebook"></i>  Zaloguj się przez Facebook</a>
                                </div>
                            </div>
                          </div>
                          </div>
                          <br>
			  <div class="text-center mt-3">
				<h3> LUB poprzez email:</h3> 
                          </div>                             
                          <div class="form-group row mt-4 justify-content-center">
                              <div class="col-md-8 mb-4" > 
                              <label for="exampleInputEmail1">Adre e-mail:</label>
                              <input type="text" id="email_adress" class="form-control" name="email" required autofocus placeholder="E-mail"> 
                                        @if ($errors->has('email'))
                                            <span class ="text-danger">{{ $errors->first('email') }}</span>
                                        @endif 
                                    </div> 
                                </div> 
     
                           <div class="form-group row mb-4 justify-content-center"> 
                                        <div class= "col-md-8">
                                        <label for="exampleInputEmail1">Hasło:</label>
                                            <input type="password" id="password" class="form-control" name="password" required placeholder="Hasło"> 
                                                @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                            </div>
                          </div>
  
                          <div class="form-group row justify-content-center">
                              <div class="col-md-8 mb-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Zapamiętaj mnie.
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row">
                            <div class="text-center">
                                <div class="checkbox">
                                    <label>
                                        <a href="{{ route('forget.password.get') }}" class="link-warning">Zapomniałeś hasła?</a>
                                    </label>
                                </div>
                            </div>
                        </div>  
                          <div class="d-grid gap-2 col-6 mx-auto">
                              <button type="submit" class="btn btn-warning">
                                  Zaloguj
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
 

@endsection
