<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chatbot UI with Sidebar</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Menu</h2>
    <a href="#">Dashboard</a>
    <a href="profile.php">Profile</a>
    <a href="#">Settings</a>
    <a href="#">Logout</a>
  </div>

  <!-- Chat -->
  <div class="chat-container">
    <div class="chat-header">Chatbot</div>
    <div class="chat-body">
      <div class="bot-message message">Hello! How can I help you today?</div>
      <div class="user-message message">Tell me about your features.</div>
      <div class="bot-messasge message">Sure! I can answer questions, assist with coding, and more.</div>
    </div>
    <div class="chat-footer">
      <input type="text" placeholder="Type a message...">
      <button>Send</button>
    </div>
  </div>
</body>
</html>
