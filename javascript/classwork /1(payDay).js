
var oklad = prompt("Введите количество оклада");
var days = prompt("Введите количество отработанных дней");
var hours = prompt("Введите количество отработанных часов");
var g = parseFloat(oklad) / hours * days * (0,87);

alert(g.toFixed(2));

