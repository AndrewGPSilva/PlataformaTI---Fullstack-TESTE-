@extends('master')

@section('titulo', 'Aulas de Laravel')
@section('content')
    <div>
        <HomeAulasLaravel :aulas="{{ $aulas }}" />
    </div>
@endsection
