async function sendMessage() {
    const input = document.getElementById('user-input');
    const chatBox = document.getElementById('chat-box');
    
    if(!input.value) return;

    chatBox.innerHTML += `<div class="message-user">${input.value}</div>`;
    
    const response = await fetch('../api/ask_ai.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ message: input.value })
    });
    
    const data = await response.json();
    chatBox.innerHTML += `<div class="message-bot">${data.reply}</div>`;
    input.value = '';
}