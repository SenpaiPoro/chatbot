<?php
require_once __DIR__  . '/../classes/chatbot.php';  
require_once __DIR__ . '/../configuration/connection.php';
// Handle form submission
if(isset($_POST['add'])){
    $keyword = trim($_POST['keyword']);
    $reply   = trim($_POST['reply']);

    if($keyword != '' && $reply != ''){
        $stmt = $connection->prepare("INSERT INTO chatbot_responses (keyword, reply) VALUES (?, ?)");
        $stmt->bind_param("ss", $keyword, $reply);
        $stmt->execute();
    }
}
// Fetch all responses
$responses = $connection->query("SELECT * FROM chatbot_responses");
?>    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hotel Reservation</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column min-vh-100">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="index.php">Hotel Reservation</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>

        <main class="flex-fill">
  <style>
    body { font-family: 'Oswald', sans-serif; background:#f4f6f9;}
    form { padding: 20px;}
    table { width:100%; border-collapse: collapse; margin-top:20px; padding:20px; }
    th, td { border:1px solid #ddd; padding:10px; text-align:left; }
    th { background:#007bff; color:#fff; }
    input, textarea { width:100%; padding:8px; margin:5px 0; }
    button { padding:10px 15px; background:#007bff; color:#fff; border:none; cursor:pointer; }
    button:hover { background:#0056b3; }
  </style>
  <h2>Chatbot Admin Panel</h2>
  <form method="POST">
    <label>Keyword:</label>
    <input type="text" name="keyword" required>
    <label>Reply:</label>
    <textarea name="reply" required></textarea>
    <button type="submit" name="add">Add Response</button>
  </form>
  <?php 
    if ($responses->num_rows > 0) {
  ?>
  <h3>Existing Responses</h3>
  <table>
    <tr><th>Keyword</th><th>Reply</th></tr>
    <?php while($row = $responses->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['keyword']) ?></td>
        <td><?= htmlspecialchars($row['reply']) ?></td>
      </tr>
    <?php endwhile; ?>
    <?php 
    }
    else {
        echo "<tr><td colspan='3'><h1>No data found.</h1></td></tr>";
    }

    ?>
  </table>
</body>
</html>
