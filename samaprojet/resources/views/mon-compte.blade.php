@extends('layout')
@section('contenu')
<div>
    <h1 class="title is-1"> Mon Compte</h1>
    <p>Vous etes bien connecte</p>
    <a href="/deconnexion" class="button">Deconnexion</a>
</div>
<form action="/modification-mot-de-passe" method="post" class="section">
	{{csrf_field()}}
		<!-- password -->
		<div class="field">
			<div class="control">
				<input class="input is-primary" type="password" name="password" placeholder="veiller votre password ">
			</div>
			@if($errors->has('password'))
		<p class="help is-danger">{{ $errors->first('password')}}</p>
		@endif
		</div>
		<!-- cpassword_confirmation -->
		<div class="field">
			<div class="control">
				<input class="input is-primary" type="password" name="password_confirmation" placeholder="confirmer mot de passe">
			</div>
			@if($errors->has('password_confirmation'))
		<p class="help is-danger">{{ $errors->first('password_confirmation')}}</p>
		@endif
		</div>
		<div class="field">
			<div class="control">
				<input class="button is-primary" type="submit" name="modification" value="modifier mot de passe">
			</div>	
		</div>
</form>
@endsection