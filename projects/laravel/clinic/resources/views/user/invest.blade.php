<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Invest</title>

  <link rel="stylesheet" href="../button/assets/css/maicons.css">
  <link rel="stylesheet" href="../button/assets/css/bootstrap.css">
  <link rel="stylesheet" href="../button/assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../button/assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../button/assets/css/theme.css">

  <link rel="stylesheet" href="crypto-master/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="crypto-master/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="crypto-master/css/themify-icons.css"/>
	<link rel="stylesheet" href="crypto-master/css/owl.carousel.css"/>
	<link rel="stylesheet" href="crypto-master/css/style.css"/>
</head>
    <p>Welcome, {{ $users->email }} </p>
    <p> <a href="/home">home</a> </p>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
    @endif
    <div class="col-lg-5 col-md-8 offset-lg-0 offset-md-2 newsletter-form">
    </div>
<body class="gradient-bg">
    <div class="mine">
        <div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Deposit Wallet Balance <br> ${{$users['deposit']}}
            </button>
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Interest Wallet Balance <br> ${{$users['interest']}}
            </button>
        </div>  
        <div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Total Investment <br> ${{$users['total_I']}}
            </button>
        </div> 
        <div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Total Deposit <br> ${{$users['total_D']}}
            </button>
        </div> 
        <div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Total Withdrawal <br> ${{$users['total_W']}}
            </button>
        </div> 
        <div>
            <button type="submit" class="btn btn-primary mt-3 ">Referral Earnings <br> ${{$users['referral']}}
            </button>
        </div>
    </div>
    <div class="mine">
        <div style="padding-top: 20px; padding-bottom: 20px;">
            <form action="invest" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="number" name="amount" placeholder="Enter amount"><br><br>

                <input type="file" name="file"><br><br>

                <button class="site-btn" style="background-color: transparent">Upload file</button><br><br>
            </form>
            <a href="" class="site-btn">Invest now</a>
        </div>
    </div>
</body>
</html>