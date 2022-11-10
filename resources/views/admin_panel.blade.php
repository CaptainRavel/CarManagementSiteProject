@extends('layouts.app')

@section('content')

                <div class="card">
                    <div class="card text-center">
                        <div class="card-header ">
                            <h3 class="card-title" class='text-center'>Lista użytkowników</h3>
                            <div class="table-responsive">
                                <table class="table text-light">
                                    <thead>
                                        <tr>
                                            <th>Nick</th>
                                            <th>E-mail</th>
                                            <th>Typ</th>
                                            <th>Akcja</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($user_list as $user)
                                            <tr>
                                                <th scope="row">{{ $user->name}}</th>
                                                <td>{{ $user->email}}</td>
                                                <td>{{ $user->role}}</td>
                                                <td> 
                                                    <a href="{{ url('user_management/'.$user->id) }}" class="btn btn-success">Edycja</a>
                                                </td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection
