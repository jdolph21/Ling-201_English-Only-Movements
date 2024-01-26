<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Quiz</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
	</style>
  </head>
  
  <header>
    <nav>
      <ul>
        <li class="nav"><a class="page" href="index.html"><b>Home</b></a></li>
        <li class="nav"><a class="page" href="myths_debunked.html"><b>Myths Debunked</b></a></li>
        <li class="nav"><a class="page" href="us_language_history.html"><b>US Language History</b></a></li>
        <li class="nav"><a class="page selected" id="quizPage"><b>Quiz</b></a></li>
      </ul>
    </nav>
  </header>
  
  <body class="quiz">
    <main>
      
	  <div id="quizGrid">
			<div id="leftSide" class="spacer quizItem">
			</div>

		  <div class="quiz">
			<h1>Quiz</h1>
			<form id="quiz" action="results.php" method="post">
				<?php 
					$questions = array(
									array("What is the official language of the United States?", "American", "Spanish", "English", "Albanian", "None of the Above"),
									array("How many states have English as their official language?", "0-20", "21-30", "31-40", "41-50", "51-60"),
									array("How many states more than one official language?", "0-5", "6-10", "11-15", "16-20", "21-25"),
									array("How many languages are spoken in the United States?", "<10", "11-100", "101-200", "201-350", ">350"),
									array("How many people are native speakers of a language other than English, in the United States?", "<10 million", "10-25 million", "25-50 million", "50-60 million", ">60 million")
									);

					$counter = 1;
					
					foreach ($questions as $question) {
						
						echo "<div id='question" . $counter . "' class='quizItem questions'>";
						echo "<h3>" . $counter . ". " . $question[0] . "</h3>";
						
						
						for ($i = 1; $i < count($question); $i++) {
							echo "<div class='choices'>";
							echo "<input type='radio' id='a$counter$i' name='answer$counter' value='" . $question[$i] . "' required/>";
							echo "<h4>" . $question[$i] . "</h4>";
							echo "<br />";
							echo "</div>";
						}
						
						
						echo "</div>";
						
						++$counter;
					}
				
				?>
			  <input class ="quizItem submit" type="submit" form="quiz" value="Submit"/>
			</form>
		  </div>
		  
		  <div id="rightSide" class="spacer quizItem">
			</div>
		</div>
    </main>
  </body>
</html>
