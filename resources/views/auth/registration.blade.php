@extends('layouts.app')

@section('content')
<main class="login-form">

<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10 col-lg-6 ">
              <div class="card border border-warning">
                  <div class="card-header text-center mb-2"><h2>Rejestracja</h2></div>
                  <div class="card-body">
                    @if (\Session::has('message'))
                    <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('message') !!}</li>
                    </ul>
                    </div>
                    @endif
                    <div class="text-center mt-3">
                    <h3> Zarejestruj sie przez portal:</h3> 
                           <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="col-sm">
                                <a href="{{ route('login.google') }}" class="btn btn-danger btn-block"><i class="fa-brands fa-google"></i> Zarejestruj się przez Google</a>
                                </div>
                                <div class="col-sm">
                                <a href="{{ route('login.facebook') }}" class="btn btn-primary btn-block"><i class="fa-brands fa-facebook"></i>  Zarejestruj się przez Facebook</a>
                                </div>
                            </div>
                          </div>
                          <br>
			  <div class="text-center mt-3">
				<h3> LUB: </h3> 
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf





                          <div class="form-group row justify-content-center mb-4">
                              <div class="col-md-8 ">
                                  <label class="mb-1" for="name" >Nick:</label>
                                  <input type="text" id="name" class="form-control" name="name" required autofocus  placeholder="Nick / Login">
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                         <div class="form-group row justify-content-center mb-4">
                              <div class="col-md-8">
                                  <label  class="mb-1" for="email_address" >E-Mail:</label>
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus placeholder="Adres e-mail">
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                         <div class="form-group row justify-content-center mb-4">
                              <div class="col-md-8">
                                  <label  class="mb-1" for="password">Hasło:</label>
                                  <input type="password" id="password" class="form-control" name="password" required placeholder="Hasło">
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row justify-content-center mb-4">
                              <div class="col-md-8">
                                <label  class="mb-1" for="password-confirm">Powtórz hasło:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Powtórz hasło">
                            </div>
                        </div>
							<div class="form-group row justify-content-center mb-0">
                        <div class="col-md-8">
                            <p style="text-align: center">Rejestrując się akceptujesz naszą <a href="{{ route('privacy_policy') }}">Politykę Prywatności<a> oraz <a href="{{ route('terms_of_service') }}">Warunki korzystania z witryny<a></p>
                        </div>
                        </div>
  
                          <div class="d-grid gap-2 col-6 mx-auto mb-4">
                              <button type="submit" class="btn btn-warning">
                                  Zarejestruj!
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
