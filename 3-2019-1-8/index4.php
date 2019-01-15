<?php
require_once 'connect.php';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $sql = 'SELECT * FROM `users`';
  
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <h1>bang</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>password</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']) ?></td>
                            <td><?php echo htmlspecialchars($row['name']) ?></td>
                            <td><?php echo htmlspecialchars($row['password']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>