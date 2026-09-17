<textarea id="question"></textarea>
<button onclick="askAI()">Ask AI</button>
<div id="answer"></div>

<script>
function askAI() {
  fetch("../api/ask_ai.php", {
    method: "POST",
    headers: {'Content-Type':'application/x-www-form-urlencoded'},
    body: "question=" + document.getElementById("question").value
  })
  .then(res => res.json())
  .then(data => {
    document.getElementById("answer").innerText = data.answer;
  });
}
</script>
