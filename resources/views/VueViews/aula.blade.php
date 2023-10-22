@extends('master')
@section('titulo', $aula->titulo)

@section('content')

<AulaVue :aula="{{ $aula }}" />

@endsection
