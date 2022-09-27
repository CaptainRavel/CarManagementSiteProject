@extends('layouts.app')

@section('content')
<html>
<head>
    <title>Baza aut</title>
    @livewireStyles
</head>
<body>
                        @livewire('car-make-model-dependent')
    @livewireScripts
</body>
</html>
@endsection
