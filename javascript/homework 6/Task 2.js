var input = prompt("Введите число");
getFactorial(input);

function getFactorial(n) {
	 if (n === 0 || n === 1) {
    return 1;
	} else {
	return n * getFactorial(n - 1);
	}
}
