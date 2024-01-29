<script type="text/javascript">
  if(confirm("Are you sure you want to cancel booking?"))
  {
     document.write("<?php
     $connection = mysqli_connect("localhost","root","","airlines");

     $query = "delete from booking where flight_no = '$_POST[flight_no]' ";
       
     $query_run = mysqli_query($connection,$query);
     ?>");
  alert("Tickect Cancel successfully!!!");
  window.location.href = "home.php";
  }
  else
  {
     window.location.href = "home.php";
  }  
</script>
