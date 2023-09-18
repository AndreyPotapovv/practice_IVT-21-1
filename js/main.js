function calculateScore() {
  let totalQuestions = 5;
  let correctAnswers = 0;

  for (let i = 1; i <= totalQuestions; i++) {
    let answer = document.querySelector(`input[name="q${i}"]:checked`);
    if (answer && answer.value === "correct") {
      correctAnswers++;
    }
  }

  document.getElementById("result").innerHTML = `Правильных ответов: ${correctAnswers} из ${totalQuestions}`;

  document.querySelector("form").submit();
}

function clearAnswers() {
  let radioInputs = document.querySelectorAll("input[type='radio']");
  for (let i = 0; i < radioInputs.length; i++) {
    radioInputs[i].checked = false;
  }
  document.getElementById("result").innerHTML = "";
}
