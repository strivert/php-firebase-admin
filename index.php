<?php
session_start();
include('common/connection.php');
if($_SESSION['AdminUser']==""){
			$URL="login.php";
		    ReDirect($URL);
			exit();
}

$TemplateFile="template.php";
$page=$_REQUEST['page'];

require './lib/firebaseLib.php';
$url = 'https://myfirstfirebase-74c86.firebaseio.com';
$token = 'o3J5JgGL8ZIKufQcSiIXPe69uJupr2I563JBG3cq';
$firebase = new Firebase\FirebaseLib($url, $token);

if (isset($_SESSION['AdminUser'])) {
	switch($page)
	{		
	
	case "questions";
		  {
		   
			$Title="Question&Answers";

			if($_REQUEST['act']=='del' && $_REQUEST['uID']!=''){
				$uID = $_REQUEST['uID'];
				//$db->del_rec("daily_tasks", "id='$uID'");

				$firebase->delete('/questions/'.$uID);

				ReDirect('index.php?page=questions');
		     	exit;
			}
			
			//get data from Firebase
			$questionAnswers  = "";

	/*
			$test = array(
				"question_image_url" => "http://google.com",
				"question_text" => "Question text 1",
				"correct_text" => "Correct text 1",
				"incorrect_text1" => "Incorrect Text 1",
				"incorrect_text2" => "Incorrect Text 2",
				"incorrect_text3" => "Incorrect Text 3",
				"incorrect_text4" => "Incorrect Text 4",
				"incorrect_text5" => "Incorrect Text 5",
				"level" => 1
			);

			$test1 = array(
				"a1" => "bar",
				"a2" => "lamp",
				"a3" => 423
			);
			
			$dateTime = time();

			$firebase->set('/questions/'.$dateTime, $test);
			$firebase->set('/records/'.$dateTime, $test1);


			$name = $firebase->get('/questions');

			print_r($name);
			$name = $firebase->get('/records');

			print_r($name);
			exit;
*/
			$questionAnswers = $firebase->get('/questions');			
			$questionAnswers = json_decode($questionAnswers, true);

			$MiddleContents["page"]="views/questions.php";
			include($TemplateFile);
			break;
		  }	
	case "addquestion";
		  {
		   
			if(isset($_POST['question_image_url'])){
				
				$question = array(
					"question_image_url" => $_POST['question_image_url'],
					"question_text" => $_POST['question_text'],
					"correct_text" => $_POST['correct_text'],
					"incorrect_text1" => $_POST['incorrect_text1'],
					"incorrect_text2" => $_POST['incorrect_text2'],
					"incorrect_text3" => $_POST['incorrect_text3'],
					"incorrect_text4" => $_POST['incorrect_text4'],
					"incorrect_text5" => $_POST['incorrect_text5'],
					"level" => $_POST['level']
				);	

				$dateTime = time();
				$res = $firebase->set('/questions/'.$dateTime, $question);				

				ReDirect('index.php?page=questions');	
				exit;		
			}
	  }	
	
	case "edit_question";
		{
			$Title="Update Question&Answer";
			
			$dateTime = $_REQUEST['uID'];

			if(isset($_POST['question_image_url'])){
				 
				 $question = array(
					"question_image_url" => $_POST['question_image_url'],
					"question_text" => $_POST['question_text'],
					"correct_text" => $_POST['correct_text'],
					"incorrect_text1" => $_POST['incorrect_text1'],
					"incorrect_text2" => $_POST['incorrect_text2'],
					"incorrect_text3" => $_POST['incorrect_text3'],
					"incorrect_text4" => $_POST['incorrect_text4'],
					"incorrect_text5" => $_POST['incorrect_text5'],
					"level" => $_POST['level']
				);	

				$res = $firebase->set('/questions/'.$dateTime, $question);			

				ReDirect('index.php?page=questions');
				exit;
			
			}
			
			$res = $firebase->get('/questions/'.$dateTime.'/');			
			
			$question = json_decode($res, true);

			$MiddleContents["page"]="views/edit_question.php";
			include($TemplateFile);
			break;
	
	 }	


	case "records";
		  {
		   
			$Title="Records";

			/*
			$record = array(
				"device_id" => "wer",
				"date_time" => "2010-10-10",
				"question_image_url" => "question_iamge url",
				"question_text" => "question_textsdf",
				"user_answer_text" => "user anser text"
			);	

			$dateTime = time();
			$res = $firebase->set('/records/'.$dateTime, $record);
			exit;
			*/

			$records = $firebase->get('/records');		
			$records = json_decode($records, true);

			$MiddleContents["page"]="views/records.php";
			include($TemplateFile);
			break;
	}

	case "logout";
			  {
				session_destroy();
			    $URL="login.php?Msg=Successfully Logout";
			    ReDirect($URL);
			    break;
			  } 
	default:
			{
				$Title="Admin: Dashboard";
				$MiddleContents["page"]="views/home.php";
				include($TemplateFile);
		    }	
	
	
	}
}
else {
	session_destroy();
    $URL="login.php?Msg=Successfully Logout";
    ReDirect($URL);
    exit;	
}
?>