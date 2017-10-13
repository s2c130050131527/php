<html>
    <head>
        <title>Table Print</title>
    </head>
    
    <body>
        <div id="mform">
            <form method="post" action=<?php echo $_SERVER['PHP_SELF'] ?> id ="abc">
                
                <input type="number" name="tabnum" required>
                <input type="submit" >
                
            </form>    
        </div>
        <div id="multab">
            <table>
                <tr>
                    <th>Num</th>
                    <th>Mul</th>
                    <th>Val</th>
                </tr>
            
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if(isset($_POST))
                    {
                        for($i=0;$i<10;$i++)
                        {
                        echo "<tr><td>".$_POST['tabnum']."</td><td>".$i."</td>
                        <td>".$_POST['tabnum']*$i."</td></tr>";
                        }
                    }
                }
                ?>
            </table>
        </div>
        
        
 
        
    
    
    
    </body>
    
</html>