var arrA = [1,2,3];
var arrB = [2,4,1,6];

function unionArr(arrA, arrB) { 
	var arrC = arrA.concat(arrB);
	arrC.sort();

	var arr = [arrC[0]];
	for (var i = 1; i < arrC.length; i++) {
		if(arrC[i] != arrC[i-1]) {
		arr.push(arrC[i]);
		}
	}
	return arr;
}
console.log(unionArr(arrA, arrB));