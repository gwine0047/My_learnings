<h1>Add Member</h1>

<!-- action will submit the data to addedMember page using POST -->
<!-- @if(session('user'))
<h3 style="color: #fbad00"> {{session('user')}} has been added.</h3>
@endif -->

<form action="add" method="POST">
    
    @csrf
    <input type="text" name="company" placeholder="Enter company"> <br>
    <br>
    <input type="text" name="email" placeholder="Enter email"> <br>
    <br>
    <input type="text" name="location" placeholder="Enter location"> <br> <br>
    <input type="text" name="title" placeholder="Enter title"> <br>
    <br>
    <input type="text" name="description" placeholder="Enter description"> <br> <br>
<button type="submit">Add Member</button>
<a href="/list">View added Members</a>
</form>