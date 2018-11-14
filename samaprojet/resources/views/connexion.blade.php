@extends('layout')
@section('contenu')
<form action="/connexion" method="post" class="section">
	{{csrf_field()}}
	<!-- email -->
		<div class="field">
			<div class="control">
				<input class="input is-primary" type="email" name="email" placeholder="veiller saisir votre email" value="{{old('email')}}">
			</div>
			@if($errors->has('email'))
		<p class="help is-danger">{{ $errors->first('email')}}</p>
		@endif
		</div>
	
		<!-- password -->
		<div class="field">
			<div class="control">
				<input class="input is-success" type="password" name="password" placeholder="veiller votre password ">
			</div>
			@if($errors->has('password'))
		<p class="help is-danger">{{ $errors->first('password')}}</p>
		@endif
		</div>
		<div class="field">
			<div class="control">
				<input class="button is-primary" type="submit" name="inscription" value="se connecter">
			</div>	
		</div>
</form>
@endsection