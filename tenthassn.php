<html>
    <head>
        <script type="text/javascript"
                >
            function cleandiv()
            {            document.getElementById("result").innerHTML="";
            }
        
        
        </script>
        <title>
        String Comparator
        </title>
    <link rel="stylesheet" href="tenthassn.css">
        
    </head>
    
    <body>
        <form action="#" method="POST">
        <input id = "inp" type="text" name="abc" ><br>
        <input id="inp" type="text"  name="bcd"><br>
<input type="submit" value="Compare" id="sub" ><br>
            
            
            <input id="sub" type="reset" value="clear" onclick="cleandiv()">;
             
        </form>
    
            <div id="result">
                
                <?php  
             if($_SERVER['REQUEST_METHOD']=="POST")
            {
                
                
                $str1=$_POST["abc"];
                $str2=$_POST["bcd"];

        

                $ind= (strlen($str1) < strlen($str2) ) ? strpos($str2,$str1):strpos($str1,$str2);

                echo "The string is at position ".$ind+1;
            }

            ?>
            
            </div>
        
        
       
    
    </body>
</html>