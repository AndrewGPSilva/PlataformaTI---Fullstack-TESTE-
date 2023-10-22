@extends('master')

@section('titulo', 'Inicio - Plataforma de TI')
@section('content')
    <div class="flex">
        <div class="w-1/5">
            <Navbar />
        </div>
        <section class="bg-black text-white flex flex-col justify-center items-center p-5 w-4/5">
            <h1>Home Principal</h1>
        </section>
    </div>
@endsection
