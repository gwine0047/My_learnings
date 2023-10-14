@include('header')

<!-- <x-header $data="Users Component Header" /> -->
<div class="user">

    <h1>User login</h1>

    <!-- @if($errors->any())
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
    @endif -->

    <form action="users" method="POST"> 
        @csrf
        <input type="text" name="username" placeholder="Enter user id" /> <br>
        <span style="color: red">@error('username'){{$message}}@enderror</span>
        <br>
        <input type="text" name="password" placeholder="Enter password" /> <br>
        <span style="color: red">@error('password'){{$message}}@enderror</span>
        <br>
        <button type="submit">Login</button>
    </form>

</div>
@csrf
<script>
    console.log(data);
    console.log("Hello from Javascript");
</script>



<style>
    .user {
        font-family:Figtree, sans-serif;
    }
</style>