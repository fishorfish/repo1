var password = prompt("Введите пароль");
var reg = /(?=.*[0-9])(?=.*[!@#$%])(?=.*[A-Z])(?=.*[a-z])[0-9a-zA-Z!@#$%^&*]{9,}/;
alert(reg.test(password));