<?php 
class Test
{
	public function actionSay($name, $message = "Hi ")
    {
    	$answer = $message . $name;
        return $answer;
    }

	public static function stat()
    {
    	$a = 10;
    	$b = 2;
    	echo "I am static method";
        return $a+$b;
    }

}



// $t1 = new Test();
// $m = $t1->actionSay("Nick", "Hello ");
// echo $m;

echo Test::stat();  // echo 12;


// 06.07.18