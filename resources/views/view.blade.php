@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('client.index') }}" class="btn btn-secondary">Voltar</a>
	</div>
	<br />
	<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
	<h3>Nome: {{ $data->first_name }} {{ $data->last_name }} </h3>
	<h3>E-mail: {{ $data->email }} </h3>
	<h3>Telefone: {{ $data->phone }} </h3>
</div>
@endsection
