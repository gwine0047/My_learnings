<section class="container-fluid footer_section">
    @include('style')
    <p>Logout page</p>
    <x-app-layout>
<!-- 'anotherView.blade.php' content -->
@php
  $users = session('users');
@endphp
@if(isset($users))
    <!-- Use the $users data here -->
    <p>User Name: {{ $users->name }}</p>
    <p>User Email: {{ $users->email }}</p>
    <!-- Add more data as needed -->
@endif

    </x-app-layout>

    <p>
      &copy; 2019 All Rights Reserved By
      <a href="/home">TeslaWealthHub</a>
    </p>
  </section>