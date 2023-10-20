<h1>Member List</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Location</td>
        <td>Description</td>
        <td>Operation</td>
    </tr>

    @foreach($members as $member)
    <tr>
        <td> {{$member['id']}} </td>
        <td>{{$member['company']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['location']}}</td>
        <td>{{$member['description']}}</td>
        <td><a href={{"delete/".$member['id']}}>Delete</a></td>
        <td><a href={{"edit/".$member['id']}}>Edit</a></td>

    </tr>
    @endforeach
</table>

    <a href="add">Add a member</a>

<style>
    .w-5{
        display: none;
    }
    body {
        background-color: #fbad00;
        align-items: center;
        align-content: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
    }

    table {
        text-align: center;
        color: white;
    }
</style>