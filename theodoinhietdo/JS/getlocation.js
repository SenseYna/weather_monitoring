// JavaScript Document
function weather() {
	if (navigator.geolocation) {
		var options = {
			enableHighAccuracy: true,
			timeout: 60000,
			maximumAge: 600000
		};
		navigator.geolocation.getCurrentPosition(showPositionSuccess, showPositionError, options);
	} else {
		alert("Geolocation không hỗ trợ trên trình duyệt này.");
	}

	function showPositionSuccess(position) {
		var location = document.getElementById("location");
		var apiKey = "36f057c8b48ea82b2f89578b611899e6";
		var url = "https://api.forecast.io/forecast/";

		navigator.geolocation.getCurrentPosition(success, error);

		function success(position) {
			lat = position.coords.latitude;
			long = position.coords.longitude;
			tz = position.coords.location;
			document.getElementById("lat").value = lat;
			document.getElementById("long").value = long;
			document.getElementById("tz").value = tz;
			$.getJSON(
				url + apiKey + "/" + lat + "," + long + "?callback=?",
				function (data) {
					document.getElementById("temp").value = (data.currently.temperature - 32) * 5 / 9;
					document.getElementById("uv").value = data.currently.uvIndex;
				}
			);
		}

		function error() {
			location.innerHTML = "Unable to retrieve your location";
		}
	}

	function showPositionError(error) {
		switch (error.code) {
			case error.PERMISSION_DENIED:
				$("#location").html("User denied the request for Geolocation.");
				break;
			case error.POSITION_UNAVAILABLE:
				$("#location").html("Location information is unavailable.");
				break;
			case error.TIMEOUT:
				$("#location").html("The request to get user location timed out.");
				break;
			case error.UNKNOWN_ERROR:
				$("#location").html("An unknown error occurred.");
				break;
		}
	}
}
weather();
