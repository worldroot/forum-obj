<?PHP
	include "../controller/TopicC.php";

	$topicC=new TopicC();
	
	if (isset($_POST["id"])){
		$topicC->supprimerTopic($_POST["id"]);
		header('Location:afficherTopics.php');
	}

?>