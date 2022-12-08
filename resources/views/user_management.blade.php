@extends('layouts.app')

@section('content')

<div class="container ">
  <div class="row justify-content-center">
      <div class="col-md-5">
    <div class="card">
        <div class="card text-center">
            <div class="card-header">
                <h3 class="card-title" class='text-center'>Dane konta</h3>
            </div>
        </div>
    </div>
        <div class="card">
            <div class="card-header">
            <h5 class="pb-3 card-title" style="margin-left: 10%">Dane użytownika</h5>
            <p class="card-text" style="margin-left: 10%">
                                Nick:
                                @foreach ($user_name as $nick)
                                {{ $nick->name}}
                                @endforeach
                                <br>
                                Email:
                                @foreach ($user_email as $mail)
                                {{ $mail->email}}
                                @endforeach
                                <br>
                                Status email:
                                @foreach ($user_verify_status as $email_status) 
                                @if ($email_status->is_email_verified == 0)
                                    E-mail niezweryfikowany
                                @endif
                                @if ($email_status->is_email_verified == 1)
                                    E-mail zweryfikowany poprawnie
                                @endif
                                @endforeach
                                <br>                                
                                Typ użytkownika:
                                @foreach ($user_role as $typ)                                
                                @if ($typ->role == 'user')
                                    DARMOWY
                                @endif
                                @if ($typ->role == 'premium_user')
                                    PREMIUM
                                @endif
                                @if ($typ->role == 'test_user')
                                    TESTOWY
                                @endif
                                @if ($typ->role == 'admin')
                                    ADMINISTRATOR
                                @endif
                                <br>
                                @if ($typ->role == 'premium_user')
                                <br>
                                Konto PREMIUM ważne do: {{ $premium_end }} {{ $days }} 
                                <a href="{{ route('add_premium.off.admin', $user_id) }}" class="btn btn-warning d-flex justify-content-center font-weight-bold" style="width: 89%;  margin-right: auto;">Wyłącz PREMIUM</a>
                                @endif
                                @if ($typ->role == 'user' || $typ->role == 'test_user')
                                <br>
                                Wybierz rodzaj konta PREMIUM do aktywacji:
                                <a href="{{ route('add_premium.month.admin', $user_id) }}" class="btn btn-warning d-flex justify-content-center font-weight-bold" style="width: 89%;  margin-right: auto;">PREMIUM na miesiąc!</a>
                                <a href="{{ route('add_premium.year.admin', $user_id) }}" class="btn btn-warning d-flex justify-content-center font-weight-bold" style="width: 89%;  margin-right: auto;">PREMIUM na rok!</a>                               
                                @endif
                                @if($typ->role != 'admin')
                                <br>
                                <br>
                                Liczba dodanych aut: {{ $user_cars_number }}  
                                <br>
                                Liczba zapisanych raportów: {{ $user_raports_number }}
                                <br>
                                <a href="{{ route('user_auto_management', $user_id) }}" class="btn btn-warning d-flex justify-content-center font-weight-bold" style="width: 89%;  margin-right: auto;">Zobacz</a>                                   
            </p>
            <br>
            <br>
            <form action="/user_management_edit_name/{{$user_id}}" method="POST" role="form">
                {{ csrf_field() }}
                    <div class="autosized">
                        <div class="form-group">

                            <input style="width: 80%; margin-left: auto; margin-right: auto;" type="text" class="form-control" name="name" required="required" placeholder="Zmień nick użytkownika"/>
                        </div>
                    </div>
                    <input class="btn btn-warning d-flex justify-content-center font-weight-bold" style="width: 80%; margin-left: auto; margin-right: auto;" type="submit" value="Zmień" />
                </form>
                <br>
                <form action="/user_management_edit_email/{{$user_id}}" method="POST" role="form">
                    {{ csrf_field() }}
                        <div class="autosized">
                            <div class="form-group">
                                <input style="width: 80%; margin-left: auto; margin-right: auto;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required="required" placeholder="Zmień e-mail użytkownika"/>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                        </div>
                        <input style="width: 80%; margin-left: auto; margin-right: auto;" type="submit" value="Zmień email" class="btn btn-warning d-flex justify-content-center font-weight-bold"/>
                    </form>
                    <br>
                    <form action="/user_management_edit_password/{{$user_id}}" method="POST" role="form">
                        {{ csrf_field() }}
                            <div class="autosized">
                                <div class="form-group">        
                                    <input style="width: 80%; margin-left: auto; margin-right: auto;" type="text" class="form-control" @error('password') is-invalid @enderror name="password" required="required" placeholder="Zmień hasło użytkownika"/>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                                </div>
                            </div>
                            <input class="btn btn-warning d-flex justify-content-center font-weight-bold" style="width: 80%; margin-left: auto; margin-right: auto;" type="submit" value="Zmień hasło" />
                        </form>
                    <br>
                    <a class="btn btn-danger text-light d-flex justify-content-center" style="width: 80%; margin-left: auto; margin-right: auto;" style="width: 50%" href="{{ route('user_account.destroy_user') }}" role="button" onclick="return confirm('{{ __('Jesteś pewny, że chcesz usunąć konto?') }}')">Usuń konto</a>   
                         </div>
        </div>
    </div>
  </div>
</div>
@endif
@endforeach 

@endsection
