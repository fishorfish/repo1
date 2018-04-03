var inputNumber = prompt("Введите количество чисел Фибоначчи");
printFibonacciNumbers(inputNumber);

function printFibonacciNumbers(quantity) {
  for (i = 0; i < quantity; i++) {
    console.log(getFibonacciNumberByIndex(i));
  }
}

function getFibonacciNumberByIndex(index) { 
  if (index <= 0) {
    return 0;
  } else if (index == 1 || index == 2) {
    return 1;
  } else { 
      return getFibonacciNumberByIndex(index - 1) + getFibonacciNumberByIndex(index - 2);
  }
}