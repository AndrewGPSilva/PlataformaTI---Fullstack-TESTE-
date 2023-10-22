@extends('master')

@section('content')
    <div>
        <HomeAulasVue :aulas="{{ $aulas }}" />
    </div>
@endsection
