<!DOCTYPE html>
<html>
<head>
    <title>SPOJ HOTELS</title>
</head>
<body>
    <form action="" method="post">
        <p>Enter M: <input type="text" name="m"></p>
        <p>Enter N[]: <input type="text" name="n"></p>
            <button type="submit">Ok</button>

    </form>
    
    <?php 

        $m = $_POST['m'];
        $n = $_POST['n'];
        $arr = [];
        $arr = explode(" ", $n);

        $l = 0;
        $r = 0;
        $res = 0;
        $temp = 0;
        $k = 0;

        $k = count($arr);

        while ($r < $k) {
            $temp += intval($arr[$r]);

            while ($temp > $m) {
                $temp -= $arr[$l];
                $l++;
            }

            $res = max($res, $temp);
            $r++;
        }

        echo $res;
        
    ?>

</body>
</html>