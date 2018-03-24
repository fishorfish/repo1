var a = getRandom(1, 6);
var b = getRandom(1, 6);
var c = getRandom(1, 6);
var result = isSamePair(a, b, c);
console.log(a, b, c);
console.log(result);


function getRandom(min, max) {
	var random = Math.random() * (max - min) + min;
	random = Math.floor(random);
	return random;
} 

function isSamePair(a, b, c){
<<<<<<< HEAD
	return a === b || a === c || b === c;
=======
	return (a === b || a === c || b === c);
>>>>>>> 36a1626ecff91ecc44b403fe617012acecc32f46
}
