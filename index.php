<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chatbot UI with Sidebar</title>
  <style>
    body {
      font-family: 'Oswald', sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      background: #f4f6f9;
    }
    /* Sidebar */
    .sidebar {
      width: 250px;
      background: #343a40;
      color: #fff;
      display: flex;
      flex-direction: column;
      padding: 20px;
    }
    .sidebar h2 {
      margin: 0 0 20px;
      font-size: 1.5rem;
      font-weight: 700;
      text-align: center;
    }
    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
      padding: 10px 0;
      display: block;
      transition: color 0.3s;
    }
    .sidebar a:hover {
      color: #fff;
    }

    /* Chat area */
    .chat-container {
      flex: 1;
      display: flex;
      flex-direction: column;
      background: #fff;
      border-left: 1px solid #ddd;
    }
    .chat-header {
      background: linear-gradient(90deg, #007bff, #00c6ff);
      color: #fff;
      padding: 15px;
      text-align: center;
      font-weight: 700;
      letter-spacing: 1px;
    }
    .chat-body {
      flex: 1;
      padding: 15px;
      overflow-y: auto;
      background: #fafafa;
    }
    .message {
      margin: 10px 0;
      padding: 10px 15px;
      border-radius: 20px;
      max-width: 75%;
      line-height: 1.4;
    }
    .user-message {
      background: #007bff;
      color: #fff;
      margin-left: auto;
    }
    .bot-message {
      background: #e9ecef;
      color: #333;
      margin-right: auto;
    }
    .chat-footer {
      display: flex;
      padding: 10px;
      border-top: 1px solid #ddd;
      background: #fff;
    }
    .chat-footer input {
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 20px;
      background: #f1f3f5;
      outline: none;
    }
    .chat-footer button {
      margin-left: 10px;
      padding: 10px 15px;
      border: none;
      border-radius: 20px;
      background: #007bff;
      color: #fff;
      cursor: pointer;
      font-weight: 600;
    }
    .chat-footer button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Menu</h2>
    <a href="#">Dashboard</a>
    <a href="#">Profile</a>
    <a href="#">Settings</a>
    <a href="#">Logout</a>
  </div>

  <!-- Chat -->
  <div class="chat-container">
    <div class="chat-header">Chatbot</div>
    <div class="chat-body">
      <div class="bot-message message">Hello! How can I help you today?</div>
      <div class="user-message message">Tell me about your features.</div>
      <div class="bot-message message">Sure! I can answer questions, assist with coding, and more.</div>
    </div>
    <div class="chat-footer">
      <input type="text" placeholder="Type a message...">
      <button>Send</button>
    </div>
  </div>
</body>
</html>
