var num = prompt("Введите номер телефона");
var reg = /7 \(\d{3}\) \d{3}-\d{2}-\d{2}/;
alert(reg.test(num));


var email = prompt("Введите email");
var reg = /[a-z-0-9_.-]+@[a-z-0-9.-]+\.[a-z]+/;
alert(reg.test(email));

