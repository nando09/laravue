@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">No que esta pensando agora?</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif

					<form>
						<div class="form-group">
							<label for="thought">Estou pensando em:</label>
							<input type="text" class="form-control" name="thought">
						</div>
						<button type="submit" class="btn btn-primary">Enviar pensamento</button>
					</form>
				</div>
			</div>

			<hr>

			<div class="card">
				<div class="card-header">Publicado em 17/07/2019</div>

				<div class="card-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>

				<div class="card-footer">
					<button class="btn btn-default">Editar</button>
					<button class="btn btn-danger">Excluir</button>
				</div>
			</div>

			<thought-component></thought-component>

		</div>
	</div>
</div>
@endsection
