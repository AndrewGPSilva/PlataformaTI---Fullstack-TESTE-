@extends('master')

@section('titulo', 'Aulas de VUE JS')
@section('content')
    <div>
        <HomeAulasVue :aulas="{{ $aulas }}" />
    </div>
@endsection
