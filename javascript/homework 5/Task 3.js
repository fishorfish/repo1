var a = prompt("Введите количество чисел Фибоначчи");
  for (i = 0; i <= a; i++) {
    console.log(fibonacci(i));
  }


function fibonacci(i) { 
  if (i <= 0) {
    return 0;
  } else if (i == 1 || i == 2) {
    return 1;
  } else {
      return fibonacci(i - 1) + fibonacci(i - 2);
}
}

