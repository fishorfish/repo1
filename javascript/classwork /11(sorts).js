let arr = [7,9,4,3,8,2,1]; //сортировка выбором

for(let i = 0; i < arr.length; i++) {


	for(let j = 0; j < arr.length - 1 - i; j++) {
		if(	arr[j] > arr[j+i]) {
			let tmp = arr[j];
			arr[j] = arr[j+i];
			arr[j+i] = tmp; //деструктуризация, второй способ переопределить местами [man, arr[j+i]] = [arr[j+i], man]
		}
	}
}
console.log(arr);



let arr = [7,9,4,3,8,2,1]; //сортировка пузырьком
console.log(arr);
for(let i = 0; i < arr.length - 1; i++) {
	let min = arr[i];

	for(let j = i + j; j < arr.length; j++) {
		if(min > arr[j]) {
			var tmp = arr[j];
			arr[j] = min;
			min = tmp;
		}
	}
	arr[i] = min;
}
console.log(arr);
