<html>
<body>

<table border="1">
	<tr>
		<td>No.</td>
		<td>Username</td>
		<td>Aksi</td>
	</tr>
	@php $no=1; @endphp
	@if($data->count() > 0)
		@foreach($data as $d)
	<tr>
		<td>{{ $no++ }}</td>
		<td>{{ $d->username }}</td>
		<td><a href="{{ url('user/'.$d->id) }}">Detail</a> | <a href="{{url('user/'. $d->id. '/edit') }}">Edit</a> |
			<form action="{{route('user.destroy', $d->id)}}" method="POST">
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
				<button>Hapus</button>

			</form>
				<!--  <a href="">Hapus</a> -->
			</td>
	</tr>
		@endforeach
	@else
	<tr colspan="4"><td>data tidak ada</td><tr>
	@endif
</table>
</body>
</html>
