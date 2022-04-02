<?php
require_once '../config.php';

// inv_cap=67&vote=566&user_id=4
	// $inv_cap = $_GET['inv_cap'];
  $vote = $_GET['vote'];
	$id = $_GET['id'];
	
	
	global $link;
  $sql = "UPDATE conts SET vote = '$vote' WHERE id = '$id'";
      $query = mysqli_query($link,$sql);
		if ($query) {
			   echo json_encode(array('vote' => $vote, 'success' => 1));
        
      } else {
        echo json_encode(array('id' => 'Not fOUND', 'success' => 0));
      }
 