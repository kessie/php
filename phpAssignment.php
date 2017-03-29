<!DOCTYPE html>
<html>

<head>
</head>
<body>
<?php
/**
** QUESTION 1
**convert decimal to binary using inbuilt decbin() function**/
function decimal_binary($dec)
{
	if ($dec != 0)
	{
		echo decbin($dec)."<br>";
	}
}
decimal_binary(15);//calling function decimal-binary()


/** question 2
** Function to manage the score of a class**/
function manage_grade($score)
{
	if( $score < 35 || $score < 35 || $score < 35 || $score < 35 || $score < 35 || $score < 35 || $score < 35 || $score < 35 || $score < 35 || $score < 35)
        {
            $result = "fail";
            $grade = "D";
			echo "The score is ".($score)." and the grade is ".($grade)."<br>";	//returns score user put and the equivalent grade
        }
        else if($score >= 75)
        {
            $result = "Distinction";
            $grade = "A+";
			echo "The score is ".($score)." and the grade is ".($grade)."<br>";
        }
        else if($score >= 60 && $score < 75)
        {
            $result = "First class";
            $grade = "A";
			echo "The score is ".($score)." and the grade is ".($grade)."<br>";
        }
        else if($score >= 50 && $score < 60)
        {
            $result = "Second class";
            $grade = "B";
			echo "The score is ".($score)." and the grade is ".($grade)."<br>";
        }
        else if($score >=35 && $score < 50)
        {
            $result = "Pass class";
            $grade = "C";
			echo "The score is ".($score)." and the grade is ".($grade)."<br>";
        }
        else  if ($score < 35)
        {
            $result = "Fail";
            $grade = "D";
			echo "The score is ".($score)." and the grade is ".($grade)."<br>";
        }
        
}
manage_grade(25); // calling function manage_grade()

/** question 3
** Function that sums up an array**/	
function sum_array(array $array){
	echo "sum(array) = " . array_sum($array) . "\n";//echos sum of the given array when function is called.
}
sum_array(array(12, 2, 10, 6));// calling the sum_array function to caculate sum of the given array

?>

<!-- question 4
** Create a form that takes name city and age and prints all to screen on submit-->
<!--Html form code-->
<form action="show.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Age: <input type="text" name="age"><br>
City: <input type="text" name="city"><br>
<input type="submit">
</form>

</body>
</html>