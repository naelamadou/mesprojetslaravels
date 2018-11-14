@extends('layout')
@section('contenu')
<div class="section">
    <h1 class="title is-1">Bienvenue!</h1>
</div>
<ul>
    @foreach($utilisateurs as $uti)
    <li>
    <a href="/{{$uti->email}}">{{$uti->email}}</a>
    </li>
    @endforeach
</ul>
@endsection()