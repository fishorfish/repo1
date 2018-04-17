function dateTimer() {
	var now = new Date();
	var hours = checkTime(now.getHours());
	var colorHours = colorWrapper("green", hours);
	var minutes = checkTime(now.getMinutes());
	var colorMinutes = colorWrapper("blue", minutes);
	var seconds = checkTime(now.getSeconds());
	var colorSeconds = colorWrapper("red", seconds);
	
	document.getElementById('dtm').innerHTML = colorHours + ":" + colorMinutes + ":" + colorSeconds;
	setTimeout('dateTimer()', 1000);
}

function checkTime(number) {
	if(number < 10) {
		number = "0" + number;
	}
	return number;
}

function colorWrapper(color, text) {
  return "<span style='color:"+color+";'>"+text+"</span>";
}