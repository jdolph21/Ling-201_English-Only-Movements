<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Quiz Results | English Only Movement</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  
  <header>
    <nav>
      <ul>
        <li class="nav"><a class="page" href="index.html"><b>Home</b></a></li>
        <li class="nav"><a class="page" href="myths_debunked.html"><b>Myths Debunked</b></a></li>
        <li class="nav"><a class="page" href="us_language_history.html"><b>US Language History</b></a></li>
        <li class="nav"><a class="page" id="quizPage" href="quiz.php"><b>Quiz</b></a></li>
		<li class="nav"><a download class="page" id="sources" href="sources.txt"><b>Sources</b></a></li>
      </ul>
    </nav>
  </header>
  
  <body class="results">
    <main>
		
		<div id="resultsGrid">
			<div id="leftSide" class="resultsItem spacer">
			</div>
		
			<div class="results resultsItem">
				<?php 
				
				$answers = $_POST;
				$answerKey = array("None of the Above", "31-40", "0-5", ">350", ">60 million");
				$correctArray = [];
				
				$score = 0;
				$questions = 0;
				
				$correctImage = "<img src='images/check.png' height=15></img>";
				$incorrectImage = "<img src='images/x.png' height=15></img>";
				
				foreach ($answers as $a) {
					if ($a == $answerKey[$questions]) {
						$score +=  1;
						$correctArray[$questions] = 1;
					} else {
						$correctArray[$questions] = 0;
					}
					++$questions;
				}
				?>
				
				<h1 class="answers_title">
					Answers
				</h1>
				
				<br/>
				
				<?php echo "<p class='quiz_score'> Score: " . $score . "/" . $questions . "</p>";?>
=======
		<h1 class="quiz_title">
			Answers
		</h1>
		<?php echo "<p class='quizScore'> Score: " . $score . "/" . $questions . "</p>";?>
				
				
				
				<br/>
				
				
>>>>>>> 93ad2f794e4486a1eb36eb80da4052206a5ba7f1
				
				<br />
				<div id="answer1">
					<h3>
						1. What is the official language of the United States? 
					</h3>
					<?php echo $correctArray[0] == 1 ? $correctImage : $incorrectImage; ?>
					<p>
						The United States does not have an official language
					</p>
					
				</div>
				
				<div id="answer2">
					<h3>
						2. How many states have English as their official language? 
					</h3>
					<?php echo $correctArray[1] == 1 ? $correctImage : $incorrectImage; ?>
					<p> 32 States (and all 5 territories) have English as (at least one of) their official language(s) </p>
				</div>
			  
				<div id="answer3">
					<h3 id="question3">
						3. How many states more than one official language?
					</h3>
					<?php echo $correctArray[2] == 1 ? $correctImage : $incorrectImage; ?>
					<p>
						3 States have more than one official languages: South Dakota, Hawaii, and Alaska
					</p>
				</div>
				
				<div id="answer4">
					<h3 id="question4">
						4. How many languages are spoken in the United States?
					</h3>
					<?php echo $correctArray[3] == 1 ? $correctImage : $incorrectImage; ?>
					<p>
						Over 350 unique languages are spoken within the United States
					</p>
				 </div>
				 
				<div id="answer5">
				  <h3 id="question5">
					5. How many people are native speakers of a language other than English, in the United States?
				  </h3>
				  <?php echo $correctArray[4] == 1 ? $correctImage : $incorrectImage; ?>
				  <p>
					Over 67.8 million people in the US are native speakers of a language other than English, as of 2019; the number is higher now
				  </p>
				</div>
			</div>
			
			<div id="rightSide" class="resultsItem spacer">
				</div>
		
			
		</div>
    </main>
  </body>
</html>
