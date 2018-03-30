var arr = [12,4,3,10,1,20];
console.log("Before " + arr);
var max = Math.max.apply(Math, arr);
var min = Math.min.apply(Math, arr);
for(i = 0; i < arr.length; i++) {
	if(arr[i] === max) {
		delete arr[i];
	}
	if(arr[i] === min) {
		delete arr[i];
	}
}
console.log("After " + arr);