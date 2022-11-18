@extends('layouts.app')

@section('content')
<div class="container text-light">
    <div class="container px-2 px-lg-2">
        <div class="row gx-2 gx-lg-5 my-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card text-center">
                        <div class="card-header ">
                            <h3 class="card-title" class='text-center'>Wszyscy użytkownicy</h3>
                            <div class="table-responsive">
                    <table class="table text-light">
                        <thead>
                            <tr>
                                <th>
                                    Nick
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    Typ konta
                                </th>
                                <th>Akcja
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user_list as $user)
                                <tr>
                                    <th scope="row">{{ $user->name}}</th>
                                    <td>{{ $user->email}}</td>
                                    <td>
                                    @if ($user->role == 'user')
                                        Użytkownik darmowy
                                    @endif
                                    @if ($user->role == 'premium_user')
                                        Użytkownik premium
                                    @endif
                                    @if ($user->role == 'admin')
                                        Administrator
                                    @endif
                                    </td>
                                    <td> 
                                        <a href="{{ url('user_management/'.$user->id) }}" class="btn btn-xs btn-success btn-flat show_confirm">Edytuj</a>
                                        <a href="{{ url('user_management_delete_user/'.$user->id) }}" class="btn btn-xs btn-danger btn-flat show_confirm" onclick="return confirm('{{ __('Jesteś pewny, że chcesz usunąć użytkownika?') }}')">Usuń</a>
                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $user_list->appends(['users' => $user_list->currentPage()])->links() }}
                    <a href="{{ url('searchuser') }}" class="btn btn-xs btn-primary btn-flat show_confirm">Wyszukaj użytkowników</a>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>


@endsection


