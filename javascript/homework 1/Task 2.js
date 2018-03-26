var x = getRandom(-999, 1000);
console.log(x);
describeNumber(x);

function getRandom(min, max) {
	var random = Math.random() * (max - min) + min;
	random = Math.floor(random);
	return random;
}

function describeNumber(x) {
	var resultString = "";
	resultString += checkByZero(x);
	resultString += getRangeNumber(x);
	resultString += getBitNumber(x);
	console.log(resultString);
}

function checkByZero(x) {
	if (x === 0) {
		return "нулевое число";
	} else {
	  return "";
	}
}

function getRangeNumber(x) {
	if (x < 0) {
		return "отрицательное ";
	} else {
		return "положительное "; 
	}
}

function getBitNumber(x) {
	var moduleX = Math.abs(x);
		var count = moduleX.toString().length;
		switch (count) {
			case 1:
				return "однозначное число";
			case 2:
				return "двузначное число";
			case 3:
				return "трехзначное число";
		}
}