<head>
    <link rel="stylesheet" href="{{ URL:: asset('css/user_test.css')}}">
</head>
<table class="rwd-table" style="width:100%">
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>
@foreach($users as $user)
<tr>
<td data-th="Name">{{$user->name}}</td>
<td data-th="Email">{{$user->email}}</td>
<td data-th="Phone">{{$user->phone}}</td>
</tr>
@endforeach
</table>