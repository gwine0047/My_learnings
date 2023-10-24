<div>
    <x-app-layout>
        <h1>Admin Dashboard</h1>
    </x-app-layout> 
  </div>
  
  <div align ="center" style="padding-top:50px" >

<form action="{{url('update_user')}}" method="POST" enctype="multipart/form-data">

    @csrf

  <div class="container-fluid" style="padding :15px">
    <label for="">User Email</label> <br>
    <input type="text" name="email" placeholder="example@gmail.com" style="color:black">
  </div>

  <div class="container-fluid" style="padding :15px">
    <label for="">Deposit Wallet Balance</label> <br>
    <input type="number" name="deposit" placeholder="$0.00" style="color:black">
  </div>

  <div class="container-fluid" style="padding :15px">
    <label for="">Interest Wallet Balance</label><br>
    <input type="number" name="interest" placeholder="$0.00" style="color:black">
  </div>

  <div class="container-fluid" style="padding :15px">
    <label for="">Total invest</label> <br>
    <input type="number" name="total_I" placeholder="$0.00" style="color:black">
  </div>

  <div class="container-fluid" style="padding :15px">
    <label for="">Total Deposit</label><br>
    <input type="number" name="total_D" placeholder="$0.00" style="color:black">
  </div>$

  <div class="container-fluid" style="padding :15px">
    <label for="">Total Withdrawal</label> <br>
    <input type="number" name="total_W" placeholder="$0.00" style="color:black">
  </div>

  <div class="btn" style="padding :15px">
    <label for="">Referral Earnings</label> <br>
    <input type="number" name="referral" placeholder="$0.00" style="color:black">
  </div>

  <div class="container-fluid" style="padding :15px">
    <input type="submit" class="btn btn-success" style="color:black">
  </div>
</form>


</div>
