@extends('layouts.app')

@section('content')

<div class="container ">
  <div class="row justify-content-center">
      <div class="col-md-5">
    <div class="card">
        <div class="card text-center">
            <div class="card-header">
                <h3 class="card-title" class='text-center'>Moje konto</h3>
            </div>
        </div>
    </div>
        <div class="card">
            <div class="card-header">
            <h5 class="pb-3 card-title" style="margin-left: 10%">Moje dane</h5>
            <p class="card-text" style="margin-left: 10%">Nick:
                                @foreach ($user_name as $nick)
                                {{ $nick->name}}
                                @endforeach
                                <br><br>
                                Email:
                                @foreach ($user_email as $mail)
                                {{ $mail->email}}
                                @endforeach
            </p>
            <br>
            <form action="{{ route('user_account.update_nick') }}" method="POST" role="form">
                {{ csrf_field() }}
                    <div class="autosized">
                        <div class="form-group">

                            <input style="width: 80%; margin-left: auto; margin-right: auto;" type="text" class="form-control" name="name" required="required" placeholder="Zmień swój nick"/>
                        </div>
                    </div>
                    <input class="btn btn-primary text-light d-flex justify-content-center" style="width: 80%; margin-left: auto; margin-right: auto;" type="submit" value="Zmień" />
                </form>
                <br>
                <form action="{{ route('user_account.update_email') }}" method="POST" role="form">
                    {{ csrf_field() }}
                        <div class="autosized">
                            <div class="form-group">
                                <input style="width: 80%; margin-left: auto; margin-right: auto;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required="required" placeholder="Zmień swój e-mail"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <input style="width: 80%; margin-left: auto; margin-right: auto;" type="submit" value="Zmień email" class="btn btn-primary text-light d-flex justify-content-center"/>
                    </form>
                    <br>
                    <a class="btn btn-primary text-light d-flex justify-content-center" style="width: 80%; margin-left: auto; margin-right: auto;" style="width: 50%" href="{{ route('user_account.destroy_user') }}" role="button">Usuń konto</a>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection
