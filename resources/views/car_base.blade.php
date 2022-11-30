@extends('layouts.app')

@section('content')
<html>
<head>
    <title>Baza aut</title>
    @livewireStyles
</head>
<body>
@livewire('carbasedropdown')
    @livewireScripts
</body>
</html>
@endsection
