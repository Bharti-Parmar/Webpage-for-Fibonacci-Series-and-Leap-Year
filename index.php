<?php
    include('header.php');
 ?>

<!-- php exercise's -->

<body>
  <div class="container">
    <div class="jumbotron">
      <h1 class="text-center"> Bharti Parmar</h1>
    </div>
  <!-- row-1 -->
      <div class="row row-sm">
  <!-- col-1.1 -->
        <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6 order-1 order-md-1">
          <div class="card">
      <!-- fibonacci series -->
            <h4 class="card-title text-center mt-4 text-danger"> Find the fibonacci series?</h4>
            <form class="text-center card-body" method="POST" action="index.php">
              <label>Enter value:</label>
             <input type="text" name="fibo">
             <button type="submit" name="inp">Submit</button>
           </form>
          </div>
        </div>
  <!-- end of col-1.1 -->

  <!-- col-1.2 -->
        <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6 order-3 order-md-3 ">
          <div class="card">
      <!-- leap year -->
            <h4 class="card-title text-center mt-4 text-danger"> Find year is a leap year or not?..</h4>
            <form class="card-body text-center" method="POST" action="index.php">
              <label>Enter value:</label>
             <input type="text" name="y">
             <button type="submit" name="inpt">Submit</button>
           </form>
          </div>
        </div>
  <!-- end of col-1.2 -->
      </div>
  <!-- end of row-1 -->


  <!-- row-2 -->
      <div class="row row-sm" style="margin-top:40px;">
  <!-- col-2.1 -->
        <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6 order-2 order-md-2">
          <div class="card">
      <!-- to print solution of fibonacci series -->
            <h4 class="card-title text-center mt-4 text-danger"> Fibonacci series are:</h4>
            <div class="card-body text-center">
      <!-- fibonacci series php code -->
        <?php      if(isset($_POST['inp'])){
                 $a='0';
                 $b='1';
                 echo "fibbonacci series is $a <br>";
                 echo "fibbonacci series is $b <br>";
                for ($i = 0; $i < $_POST['fibo']; $i++) {
                  $c = $a + $b;
                    echo "fibbonacci series is $c <br>";
                  $a = $b;
                  $b = $c;
                }
              }
        ?>
            </div>
          </div>
        </div>
  <!-- end of col-2.1 -->

  <!-- col-2.2 -->
        <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6 order-4 order-md-4">
          <div class="card">
      <!-- to print solution of leap year -->
            <h4 class="card-title text-center mt-4 text-danger"> Solution For Leap year:</h4>
            <div class="card-body text-center">
        <!--  leap year -->
        <?php
              if(isset($_POST['inpt'])){
              $y = $_POST['y'];
                if($y%4 == 0 && $y%100 != 0 || $y%400 == 0){

                  echo $y. " " . "is a leap year.";
                }
                else{
                  echo $y. " " . "is not a leap year.";
                }
              }
          ?>
            </div>
          </div>
        </div>
  <!-- end of col-2.2 -->
      </div>
  <!-- end of row-2 -->
  </div>

<!-- js code for card hover -->
<script>

$( ".card" ).hover(
function() {
  $(this).addClass('shadow-lg').css('cursor', 'pointer');
}, function() {
  $(this).removeClass('shadow-lg');
}
);

</script>


<?php
    include('footer.php');
?>
