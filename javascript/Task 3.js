var x = getRandom(0, 10);
console.log(x);
describeNumber(x);


function getRandom(min, max) {
	var random = Math.random() * (max - min) + min;
	random = Math.floor(random);
	return random;
}

function describeNumber(x) {
	var result;
	switch(x) {
		case 0: 
			result = "ноль";
			break;
		case 1:
			result = "один";
			break;
		case 2:
			result = "два";
			break;
		case 3:
			result = "три";
			break;
		case 4:
			result = "четыре";
			break;
		case 5: 
			result = "пять";
			break;
		case 6: 
			result = "шесть";
			break;
		case 7: 
			result = "семь";
			break;
		case 8: 
			result = "восемь";
			break;
		case 9: 
			result = "девять";
			break;
	}
	console.log(result);
}