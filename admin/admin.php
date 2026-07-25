<?php
require_once __DIR__  . '../classes/chatbot.php';  
include '../configuration/connection.php'; // your DB connection

// Handle form submission
if(isset($_POST['add'])){
    $keyword = trim($_POST['keyword']);
    $reply   = trim($_POST['reply']);

    if($keyword != '' && $reply != ''){
        $stmt = $conn->prepare("INSERT INTO chatbot_responses (keyword, reply) VALUES (?, ?)");
        $stmt->bind_param("ss", $keyword, $reply);
        $stmt->execute();
    }
}

// Fetch all responses
$responses = $conn->query("SELECT * FROM chatbot_responses");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chatbot Admin Panel</title>
  <style>
    body { font-family: 'Oswald', sans-serif; background:#f4f6f9; padding:20px; }
    table { width:100%; border-collapse: collapse; margin-top:20px; }
    th, td { border:1px solid #ddd; padding:10px; text-align:left; }
    th { background:#007bff; color:#fff; }
    input, textarea { width:100%; padding:8px; margin:5px 0; }
    button { padding:10px 15px; background:#007bff; color:#fff; border:none; cursor:pointer; }
    button:hover { background:#0056b3; }
  </style>
</head>
<body>
  <h2>Chatbot Admin Panel</h2>
  <form method="POST">
    <label>Keyword:</label>
    <input type="text" name="keyword" required>
    <label>Reply:</label>
    <textarea name="reply" required></textarea>
    <button type="submit" name="add">Add Response</button>
  </form>

  <h3>Existing Responses</h3>
  <table>
    <tr><th>ID</th><th>Keyword</th><th>Reply</th></tr>
    <?php while($row = $responses->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['keyword']) ?></td>
        <td><?= htmlspecialchars($row['reply']) ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
