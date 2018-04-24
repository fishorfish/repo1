var a = prompt("Введите строку для шифрования");
var b = prompt("Введите ключ для шифрования");

var str = '';
var i = 0;
var temp;
while (i < a.length) {
	temp = str + a.charCodeAt(i) * b.charCodeAt(i);
	str = str + String.fromCharCode(temp);
	i++;
}
alert(str);
console.log(str);
