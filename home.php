<html>
<head>
<title>Main Page</title>
<style type="text/css">
body{
     background: linear-gradient(90deg, rgba(76,80,131,1) 0%, rgba(127,127,165,1) 35%, rgba(215,218,228,1) 100%);
}
#header{ height: 10%;
         width: 100%;
	 top: 2%;
	 color: black;
         position : fixed;
	}
#left-side{ height: 75%;
            width: 15%;
	    top: 10%;
            position : fixed;
	  }
#right-side{ 
             width: 80%;
	     top: 2%;
	     background: #42424c;
	     left: 17%;
	     top: 22%;
             color : #ffffff;
             position : absolute;
             min-height: 75%; 
	   }
#h1{
     top:10px;   
     position : relative; 
}
#table{
     color:#ffffff;
     font-size:20px;
     font-weight:600; 
}
</style>
<?php
$connection = mysqli_connect("localhost","root","","airlines");
?>
</head>
<body>
<div id="header">
<center><h1>Airlines Management System</h1></center>
</div>
<div id="left-side"><br><br><br><br>
<form method="post" action="">
<table>
<tr>
<td><input type="submit" name="flight_available" value="Flight Available"></td>
</tr>
<tr>
<td><input type="submit" name="flight_booking" value="Ticket Booking"></td>
</tr>
<tr>
<td><input type="submit" name="cancel_booking" value="Cancel Booking"></td>
</tr>
<tr>
<td><input type="submit" name="edit_booking" value="Edit Booking"></td>
</tr>
</table>
</form>
</div>
<div id="right-side">
<div id="demo">
<?php
     if (isset($_POST['flight_available']))
     {
        $query = "select * from available";
        $query_run = mysqli_query($connection,$query);
        
        echo "<h1 align='center' id='h1'>Flight Details</h1>"; 
        echo "<table border='1' align='center' width='80%' bgcolor='#d0d0d0'>";

        echo "<tr align='center' bgcolor = '#ffffff' >";
        echo "<td><font color='#42424c'><b>Flight No.</b></font></td>";
        echo "<td><font color='#42424c'><b>Airport</b></font</td>";
        echo "<td><font color='#42424c'><b>Airlines</b></font></td>";
        echo "<td><font color='#42424c'><b>From</b></font></td>";
        echo "<td><font color='#42424c'><b>To</b></font></td>";
        echo "<td><font color='#42424c'><b>Departure</b></font></td>";
        echo "<td><font color='#42424c'><b>Arrival</b></font></td>";
        echo "</tr>";
        while($row = mysqli_fetch_row($query_run))
        {
           
           echo "<tr align='center' bgcolor='#ffffff'>";
           echo "<td><font color='#42424c'>$row[0]</font></td>";
           echo "<td><font color='#42424c'>$row[1]</font></td>";
           echo "<td><font color='#42424c'>$row[2]</font></td>";
           echo "<td><font color='#42424c'>$row[3]</font></td>";
           echo "<td><font color='#42424c'>$row[4]</font></td>";
           echo "<td><font color='#42424c'>$row[5]</font></td>";
           echo "<td><font color='#42424c'>$row[6]</font></td>"; 
           echo "</tr>";
         
        } 
        echo "</table>"; 
     }       
?>
<?php
     
     if (isset($_POST['flight_booking']))
     {
?>
     <center>
     <h1>Tickect Booking  </h1> 
     </center>
     <form action="flight_booking.php" method="post">
     <table id="table">
     <tr>
     <td>Date: </td> 
     <td><input type="date" name="date" size="30" required></td>
     </tr>
     <tr>
     <td>From : </td> 
     <td>
	<select size="1" name="flight_from" required>
	<option value="Delhi">Delhi</option>
	<option value="Jaipur">Jaipur</option>
	<option value="Bangalore">Bangalore</option>
	<option value="Goa">Goa</option>
	<option value="Ahmedabad">Ahmedabad</option>
        <option value="Kolkata">Kolkata</option>
        <option value="Pune">Pune</option>
        <option value="Varanasi">Varanasi</option>
	</select>
     </td>
     </tr>   
     <tr>
     <td>To : </td> 
     <td>
        <select size="1" name="flight_to" required>
	<option value="Mumbai">Mumbai</option>
	<option value="Bangalore">Bangalore</option>
	<option value="Chennai">Chennai</option>
	<option value="Chandigarh">Chandigarh</option>
	<option value="Lucknow">Lucknow</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Bhopal">Bhopal</option>
        <option value="Kanpur">Kanpur</option>
	</select>
     </td>
     </tr>  
     <tr>
     <td>Flight No : </td> 
     <td>
        <select size="1" name="flight_no" required>
	<option value="AA1201">AA1201</option>
	<option value="EY3183">EY3183</option>
	<option value="GF6890">GF6890</option>
	<option value="AA4512">AA4512</option>
	<option value="AS8721">AS8721</option>
        <option value="GS4562">GS4562</option>
        <option value="TS0816">TS0816</option>
        <option value="NK1612">NK1612</option>
	</select>
     </td>
     </tr>  
     <tr>
     <td>Passenger Name : </td> 
     <td><input type="text" name="name" size="30" required></td>
     </tr> 
     <tr>
     <td>Age : </td> 
     <td><input type="text" name="age" size="30" required></td>
     </tr>  
     <tr>
     <td>Email : </td> 
     <td><input type="text" name="email" size="30" required></td>
     </tr>  
     <tr>
     <td>Mobile No. : </td> 
     <td><input type="text" name="mobile_no" size="30" required></td>
     </tr>  
     <tr>
     <td>AadharCard No. : </td> 
     <td><input type="text" name="aadharcard_no" size="30" required></td>
     </tr>  
     <tr>
     <td></td> 
     <td><input type="submit" name="add" value="Booked"></td>
     </tr>    
     </table> 
     </form>  
     <?php
     }
