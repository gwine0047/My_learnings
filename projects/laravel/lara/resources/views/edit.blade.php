<h1>Update Member</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="company" placeholder="Enter company" value="{{$data['company']}}"> <br>
    <br>
    <input type="text" name="email" placeholder="Enter email" value="{{$data['email']}}"> <br>
    <br>
    <input type="text" name="location" placeholder="Enter location" value="{{$data['location']}}"> <br> <br>
    <input type="text" name="title" placeholder="Enter title" value="{{$data['title']}}"> <br>
    <br>
    <input type="text" name="description" placeholder="Enter description" value="{{$data['description']}}"> <br> <br>
<button type="submit">Update Member</button>
<a href="/list">View added Members</a>
</form>