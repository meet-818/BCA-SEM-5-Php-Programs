<html>
    <body>
     <form method="post">
       Enter Fibonacci size:
           <input type="number"  name="fibonacci">
		   <button name="Submit"value="Submit">Submit</button>   
     </form>
    </body>
</html>
<?php
    if($_POST)
    {
        $num = $_POST['fibonacci'];
        $a=0;
        $b=1;
        for($i=0;$i<=$num;$i++)
        {
            echo $a."<br>";
            $c = $a + $b;
            $a=$c;
            $b=$c;
            
        }
    }


?>