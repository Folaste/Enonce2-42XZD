<?php
/*
Plugin Name: Tempete de cerveaux
Plugin URI:  tempetedecerveaux.local
Description: Plugin to add a chatbot in website
Version: 0.5
Author: Tempete de cerveaux
Author URI: tempetedecerveaux.local
*/

function chatbot_output() {
  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <title>Chatbot</title>
      <style>
        .chat-container {
          max-width: 400px;
          margin: 0 auto;
          padding: 20px;
          background-color: #f5f5f5;
        }

        .chat-container p {
          margin: 10px 0;
        }

        .user-message {
          text-align: right;
          color: #0066ff;
          font-weight: bold;
        }

        .chatbot-message {
          text-align: left;
          color: #333333;
        }
      </style>
    </head>
    <body>
      <div class="chat-container">
        <div id="chat-dialogue"></div>
        <div>
          <input id="input" type="text" placeholder="Tapez votre message..." autocomplete="off" autofocus="true"/>
          <button type="submit" onclick="sendMessage()">Envoyer</button>
        </div>
      </div>
      <script>
        function sendMessage() {
          const inputField = document.getElementById("input");
          let input = inputField.value;
          inputField.value = "";
          displayUserMessage(input);
          output(input);
        }

        function displayUserMessage(message) {
          const chatDialogue = document.getElementById("chat-dialogue");
          const userMessage = document.createElement("p");
          userMessage.textContent = "Utilisateur: " + message;
          userMessage.className = "user-message";
          chatDialogue.appendChild(userMessage);
        }

        function displayChatbotMessage(message) {
          const chatDialogue = document.getElementById("chat-dialogue");
          const chatbotMessage = document.createElement("p");
          chatbotMessage.textContent = "Chatbot: " + message;
          chatbotMessage.className = "chatbot-message";
          chatDialogue.appendChild(chatbotMessage);
        }

        function output(input) {
          const apiUrl = 'https://api.openai.com/v1/chat/completions';
          const apiKey = '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';

          const headers = {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + apiKey
          };

          const data = {
            'prompt': input,
            'max_tokens': 50
          };

          fetch(apiUrl, {
            method: 'POST',
            headers: headers,
            body: JSON.stringify(data)
          })
            .then(response => response.json())
            .then(responseData => {
              if (responseData.choices && responseData.choices.length > 0) {
                const answer = responseData.choices[0].text.trim();
                displayChatbotMessage(answer);
              }
            })
            .catch(error => {
              console.error('Error:', error);
            });
        }

        const inputField = document.getElementById("input");
        inputField.addEventListener("keydown", function(e) {
          if (e.code === "Enter" || e.code === "NumpadEnter") {
            e.preventDefault();
            sendMessage();
          }
        });
      </script>
    </body>
  </html>
  <?php
}

chatbot_output();
?>
