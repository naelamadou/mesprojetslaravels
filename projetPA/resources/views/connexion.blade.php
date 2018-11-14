@extends('layout')
@section('contenu')
<div class="body">
    <form id="sign_in" method="POST" action="/connexion">
        <div class="msg"><h1>Authentification</h1></div>
        <div class="input-group is-primary">
            <span class="input-group-addon">
                <i class="fa fa-user fa-3x"></i>
            </span>
            <div class="input is-primary">
                <input type="text" class="form-control is-primary" name="email" placeholder="veiller saisir votre email" required autofocus>
            </div>
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i class="fa fa-lock fa-3x"></i>
            </span>
            <div class="input is-primar">
                <input type="password" class="form-control" name="mot_de_passe" placeholder="veiller saisir votre mot de passe" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
              <input class="button is-info" type="submit" name="connexion" value="se connecter">
            </div>                   
        </div>
    </form>
</div>
@endsection