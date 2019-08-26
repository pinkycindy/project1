<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div>Detail User</div>
<table>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>{{ $data->username }}</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td>{{ $data->email }}</td>
	</tr>
	<tr>
		<td>Created at</td>
		<td>:</td>
		<td>{{ $data->created_at}}</td>
	</tr>
</table>
</body>
</html>