<?php
require_once __DIR__  . '/../classes/chatbot.php';  
include '../configuration/connection.php'; // your DB connection

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
<?php include 'include/header.php'; ?>
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
