<?php 
	session_start();
	//error_reporting(0);
	include('includes/dbconnection.php');
	function InsertInTable($table,$fields){
		$sql = "INSERT INTO {$table} (".implode(" , ",array_keys($fields)).") ";
		$sql.= "VALUES('";      
		foreach($fields as $key => $value) $fields[$key] = $value;
		$sql.= implode("' , '",array_values($fields))."');";       
		return $sql;
	}
	function UpdateTable($table,$fields,$condition) {
		$sql = "UPDATE {$table} SET ";
		foreach($fields as $key => $value) $fields[$key] = " {$key} = '{$value}' ";
		$sql.= implode(" , ",array_values($fields))." WHERE ".$condition.";";  
		return $sql;
	}
	function DeleteTable($tablename, $condition) {
		$sql= "DELETE FROM {$tablename} ";
		$sql.= "WHERE {$condition}" ;
		return $sql;
	}
	
	// echo '<pre>'; print_r($_POST); echo '</pre>';exit;
	if(isset($_POST['add_appointment'])) {
		$output = array();
		$fields['AptNumber'] = rand(100000000, 999999999);
		$fields['Name'] = $conn->real_escape_string($_POST['name']);
		$fields['Email'] = $conn->real_escape_string($_POST['email']);
		$fields['PhoneNumber'] = $conn->real_escape_string($_POST['phone']);
		// $fields['address'] = isset($_POST['address']) ? $conn->real_escape_string($_POST['address']) : NULL;
		$fields['AptDate'] = $conn->real_escape_string($_POST['date']);
		$fields['AptTime'] = $conn->real_escape_string($_POST['atime']);
		$fields['home_service'] = ($_POST['add_appointment'] == 'home') ? 'yes' : 'no';
		
		$serviceNames = array(); $total_cost = 0;
		$sService = $_POST['service'];
		foreach($sService as $s_Id) {
			$s_Id = $conn->real_escape_string($s_Id);
			$s_i_sql = "SELECT * FROM tblservices WHERE  ID = '{$s_Id}' LIMIT 1";
			$service_info = $conn->query($s_i_sql)->fetch_array();
			$serviceNames[] = $service_info['ServiceName'];
			$total_cost += $service_info['Cost']; 
		}
		$fields['Services'] = implode(", ", $serviceNames);
		$fields['Cost'] = $total_cost;
		$fields['payment'] = ''; $fields['Status'] = 0;
		
		$insertQuery = InsertInTable("tblappointment", $fields);
		if($conn->query($insertQuery)) {
			$output['status'] = "success";
			$output['aptid'] = $fields['AptNumber'];
		} else {
			$output['status'] = "error";
			$output['errorMsg'] = $conn->error;
		}
		exit(json_encode($output));
	}