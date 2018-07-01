<?php
class User extends CI_Controller {
public function index()
{
echo "Default method call user";
}

public function ValidateLogin()
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT * FROM login where userid='".$_POST["UserID"]."' and password='".$_POST["password"]."'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
$_SESSION['username'] = $_POST['UserID'];
	$this->load->view('welcome');
	
} else {
    echo "Invalid userid";
	
	//$this->load->view('Login');
	
}
$conn->close();
}
public function AddUser(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 if(isset($_POST['save']))
{
$sql = "INSERT INTO login (userID,Password,UserType)
        VALUES ('".$_POST["userID"]."','".$_POST["Password"]."','".$_POST["UserType"]."')";
$result = $conn->query($sql);
}
$conn->close();


	$this->load->view('addUser');
}

public function CreateLead(){
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 if(isset($_POST['save']))
{
$sql = "INSERT INTO leadtbl (leadName,mobile,city,remarks,email,date)
        VALUES ('".$_POST["leadname"]."','".$_POST["mobile"]."','".$_POST["cityname"]."','".$_POST["remarks"]."','".$_POST["email"]."','".$_POST["leaddate"]."')";
$result = $conn->query($sql);
}
$conn->close();
	$this->load->view('CreateLead');
}




public function LeadsList(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM leadtbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo  "<section class='content'>
									<div class='container'>			
								 <table id='myTable' class='table table-striped'>
								 <thead>
										  <tr>
											<th>Lead Name</th>
                                            <th>Mobile</th>
                                            <th>City</th>
											<th>Remarks</th>
											<th>Email</th>
											<th>Date</th>
										  </tr>
										</thead><tbody>";
    // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["leadName"]. "</td><td>". $row["mobile"]. "</td><td>". $row["city"]. "</td><td>". $row["remarks"]. "</td><td>". $row["email"]. "</td><td>". $row["date"]. "</td></tr>";
    }
echo "</table></div></div></div></section>";
	} 
$this->load->view('LeadsList');
}


public function UsersList(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LMS";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM login";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    // output data of each row
	echo "<section class='content'>
									<div class='container'>			
								 <table id='myTable' class='table table-striped'><thead>
										   <tr>
											 <th>user name</th>
                                           <th>password</th>
                                           <th>user type</th>
										   </tr>
										 </thead><tbody>";
   while($row = $result->fetch_assoc()) 
    {
        echo "<tr>
		<td>" . $row["UserID"]. "</td><td>". $row["Password"]. "</td><td>". $row["UserType"]. "</td></tr>";
    }
 echo "</tbody></table></div></section>";
 
 
 } 


$this->load->view('UsersList');
}

}
?>