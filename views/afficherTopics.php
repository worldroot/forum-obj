<?PHP
	include "../controller/TopicC.php";

	$topicC=new topicC();
	$listeUsers=$topicC->afficherTopics();

?>
<body>
		<button><a href="addTopic.php">Ajouter un Utilisateur</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
				<th>Message</th>
				<th>Commentaire</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeUsers as $topic){
			?>
				<tr>
					<td><?PHP echo $topic['id']; ?></td>
					<td><?PHP echo $topic['nom']; ?></td>
					<td><?PHP echo $topic['prenom']; ?></td>
					<td><?PHP echo $topic['email']; ?></td>
					<td><?PHP echo $topic['msg']; ?></td>
					<td><?PHP echo $topic['commentaire']; ?></td>

				<td>
						<form method="POST" action="supptopic.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value= <?PHP echo $topic['id']; ?> name="id">
						</form>
					</td>
					<td>
						<form method="POST" action="modifier.php">
						<input type="submit" name="modifier" value="modifier">
						<input type="hidden" value= <?PHP echo $topic['id']; ?> name="id">
						</form>
					</td>

					
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
