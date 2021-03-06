@extends('main_layout')

@section('title')
Adicionar série
@endsection

@section('css')
<link rel="stylesheet" href="{{ URL::asset('static/css/create.css') }}" />
@endsection

@section('header')
<span>Adicionar séries</span>
@endsection

@section('main')
@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <ul>
        <li>{{$error}}</li>
    </ul>
    @endforeach
</div>
@endif
<section style="margin-top: 120px;" class="box">
    <form method="POST" action="/series" enctype="multipart/form-data">
        @csrf
        <div class="grid">
            <div>
                <label for="name">Nome da série</label><br>
                <input name="serie_name" id="name" type="text">
            </div>
            <div>
                <label for="seasons_qt">Quantidade de temporadas</label><br>
                <input name="seasons_qt" id="seasons_qt" type="number">
            </div>
            <div>
                <label for="total_episodes_qt">Eps. por temp.</label><br>
                <input name="total_episodes_qt" id="total_episodes_qt" type="number">
            </div>
            <div>
                <label for="serie_status">Status</label><br>
                <select name="serie_status" id="serie_status">
                    <option value="A">A</option>
                    <option value="P">P</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
        </div>
        <label for="serie_image">Imagem</label>
        <input name="serie_image" id="serie_image" type="file">
        <br><br>
        <button type="submit">Adicionar</button>
    </form>
</section>
@endsection