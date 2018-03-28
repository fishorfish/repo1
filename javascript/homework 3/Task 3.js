var password = prompt("Введите пароль");
var reg = /(?=.*[0-9]{2,})(?=.*[!@#$%])(?=.*[a-zA-Z])[0-9a-zA-Z!@#$%^&*]{9,}/;
alert(reg.test(password));