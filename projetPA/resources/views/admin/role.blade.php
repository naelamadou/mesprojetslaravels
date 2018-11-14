@extends('layout')
@section('contenu')
<form action="/role" method="post" class="section">
	{{csrf_field()}}
	<!-- role -->
		<div class="field">
			<div class="control">
				<input class="input is-primary" type="text" name="role" placeholder="veiller saisir un role">
			</div>
			@if($errors->has('role'))
				<p class="help is-danger">{{ $errors->first('role')}}</p>
			@endif
		</div>
        <!-- Bouton Ajouter  role -->
		<div class="field">
			<div class="control">
				<input class="button is-primary" type="submit" value="Ajouter">
			</div>	
		</div>
</form>
@endsection