let arr = [1, 2, 3, 3, -2, -1];

function filter(a, pred) {
	let result = [];
	for(let i = 0; i < a.length; i++) 
		if(pred(a[i])) 
			result.push(a[i]);

	return result;
}

function isNegative(num) {
	return num < 0;
}

console.log(filter(arr, isNegative));