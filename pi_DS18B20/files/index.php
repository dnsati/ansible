<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="refresh" content="600">

    <title>Sensor Data</title>
    <style>
        body {
            width: 40em;
            margin: 0 auto;
            font-family: Tahoma, Verdana, Arial, sans-serif;
            background: url('thermobackground.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;
        }

        em1 {
            color: yellowgreen;
            font-style: normal;
            font-size: 90px;
            text-align: center;
            background-color:grey;
        }

        em2 {
            color: blue;
            font-style: normal;
            font-size: 130px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>
        <?php echo "Room temperature live!" ?>
    </h1>
    <p>
        <em2>
            <?php echo date("H:i:s");?>
        </em2>
    </p>
    <button onClick="window.location.reload();">

    <?php
$filename = '/sys/bus/w1/devices/28-020192464358/w1_slave';

if (file_exists($filename)) {    
    $pi_data= file_get_contents('/sys/bus/w1/devices/28-020192464358/w1_slave', true);    
    preg_match_all('/(?<=t=).*$/', $pi_data, $output_array); // regex to array
    $temp = ($output_array[0][0] . "  ")/1000;
    echo "<p><em1>&#127777;$temp  &#8451;</p>";}
else {
    echo "raspi data $filename does not exist!";
}

?>
</body>