var str = "сосисочки";
var symbol = "с";
var arr = str.split('');
for (i = 0; i < str.length; i++) {
	if (arr[i] === symbol) {
		arr[i] += symbol; 
	} 
}
var result = arr.join('');
console.log(result);