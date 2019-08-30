<?php
  include("header.php");
 ?>

 <body>

<!-- fibonacci series -->
   <div class="container">
     <h2> Find the fibonacci series?</h2>
     <form method="POST" action="solution.php">
       <label>Enter value:</label>
      <input type="text" name="fibo">
      <button type="submit" name="inp">Submit</button>
    </form>


<!-- leap year -->
    <h2> Find year is a leap year or not?..</h2>
    <form method="POST" action="solution.php">
      <label>Enter value:</label>
     <input type="text" name="y">
     <button type="submit" name="inpt">Submit</button>
   </form>
 </div>

 <?php
  include("footer.php");
  ?>
