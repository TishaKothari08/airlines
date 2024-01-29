<?php
$connection = mysqli_connect("localhost","root","","airlines");

$query = "update booking set date = '$_POST[date]', 
                 flight_from = '$_POST[flight_from]',
                 flight_to = '$_POST[flight_to]', 
                 passenger_name ='$_POST[name]',
                 age = '$_POST[age]', 
                 email= '$_POST[email]',
                 mobile_no = '$_POST[mobile]',
                 aadharcard_no = '$_POST[card]' 
                 where flight_no = '$_POST[flight_no]'";

$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
     alert("Booking Updated successfully!!!");
     window.location.href = "home.php";
</script>

