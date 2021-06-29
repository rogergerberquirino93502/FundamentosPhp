<!--References: https://www.wa4e.com/code/crack/-->
<!DOCTYPE html>
<head><title>MD5 Cracker</title></head>
<body>
<h1>Reversing MD5 hash</h1>
<p>This application takes an MD5 hash.</p>
<pre>
Output:
<?php
$goodtext = "Not found";
if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];
    $txt = '1234';
    $show = 15;
    for($i=0; $i<strlen($txt); $i++ ) {
        $ch1 = $txt[$i]; 
        for($j=0; $j<strlen($txt); $j++ ) {
            $ch2 = $txt[$j];
            for($k=0; $k<strlen($txt); $k++){
                $ch3 = $txt[$k];
                for($l=0; $l<strlen($txt); $l++){
                    $ch4 = $txt[$l];
                      $try = $ch1.$ch2.$ch3.$ch4;
                      $check = hash('md5', $try);
                      if ( $check == $md5 ) {
                      $goodtext = $try;
                      break;
                      }
                      if ( $show > 0 ) {
                      print "$check $try\n";
                      $show = $show - 1;
                      }
                }
            }
        }
    }
    $time_post = microtime(true);
    print "Time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<p>Original Text: <?= htmlentities($goodtext); ?></p>
<form method="GET">
<input type="text" name="md5" size="40" />
<input type="submit" value="Crack MD5"/>
</form>
</body>
</html>
