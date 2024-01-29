<?php
$connection = mysqli_connect("localhost","root","","airlines");

$query = "insert into booking values ('$_POST[date]','$_POST[flight_from]','$_POST[flight_to]','$_POST[flight_no]','$_POST[name]','$_POST[age]','$_POST[email]','$_POST[mobile_no]','$_POST[aadharcard_no]') ";
       
$query_run = mysqli_query($connection,$query);

?>

<script type="text/javascript">
     alert("Tickect Booked successfully!!!");
     window.location.href = "home.php";
</script>