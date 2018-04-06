const input = prompt("Введите количество дней");
printDay(input);

function printDay(number) {
	var dayNumber = parseInt(number);
 	if (dayNumber % 10 === 1 && dayNumber % 100 !== 11) {
 		alert(dayNumber + " день");
 	} else if (dayNumber % 10 >= 2 && dayNumber % 10 <= 4 && (dayNumber % 100 < 10 || dayNumber % 100 >= 20)) {
 		alert(dayNumber + " дня");
 	} else {
 		alert(dayNumber + " дней");
 	}
}
