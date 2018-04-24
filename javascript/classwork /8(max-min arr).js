var arr = [2,3,7,13,5,0,20];
let min = arr[0];
let max = arr[0];

for(let i = 1; i < arr.length; i++) {
	if(arr[i] > max) {
		max = arr[i];
	}
	if(arr[i] < min) {
		min = arr[i];
	}

}