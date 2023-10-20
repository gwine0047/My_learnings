<h1>User Login1</h1>

<form action="user" method="POST">
    
    @csrf
    <input type="text" name="user" placeholder="Enter name"> <br>
    <br>
    <input type="password" name="password" placeholder="Enter password"> <br>
    <br>
<button type="submit">Login</button>
</form>