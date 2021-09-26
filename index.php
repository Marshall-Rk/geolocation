<?php
    if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
?>
<!DOCTYPE html>
<html>
<body>
<button onclick="getLocation()">Location</button>

<p id="demo"></p>
<script>
var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>

<form method="POST">
    <p>
        <input type="text" name="latitude" placeholder="Enter latitude">
    </p>
 
    <p>
        <input type="text" name="longitude" placeholder="Enter longitude">
    </p>
 
    <input type="submit" name="submit_coordinates">
 <input type="reset" value="Reset">
</form>
</body>
</html>

