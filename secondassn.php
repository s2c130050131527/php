<html>
<head>
    <?php 
    
    function square($var)
    {
        return $var*$var;
    }
    
    ?>
    <title>
    Squares
    </title>
</head>
    <body>
        <div id="tab">
            <table>            <tr><td>Number</td><td>Squares</td></tr>
            <?php 
                for($var=1;$var<=20;$var++)
                {
                    
                    echo "<tr><td>".$var."</td><td>".square($var)."</td></tr>";
                    
                }
            ?>
                </table>

        </div>
        
    </body>
</html>