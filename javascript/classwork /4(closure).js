function makeGeneration() {
	var arr = [];
	var i = 0;
	return function() {
		arr.push(++i); // random
		return arr[arr.length - 1]; //random
	}
}
var generator = makeGeneration();
console.log(generator());
console.log(generator());
console.log(generator());
console.log(generator());
console.log(generator());