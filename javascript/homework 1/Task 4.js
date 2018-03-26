var x = getRandom(1, 6);
console.log(x);
descriptionNumber(x);

function getRandom(min, max) {
	var random = Math.random() * (max - min) + min;
	random = Math.floor(random);
	return random;
}

function descriptionNumber(x){
	var result;
	switch(x){
		case 1:
			result = "плохо";
			 break;
		case 2:
			result = "неудовлетворительно";
			break;
		case 3:
			result = "удовлетворительно";
			break;
		case 4:
			result = "хорошо";
			break;
		case 5:
			result = "отлично";
			break;
	}
	 console.log(result);
}