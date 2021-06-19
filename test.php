
<html>

<head><title>Breakfast Point</title>

<style>

*{
    font-family:TIMES NEW ROMAN;
}

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

    <body>

    <form method="post">
        <div class="row"><br><br>
        
            <label>Enter no of Breads</label>
            <input type="text" name="bread">  &emsp;

            <label>Enter no of Vadas</label>
            <input type="text" name="vada">&emsp;

            <label>Enter no of Samosas</label>
            <input type="text" name="samosa">     
        
        </div>

        <div class="row"><br><br>
        
            <label>Enter price of Vadapav</label>
            <input type="text" name="vadapav">  &emsp;

            <label>Enter price of Samosa pav</label>
            <input type="text" name="samosapav">
               
        
        </div><br><br>

            <input type="submit" name="submit" value="Submit" class="btn btn-info">

        </form>

    </body>

</html>

<?php

if(isset($_POST['submit']))
{
    $bread = $_POST['bread'];
    $vada = $_POST['vada'];
    $samosa = $_POST['samosa'];
    $vadapav = $_POST['vadapav'];
    $samosapav = $_POST['samosapav'];

    $count1 = 0;
    $count2 = 0;

    $bread1 = $bread/2;
    $bread2 = $bread/2;

    for($i=1; $i<= $vada; $i++)
    {
        $vdpav = $vada+$bread1+$bread1;
        $count1++;
    }

    for($i=1; $i<= $samosa; $i++)
    {
        $smpav = $samosa+$bread2+$bread2;
        $count2++;
    }
    
    
    $profit = $count1*$vadapav+($count2*$samosapav);

    echo "Total Profit is = ".$profit;

}

?>