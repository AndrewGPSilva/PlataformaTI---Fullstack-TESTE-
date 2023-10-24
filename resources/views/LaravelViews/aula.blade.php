@extends('master')
@section('titulo', $aula->titulo)

@section('content')

<AulaLaravel :aula="{{ $aula }}" />

@endsection
