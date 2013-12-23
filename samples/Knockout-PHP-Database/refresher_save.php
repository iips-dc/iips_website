<?php
	$db = new MySqli('localhost', 'root', '', 'knockout');
?>

<?php
	$action = (!empty($_POST['action'])) ? $_POST['action'] : ''; //action to be used(insert, delete, update, fetch)
	$student = (!empty($_POST['student'])) ? $_POST['student'] : ''; //an array of the student details

	//check if the student is not an empty string
	//and assigns a value to $name and $age if its not empty
	if(!empty($student)){
	  $name = $student['name'];
	  $age = $student['age'];    
	}

	switch($action){
		default:
		  //only select student records which aren't deleted
		  $students = $db->query("SELECT * FROM students WHERE status = 1");
		  $students_r = array();
		  
		  while($row = $students->fetch_array()){

			  //default student data
			  $id = $row['id'];
			  $name = $row['name'];
			  $age = $row['age'];

			  //update status
			  //its false by default since
			  //this is only true if the user clicks
			  //on the span
			  $name_update = false;
			  $age_update = false;
			  $age_update = false;

			  //build the array that will store all the student records
			  $students_r[] = array(
				  'id' => $id, 'name' => $name, 'age' => $age,
				  'nameUpdate' => $name_update, 'ageUpdate' => $age_update,
				  );
		  }

		  echo json_encode($students_r); //convert the array to JSON string
		  break;
		
		case 'insert':
		  $db->query("INSERT INTO students SET name = '$name', age = '$age'");
		  echo $db->insert_id; //last insert id
		  break;
		  
		case 'update':
		  $id = $student['id'];
		  $db->query("UPDATE students SET name = '$name', age = '$age' WHERE id = '$id'");
		  break;
		
		case 'delete':
		  $id = $_POST['student_id'];
		  $db->query("UPDATE students SET status = '0' WHERE id = '$id'");
		  break;


	}
?>