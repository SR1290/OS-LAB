<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post">
        Enter units consumed:
        <input type = "number" name="units" required/>
        <input type = "submit" value="calculate" />
    </form>
    <?php
        if(isset($_POST['units']))
        {
            $units=$_POST['units'];
            if($units <= 100)
                {
                    $bill_amt = $units *5;
                }
            elseif($units <= 200)
                {
                    $bill_amt = ( (100*5) + ($units - 100 )*7 );
                }
            else
                {
                    $bill_amt = ( (100*5) + (100*7) + ($units-200)*10 ); 
                }
            echo "<br>";
            echo "-:ELECTRICITY BILL:-" ."<br>";
            echo "UNITS CONSUMED : " . $units . "<br>";
            echo "TOTAL BILL AMOUNT IS: ", $bill_amt;
        }
    ?>
</body>
</html>