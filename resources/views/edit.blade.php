@extends('parent')

@section('main')
<div align="right">
	<a href="{{ route('client.index') }}" class="btn btn-secondary">Voltar</a>
</div>
<br />

<form method="post" action="{{ route('client.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="first_name">Primeiro Nome</label>
			<input type="text" class="form-control" name="first_name" value="{{ $data->first_name }}" placeholder="Primeiro Nome">
		</div>
		<div class="form-group col-md-6">
			<label for="last_name">Segundo Nome</label>
			<input type="text" class="form-control" name="last_name" value="{{ $data->last_name }}" placeholder="Segundo Nome">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="email">E-mail</label>
			<input type="text" class="form-control" name="email" value="{{ $data->email }}" placeholder="E-mail">
		</div>
		<div class="form-group col-md-6">
			<label for="phone">Telefone</label>
			<input type="text" class="form-control" name="phone" value="{{ $data->phone }}" placeholder="(99)99999999">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="image">Selecionar Imagem</label>
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
		<div class="form-group col-md-6">
			<div align="right">
				<input type="submit" name="add" class="btn btn-primary" value="Salvar" />
			</div>
		</div>
	</div>
</form>

@endsection
