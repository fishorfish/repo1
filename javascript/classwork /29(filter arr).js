arr = [1,2,3,-1,-2,-3];
var arr2 = arr.filter(function(el) {
	return el > 0;
}).map(function(el) {
	return Math.sqrt(el);
});