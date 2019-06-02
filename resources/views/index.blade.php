@extends('parent')

@section('main')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Imagem</th>
  <th width="35%">Nome</th>
  <th width="35%">Email</th>
  <th width="35%">Telefone</th>
  <th width="30%">Ações</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->name }}</td>
   <td>{{ $row->email }}</td>
   <td>{{ $row->phone }}</td>
   <td>

   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection
