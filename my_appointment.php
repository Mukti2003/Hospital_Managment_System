<?php 
	include('dbconnect.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/excss/hospital.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
	<?php include'header.php';?>

	<div class="container">
		<?php
		$sql="SELECT * FROM Appointment WHERE patient_id ='".$_SESSION['user_id']."'ORDER BY date DESC,time DESC";
        $result= mysqli_query($conn,$sql);
        $sl=1;
        if(mysqli_num_rows($result)>0){
			echo '<table class="table">';
		  		echo'<thead class="thead-dark">';
		    		echo'<tr class="text-center">';
					    echo'<th scope="col">id</th>';
					    echo'<th scope="col">Name</th>';
					    echo'<th scope="col">Email</th>';
					    echo'<th scope="col">Phone</th>';
					    echo'<th scope="col">Date</th>';
					    echo'<th scope="col">Time</th>';
					    echo'<th scope="col">Symptoms</th>';
					    echo'<th scope="col">Doctor</th>';
					    echo'<th scope="col">Actions</th>';
		    		echo'</tr>';
		  		echo'</thead>';
		  		echo'<tbody>';
		  		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        // if($data['date']==date('Y-m-d')){
                    	?>
                      <tr class='text-left'>
                      <td scope="row"><?php echo $sl++; ?></td>
                      <td id="username<?php echo $sl; ?>"> <?php echo $row["name"]; ?></td>
                      <td><?php echo $row["email"];?></td>
                      <td id="phone<?php echo $sl; ?>"><?php echo $row["mobile"]; ?></td>
                      <td id="date<?php echo $sl ?>"><?php echo date('d-m-Y',strtotime($row["date"])); ?></td>
                      <td id="time<?php echo $sl; ?>"><?php echo date('h:i A',strtotime($row["time"])); ?></td>
                      <td id="service<?php echo $sl;?>"><?php echo $row["service"];?></td>
                      <td id="doctor<?php echo $sl;?>"><?php echo $row["doctor"];?></td>
                    <td>
                      <button type="button" class="btn
				  	  btn-primary" onclick="togglePopup(<?php echo $sl;?>);"><i class="fa fa-eye"></i></button>
				  	  <?php 
				  	  $app_time=date('H:i',strtotime($row["time"]));
				  	  $current_time=date('H:i');
				  	  $check=$row["date"].' '.$app_time;
				  	  if($row['cancel_status']){
				  	  	echo'cancelled';
				  	  }
				  	  else{
					   if ($check>=date('Y-m-d H:i')){
					   	?>
					   	<a href="edit_appointment.php?app_id=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fa fa-edit text-light"></i></a>
	            <a href="cancel_appointment.php?app_id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to cancel your Appointment ?');"><i class="fa fa-ban"></i></a>	
				  		<?php } 
				  		}
				  		?>
                 	  </td>
                      </tr>
                     <?php 
                  }
                  ?>
                </tbody>
            </table>

        <?php   }
        ?>
	</div>
	<!-- popup -->

		<div class="popup" id="popup-1">
			<div class="content">
			    <div class="close-btn" onclick="togglePopup()">x</div>
			  	<div class="input-field mt-5">
                    <label class="control-label text-dark">Name:</label>
                    <input type="text" name="username" id="username" class="form-control" readonly>
			  	</div>
			  	<div class="d-flex mt-3">
				  	<div class="input-field">
				  		<label class="control-label text-dark">Date:</label>
		                <input type="text" name="date" class="form-control" id="preferred_date" readonly>
				  	</div>
					<div class="input-field">
				  		<label class="control-label text-dark">Time:</label>
		                <input type="text" name="time" class="form-control" id="preferred_time" readonly>
				  	</div>
			  	</div>
			  	<div class="input-field mt-3">
                    <label class="control-label text-dark">Apointment For:</label>
                    <input type="text" id="appointment" class="form-control" readonly>
			  	</div>
		    	<!-- <button class="second-button">Sign in</button> -->
			</div>
		</div>
	<!-- popup -->
	<?php include'footer.php';?>
	<script>
		function togglePopup(sl) {
	 
		$('#username').val($('#username'+sl).html());
		$('#preferred_date').val($('#date'+sl).html());
		$('#preferred_time').val($('#time'+sl).html());
		$('#appointment').val($('#service'+sl).html());
		$('#appointment').val($('#doctor'+sl).html());

	document.getElementById("popup-1")
	  .classList.toggle("active");
}
</script>
	<script type="text/javascript" src="Assets/jas/hospital.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script type="text/javascript" src="jquery.counterup.min.js"></script>
</body>
</html>