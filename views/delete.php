<?php
//$_SESSION['LAST_ACTIVITY'] = time();



/**
 * Delete a user
 */

require "../config.php";
require "../common.php";

$success = null;

if (isset($_POST["submit"])) {
  if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

  try {
    $connection = new PDO($dsn, $username, $password, $options);
  
    $id = $_POST["submit"];

    $sql = "DELETE FROM user WHERE id = :id";

    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $success = "User successfully deleted";
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}

try {
  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM user";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>

        
<h2>Delete users</h2>

<?php if ($success) echo $success; ?>

<form method="post">
  <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>nom</th>
        <th>prenom</th>
        <th>age</th>
        <th>email</th>
        <th>password</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
      <tr>
        <td><?php echo escape($row["id"]); ?></td>
        <td><?php echo escape($row["nom"]); ?></td>
        <td><?php echo escape($row["prenom"]); ?></td>
        <td><?php echo escape($row["age"]); ?></td>
        <td><?php echo escape($row["email"]); ?></td>
        <td><?php echo escape($row["password"]); ?></td>
        
        <td><button type="submit" name="submit" value="<?php echo escape($row["id"]); ?>">Delete</button></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</form>