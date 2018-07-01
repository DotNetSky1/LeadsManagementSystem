<?php


class ModelLms extends CI_Model{

	
	
	public function getListLeads(){
		
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
    // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "<section class='content'>
						<div class='col-md-12'>
							<div class='widget blank no-padding'>
								<div class='panel panel-default work-progress-table'><table class='table' id='mytable'><thead>
										  <tr>
											<th><input type='checkbox' id='checkall' /></th>
											<th>Lead Name</th>
                                            <th>Mobile</th>
                                            <th>City</th>
											<th>Remarks</th>
											<th>Email</th>
											<th>Date</th>
										  </tr>
										</thead>	<tbody>
										  <tr>
											<td><input type='checkbox' class='checkthis' /></td><td>" . $row["leadName"]. "</td><td>". $row["mobile"]. "</td><td>". $row["city"]. "</td><td>". $row["remarks"]. "</td><td>". $row["email"]. "</td><td>". $row["date"]. "</td></tr></table></div></div></div></section>";
    }
} 

}
		
	} 
	
	
}
?>