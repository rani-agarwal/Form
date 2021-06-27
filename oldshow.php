<pre><?php
// $searchthis = "Username";
// $rs = array();

// $open = @fopen("store.txt", "r");
// if ($open)
// {
//     $searchthis=$_POST['uname'];
    
//         while (!feof($open))
//         {
//             $buffer = fgets($open);
//             if(strpos($buffer, $searchthis) !== FALSE)
//                 $rs[] = $buffer;
//         }
//         fclose($open);
//     }

// print_r($rs);
//

$myFile = "store.txt";
$lines = file($myFile);//file in to an array
//var_dump($lines);

//unset($lines[0]);
//unset($lines[1]); // we do not need these lines.
if(isset($_POST['submit']))
{
    foreach($lines as $line) 
    {
        $var = explode(':', $line);

                if ( ! isset($var[1])) 
            {
                $var[1] = null;
            }
                $arr[$var[0]] = $var[1];
    }
print_r($arr);
}else{
    echo "Username not found !!";
}
?>
</pre>
