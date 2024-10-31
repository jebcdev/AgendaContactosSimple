@extends('adminlte::page')

@section('title')
    {{ config('app.name') }}
@stop

@section('content_header')
    <div class="row align-items-center">
        <div class="col-6 d-flex">
            <h1 class="me-auto">
                Agenda de Contactos
            </h1>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('contacts.create') }}" class="btn btn-sm btn-primary">
                Crear un Nuevo Contacto
            </a>
        </div>
    </div>
@stop

@section('content')
    <div class="d-flex flex-row flex-wrap justify-content-start gap-3">
        @foreach ($categories as $index => $category)
            <div class="card text-white p-3 m-2" style="width: 200px; background-color: {{ ['#FF6F61', '#6B5B95', '#88B04B', '#F7CAC9', '#92A8D1'][$index % 5] }};">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text">Contactos: {{ $contacts->where('category_id', $category->id)->count() }}</p>
            </div>
        @endforeach
    </div>
@stop


@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
