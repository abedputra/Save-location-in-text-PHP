<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Geolocation</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
    <h3>Form</h3>
   <script type="text/javascript">
	
	if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(onGeoSuccess, onGeoError);
	} else {
	    alert("Your browser or device doesn't support Geolocation");
	}
	
	// If we have a successful location update
	function onGeoSuccess(position) {
	document.getElementById("latlong").value = position.coords.latitude + ", " + position.coords.longitude;
	}
	
	// If something has gone wrong with the geolocation request
	function onGeoError(error) {
	switch(error.code) {
	case error.PERMISSION_DENIED:
	    alert("You need to allow location.")
	    break;
	case error.POSITION_UNAVAILABLE:
	    alert("Location information is unavailable.")
	    break;
	case error.TIMEOUT:
	    alert("The request to get user location timed out.")
	    break;
	case error.UNKNOWN_ERROR:
	    alert("An unknown error occurred.")
	break;
	}
	}
</script>
<form action="sent.php" method="POST">
    <div id="divSample" class="hideClass">
        Name:
        <input type="text" name="name" value="">
        <br>
        Last Name:
        <input type="text" name="lastname" value="">
        <br>
        Age:
        <input type="text" name="age" value="">
        <br>
        Company:
        <input type="text" name="company" value="">
        <br>
        Phone Number:
        <input type="number" name="pnumber" value="">
        <br>
    </div>
        <input type="hidden" id="latlong" name="latlong" value="">
        <br>
    <input type="submit" value="sent" name="submit">
</form>	
</body>
</html>
