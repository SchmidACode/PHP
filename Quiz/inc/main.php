<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body onload="nextQuestion()">
    <h1 id="question_number" name="question_number">Quitz</h1>
    <form id="question" action="result.php" method="post">

        <!--<input type="button" value="next" onclick="nextQuestion()">-->
    </form>
    <script>
        var questionNumber = 0;
        function nextQuestion()
		{
			let request = new XMLHttpRequest();
            request.onreadystatechange = function () {
                document.getElementById("question_number").innerHTML = request.responseText;
            }
            request.open("GET", "question.php?q="+questionNumber, true);
            request.send();
            questionNumber++;
		}
		
    </script>
</body>
</html>