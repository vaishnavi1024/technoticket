 <?php
        $oldnum=array(0);
        $num=0;

        function generate($num1,$oldnum1)
        {
            $num1=rand(1,15);
            //echo"$num1";
            $result=isthere($num1,$oldnum1);
            return($result);
        }
        function isthere($num2,$oldnum2)
        {
            if(array_search($num2,$oldnum2,TRUE)=="")
            {
                //echo" not there";
                array_push($oldnum2,$num2);
                return $oldnum2;
            }
            else
            {
                //echo"  there";
                $oldnum2=generate($num2,$oldnum2);
                return $oldnum2;
            }
        }
?>