?> 
<?php
     if(isset($_POST['cancel_booking']))
     {
     ?>  
     <center><br>
     <h1> Cancel Booking</h1>
     <form action="cancel_booking.php" method="post"><br><br>
     Enter Flight No. : <input type="text" name="flight_no">
     <input type="submit" name="delete" value="Cancel Booking"> 
     </form> 
     </center>  
     <?php
     }
?>
<?php
     if (isset($_POST['edit_booking']))
     {
?>
     <center>
     <form action="" method="post"><br><br><br>
     Enter Flight No. : <input type="text" name="flight_no">
     <input type="submit" name="search_edit" value="Search">
     </form>
     </center>
     <?php
     }
     if (isset($_POST['search_edit']))
     {
        $query = "select * from booking where flight_no ='$_POST[flight_no]' ";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run))
        {
        echo "<form action='edit_booking.php' method='post'>
        <table id='table' align='center'>
        <tr>
        <td>Date: </td> 
        <td><input type='date' name='date' size='30' value='$row[date]'></td>
        </tr>
        <tr>
        <td>From : </td> 
        <td>
	<select name='flight_from'>
	<option value='Delhi'>Delhi</option>
	<option value='Jaipur'>Jaipur</option>
	<option value='Bangalore'>Bangalore</option>
	<option value='Goa'>Goa</option>
	<option value='Ahmedabad'>Ahmedabad</option>
        <option value='Kolkata'>Kolkata</option>
        <option value='Pune'>Pune</option>
        <option value='Varanasi'>Varanasi</option>
	</select>
     </td>
     </tr>   
     <tr>
     <td>To : </td> 
     <td>
        <select name='flight_to' value='$row[flight_to]'>
	<option value='Mumbai'>Mumbai</option>
	<option value='Bangalore'>Bangalore</option>
	<option value='Chennai'>Chennai</option>
	<option value='Chandigarh'>Chandigarh</option>
	<option value='Lucknow'>Lucknow</option>
        <option value='Hyderabad'>Hyderabad</option>
        <option value='Bhopal'>Bhopal</option>
        <option value='Kanpur'>Kanpur</option>
	</select>
     </td>
     </tr>  
     <tr>
     <td>Flight No : </td> 
     <td>
        <select size='1' name='flight_no' value='$row[flight_no]'>
	<option value='AA1201'>AA1201</option>
	<option value='EY3183'>EY3183</option>
	<option value='GF6890'>GF6890</option>
	<option value='AA4512'>AA4512</option>
	<option value='AS8721'>AS8721</option>
        <option value='GS4562'>GS4562</option>
        <option value='TS0816'>TS0816</option>
        <option value='NK1612'>NK1612</option>
	</select>
     </td>
     </tr>  
     <tr>
     <td>Passenger Name : </td> 
     <td><input type='text' name='name' size='30' value='$row[passenger_name]'></td>
     </tr> 
     <tr>
     <td>Age : </td> 
     <td><input type='text' name='age' size='30' value='$row[age]'></td>
     </tr>  
     <tr>
     <td>Email : </td> 
     <td><input type='text' name='email' size='30' value='$row[email]'></td>
     </tr>  
     <tr>
     <td>Mobile No. : </td> 
     <td><input type='text' name='mobile' size='30' value='$row[mobile_no]'></td>
     </tr>  
     <tr>
     <td>AadharCard No. : </td> 
     <td><input type='text' name='card' size='30' value='$row[aadharcard_no]'></td>
     </tr>  
     <tr>
     <td></td> 
     <td><input type='submit' name='edit' value='Save'></td>
     </tr>    
     </table> ";   
     } 
   }       
?>
</div>
</div>
</body>
</html>