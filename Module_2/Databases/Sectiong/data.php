<?php 
// $uname = $_POST['uname'];
// $eml = $_POST['emal'];
// $mob = $_POST['contct'];
// $address = $_POST['addr'];
// $dob = $_POST['dob'];

//Establishing a connection with PHP 
$connection_details = mysqli_connect("localhost","root","","sectiong");
if(!$connection_details)
{
	die("problem in connection establish");
}

// save button coding
if(isset($_POST['submit']))
{
$uname = $_POST['uname'];
$eml = $_POST['emal'];
$mob = $_POST['contct'];
$address = $_POST['addr'];
$dob = $_POST['dob'];

$insert_query = "INSERT INTO regis(uname,emal,mob,addr,dob) VALUES('$uname','$eml','$mob','$address','$dob')";
if(mysqli_query($connection_details,$insert_query))
{
	//echo "data inserted successfully";
	//echo "<script>alert()</script>";
	header("refresh:0,url=regis.html");
}
else{
	echo "unable to store data";
}
}

//Display button coding
if(isset($_POST['display']))
{
	$display_query = "SELECT * FROM regis";
	$data = mysqli_query($connection_details,$display_query);
	if(mysqli_num_rows($data)>0){
		echo "<table border=1 px solid black>";
		echo "<tr>
		<th>Id</th>
		<th>User_Name</th>
		<th>User_Email</th>
		<th>Contact No</th>
		<th>Address</th>
		<th>DateOfBirth</th></tr>";

		while($new_data = mysqli_fetch_assoc($data))
		{
			// echo"<form action= data.php method= post>";
			echo"<tr>";
			// echo"<td><input type= text name=new_id value=$new_data[id] readyonly> </td>";
			// echo"<td><input type= text name=new_uname value=$new_data[uname]> </td>";
			// echo"<td><input type= text name= new_eml value=$new_data[emal]> </td>";
			// echo"<td><input type= text name= new_mob value=$new_data[mob] > </td>";
			// echo"<td><input type= text name=new_addr  value=$new_data[addr] > </td>";
			// echo"<td><input type= text name=new_dob value=$new_data[dob] > </td>";
			echo "<td>".$new_data['id']."</td>";
			echo "<td>".$new_data['uname']."</td>";
			echo "<td>".$new_data['emal']."</td>";
			echo "<td>".$new_data['mob']."</td>";
			echo "<td>".$new_data['addr']."</td>";
			echo "<td>".$new_data['dob']."</td>";
			// echo"<td><input type = submit , name = update value = update></td>";
			// echo"<td><input type = submit , name = delete value = delete></td>";
			echo "</tr>";
			// echo"</form>";


		}
		echo "</table>";

	}
	else{
		echo "no record found";
	}
}

if(isset($_post['update'])){
	$id = $_POST['new_id'];
	$uname = $_POST['new_uname'];
	$eml = $_POST['new_eml'];
	$mob = $_POST['new_mob'];
	$addr= $_POST['new_addr'];
	$dob = $_POST['new_dob'];

	$update_query="UPDATE regis SET new_uname='$uname' ,_new_emal='$eml',new_mob='$mob' , new_addr='$addr', new_dob=$dob where new_id='$id'";

	if(mysqli_query($connection_details,$update_query)){
		echo"1 record update succesfully";
	}else{
		echo"Unable to update record";
	}
}

if(isset($_POST['delete'])){
	$id = $_POST['new_id'];
	$delete_query="DELETE FROM regis WHERE id='$id'";
	if(mysqli_connect($connection_details,$delete_query)){
		echo"1 record deleted";
	}else{
		echo"Unable to Delete the data. ";
	}
}

?>