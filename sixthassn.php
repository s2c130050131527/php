<html>
<head>
    <title>
    Palindrom
    </title>    
    <link rel="stylesheet" href="sixthassn.css">
    
</head> 
    <body>
        <form action="#" method="post">
            <input type="text" name="pal" id="pal">
            <input type="submit" >
        </form>
        
        <div id="result">
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $str=$_POST['pal'];
                $strrev=strrev($str);
                
                if($str==$strrev)
                {
                    echo "it is a palindrom";
                
                }
                else{
                    echo "not a palindrom";
                }
                
            }
            

            ?>
        </div>
    </body>
</html>