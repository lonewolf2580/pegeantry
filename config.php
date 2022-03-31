<?php
$site_name = "Blue Ribbon";
$contest_title = "Blue Ribbon Contest";
$contest_reward = "iPhone 13";
$site_url = "https://bluerib.kewitas.com";
$phone_number = "+2345678901234";
$phone_number2 = "+2345678901235";
$email_address = "support@bluerib.kewitas.com";

// Bank Data
$acc_number = "1234567890";
$bank_name = "Null";

// define("HOST", "localhost");
// define("USERNAME", "skyraikc_lincom");
// define("PASSWORD", "1Lone2wolf@");
// define("DBNAME", "skyraikc_pgt");

// $link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);


define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "pgt");

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

session_start();

function upload_image($file, &$errors){
	$size = $file['size'];
	$type = $file['type']; 
	$tmp_location = $file['tmp_name'];

	// 	if ($size > 512000) {
	// 		$errors[] = "Profile picture is too large.";
	// 		return false;
	// 	}

	$allowed_extensions = array("jpg", 'jpeg', 'png');
	$file_ext = explode('/', $type);
	$image_ext = strtolower(end($file_ext));
	if (!in_array($image_ext, $allowed_extensions)) {
		$errors[] = "File type not allowed";
		return false;
	}

	$upload_dir = "uploads/";
	$image_name = hash("sha256", uniqid());
	$image_path = $upload_dir . $image_name . '.' . $image_ext;

	if (move_uploaded_file($tmp_location, $image_path)) {
		return $image_path;
	} 

	$errors[] = "Sorry, image upload failed!";
	return false;
}

function sanitize($input)
{
	global $link;
	$input = htmlentities(strip_tags(trim($input)));
	$input = mysqli_real_escape_string($link, $input);
	return $input;
}

function sanitize_email($email){
	global $link;
	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
	if ($email) {
		$email = mysqli_real_escape_string($link, $email);
		return $email;
	} return false;
}

function check_duplicate($table, $field, $data)
{
	global $link;
	$sql = "SELECT $field FROM $table WHERE $field = '$data'";
	$query = mysqli_query($link, $sql);
	if (mysqli_num_rows($query) > 0) {
		return true;
	} 
	return false;
}

function join_contest($post, $file)
{
	global $link;
	$err_flag = false;
	$errors = [];
// 	return var_dump($file);
	extract($post);

	if (!empty($name)) {
		$name = sanitize($name);
	} else{
		$errors[] = "Enter your name";
		$err_flag = true;
	}

    if (!empty($email)) {
		$email = sanitize($email);
	} else{
		$errors[] = "Enter your Email Address";
		$err_flag = true;
	}

    if (!empty($gender)) {
		$gender = sanitize($gender);
	} else{
		$errors[] = "Select your Gender";
		$err_flag = true;
	}

    if (!empty($file)) {
		$upload = upload_image($file, $err);
        if ($upload) {
            $picture = $upload;
        }else {
		    $errors[] = "Image Upload Failed";
            $err_flag = true;
        }
	} else{
		$errors[] = "Select an Image to Upload";
		$err_flag = true;
	}

    if (!empty($state)) {
		$state = sanitize($state);
	} else{
		$errors[] = "Enter your State of Resident";
		$err_flag = true;
	}

    if (!empty($gender)) {
		$gender = sanitize($gender);
	} else{
		$errors[] = "Select your Gender";
		$err_flag = true;
	}
	

	if($err_flag === false){
		$text = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		// $ref_id = substr(str_shuffle($text), 0, 5);
		$c_id = substr(str_shuffle($text), 0, 6);
		$sql = "INSERT INTO conts (c_id, name, email, gender, picture, state) VALUES ('$c_id', '$name', '$email', '$gender', '$picture', '$state')";
			$query = mysqli_query($link, $sql);
			if ($query) {
				return true;
			} else {
				return $errors;
				
			}
		}  return $errors;

}

function fetch_all_conts(){
	global $link;
	$sql = "SELECT * FROM conts ORDER BY date_created DESC";
	$query = mysqli_query($link, $sql);
	if($query){
		if (mysqli_num_rows($query) > 0) {
			while ($row = mysqli_fetch_assoc($query)) {
			$inv[] = $row; 
			}return $inv;
		}
		
	}return false;
}

function fetch_cont($id = null)
{
	global $link;
	if ($id != null) {
		$sql = "SELECT * FROM conts WHERE id = '$id' ";
		$query = mysqli_query($link, $sql);
		if (mysqli_num_rows($query) > 0) {
			$row = mysqli_fetch_array($query);
			return $row;
		}return false;
	}return false;
}