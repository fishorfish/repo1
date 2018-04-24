let arr = [{x:1},{x:2},{x:3}];


function fn(obj1, obj2) {
	if(obj1.x > obj2.x) {
		return 1;
	} else if(obj1.x < obj2.x) {
		return -1;
	} else {
		return 0;
	}
}

console.log(arr.sort(fn));