let arr = [1, 2, 3, 3, -2, -1];

function fn(num1, num2) {
	if(num1 > num2) {
		return 1;
	} else if(num1 < num2) {
		return -1;
	} else {
		return 0;
	}
}

console.log(arr.sort(fn));