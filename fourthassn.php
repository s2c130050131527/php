<html>
    <head>
        <title>Variable argument Sum</title>
        <link rel="stylesheet" type="text/css" href="fourthassn.css">
        <script type="text/javascript" src="fourthassn.js"></script>  
        <?php 
        
        function add()
        {
            $sum=0;
            $nofargs=func_num_args();
            for($i=0;$i<$nofargs;$i++)
            {
                $sum+=func_get_arg($i);
            }
            return $sum;
            
        }
        
        ?>
    </head>

    <body>
        <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post" >        <div>
        <div id="tbox">
        <input type="text" name="nofbox" id="nofbox" value="2" readonly>   
        <input type="text" name="box1" id="box1" required>
        <input type="text" name="box2" id="box2" required>
        </div>
            
        <div id="addb">
        <input type="button" value="Add More" onclick="addbutton()">
        
        </div>
        <input type="submit" >
        </div>
            </form>
        
        <div id="result">
        <?php 
            if($_SERVER['REQUEST_METHOD']=='POST')
                {
            if(isset($_POST))
            {
                $no=$_POST['nofbox'];
                $arr=array();
              
                for($i=1;$i<=$no;$i++)
                {
                    $arr[$i]=$_POST['box'.$i];
    
                }
            }
            echo call_user_func_array('add',$arr);
            }
            ?>
        </div>

    </body>
    
    
</html>
