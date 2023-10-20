<h1>Viewing DB using Query</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Company</td>
        <td>Email</td>
    </tr>

@foreach($data as $item)
<tr>
    <td> {{$item->id}} </td>
    <td>{{$item->company}}</td>
    <td>{{$item->email}}</td>
@endforeach
</table>
