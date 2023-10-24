<!DOCTYPE html>
<html>

@include('user.style')
<body>

  <!-- 'anotherView.blade.php' content -->
@if(isset($users))
    <!-- Use the $users data here -->
    <p>Welcome, {{ $users->name }}</p>
    <!-- Add more data as needed -->
@endif

    @include('user.header')

  <!-- how section -->
   
  <!-- end how section -->

  <!-- about section -->
  <!-- end about section -->

  <!-- app section -->

  <!-- end app section -->


  <!-- auto section -->

  <!-- end auto section -->

  <!-- client section -->
 
  <!-- end client section -->

  <!-- info section -->

  <!-- end info_section -->

  <!-- footer section -->
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
</body>

</html>