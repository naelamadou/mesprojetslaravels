@extends('layout')
@section('contenu')
<form action="/inscription" method="post" class="section">
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
		<!-- name -->
		<div class="field">
			<div class="control">
				<input class="input is-info" type="name" name="name" placeholder="veiller saisir votre nom">
			</div>
			@if($errors->has('name'))
		<p class="help is-danger">{{ $errors->first('name')}}</p>
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
		<!-- cpassword_confirmation -->
		<div class="field">
			<div class="control">
				<input class="input is-info" type="password" name="password_confirmation" placeholder="confirmer mot de passe">
			</div>
			@if($errors->has('password_confirmation'))
		<p class="help is-danger">{{ $errors->first('password_confirmation')}}</p>
		@endif
		</div>
		<div class="field">
			<div class="control">
				<input class="button is-primary" type="submit" name="inscription" value="s'inscrire">
			</div>	
		</div>
</form>
@endsection