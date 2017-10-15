<html>
    <head>
        <link rel="stylesheet" type="text/css" href="seventhassn.css">
        <title>
        Username
        </title>
    </head>
    <body>
        <table id="usertab">
            <tr ><th>Username</th><th>Password</th></tr>
        
    <?php 
$arr =array("abc"=>"12345","bcd"=>'pqrstu',"shrey"=>9726679476);

foreach($arr as $user=>$pass)
{
    echo "<tr><td>".$user."</td> <td>".$pass."</td></tr>";
}
?>
            </table>
    </body>
    </html>


