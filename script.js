var url = document.URL;
var index = url.indexOf("?") + 1;
var response = url.slice(index)
var answerMap = new Map();
var correctAnswerMap = new Map();
correctAnswerMap.set("answer1", "None+of+the+Above");
correctAnswerMap.set("answer2", "31-40");
correctAnswerMap.set("answer3", "0-5");
correctAnswerMap.set("answer4", "350%2B");
correctAnswerMap.set("answer5", "60%2B+million");

var numCorrect = 0;
var numQuestions = 0;


function answerHandling() {
  if (response != null) {
	var answers = response.split("&");
	
	console.log(answers);
	for (var answer of answers) {
		answer = answer.split("\=");
		answerMap.set(answer[0], answer[1]);
	}
	
	var feedbackMap = new Map();
	feedbackMap.set("answer1", "The United States does not have an official language");
	feedbackMap.set("answer2", "32 States (and all 5 territories) have English as (at least one of) their official language(s)");
	feedbackMap.set("answer3", "3 States have more than one official languages: South Dakota, Hawaii, and Alaska");
	feedbackMap.set("answer4", "Over 350 unique languages are spoken within the United States");
	feedbackMap.set("answer5", "Over 67.8 million people in the US are native speakers of a language other than English, as of 2019; the number is higher now");
	
	for (var item of feedbackMap.keys()) {
		numQuestions++;
		var output = document.getElementById(item);
		var feedback = document.createTextNode(feedbackMap.get(item));
		
		var icon = document.createElement("img");
		
		
		if (answerMap.get(item) == correctAnswerMap.get(item)) {
			icon.src = "images/check.jpeg";
			numCorrect++;
		} else {
			icon.src = "images/x.jpeg";
		}
		
		icon.height = 15;
		
		
		output.appendChild(icon);
		output.appendChild(feedback);
	}
  }
  
  var score = document.createTextNode("Score: " + numCorrect + "/" + numQuestions);
  score
  document.getElementById("score").appendChild(score);
}

document.onload = answerHandling();


