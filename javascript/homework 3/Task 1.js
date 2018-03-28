var str = "56";
var arr = str.split('');
var sum = 0;
for (i = 0; i < arr.length; i++) {
	var num = parseInt(arr[i]);
	sum += num;
}
console.log(sum);