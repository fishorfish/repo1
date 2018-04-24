function madeCounter() {
  var clickCounter = 0;
  
  return function() {
    return ++clickCounter;
  }
}
var counter1 = madeCounter();
console.log(counter1());
console.log(counter1());
console.log(counter1());
console.log(counter1());

var counter2 = madeCounter();
console.log(counter2());
console.log(counter2());