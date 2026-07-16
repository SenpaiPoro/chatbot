
    const chatBody = document.getElementById("chat-body");
    const input = document.getElementById("user-input");
    const sendBtn = document.getElementById("send-btn");

    function appendMessage(text, type) {
      const div = document.createElement("div");
      div.classList.add("message", type === "user" ? "user-message" : "bot-message");
      div.textContent = text;
      chatBody.appendChild(div);
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    sendBtn.addEventListener("click", () => {
      const message = input.value.trim();
      if (!message) return;
      appendMessage(message, "user");
      input.value = "";

      fetch("chat.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "message=" + encodeURIComponent(message)
      })
      .then(res => res.json())
      .then(data => appendMessage(data.reply, "bot"))
      .catch(() => appendMessage("Error contacting server.", "bot"));
    });
