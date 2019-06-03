@extends('parent')

@section('main')

<div align="right">
	<a href="{{ route('client.create') }}" class="btn btn-success">Adicionar</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	{{ $message }}
</div>
@endif

<table class="table table-bordered table-striped">
	<tr>
		<th width="10%">Foto</th>
		<th width="15%">Primeiro Nome</th>
		<th width="15%">Segundo Nome</th>
		<th width="25%">E-mail</th>
		<th width="10%">Telefone</th>
		<th width="25%">Ações</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->phone }}</td>
			<td>

				<form action="{{ route('client.destroy', $row->id) }}" method="post">
					<a href="{{ route('client.show', $row->id) }}" class="btn btn-primary btn-sm">Visualizar</a>
					<a href="{{ route('client.edit', $row->id) }}" class="btn btn-warning btn-sm">Editar</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger btn-sm">Excluir</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection
