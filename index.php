<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
    <script>
        if( navigator.geolocation )
        {
            // Call getCurrentPosition with success and failure callbacks
            navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
            alert("Sorry, your browser does not support geolocation services.");
        }
        function success(position)
        {
            var latlong = position.coords.latitude + "," + position.coords.longitude;
            console.log(latlong);
            document.getElementById('loc_frame').src="https://maps.google.com/maps?q=" + latlong + "&output=embed";
        }
        function fail()
        {
            console.log('cannot get your location');
        }
    </script>

</head>
    <body>
    <?php
     if(isset($_POST['location_var'])){
        $lat = $_POST['lati'];
        $lon = $_POST['long'];
        ?>
            <iframe width="100%" height="860" src="" ></iframe>
        <?php
     }
    ?>
    <form method="POST" action="example.php">
        <input type="text" id="var_lati" value="location variable" name="lati">
        <input type="text" id="var_long" value="location variable" name="long">
        <button type="submit" name="location_var">Submit</button>
    </form>
    </body>
</html>
