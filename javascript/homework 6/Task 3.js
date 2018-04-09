var getUniqRandomInt = (function() {
  var generatedNumbers = [];
  
  return function() {
    while(generatedNumbers.length < 100) {
      var randomnumber = Math.floor(Math.random()*100) + 1;
      if(generatedNumbers.indexOf(randomnumber) > -1) continue;
      generatedNumbers[generatedNumbers.length] = randomnumber;
      return randomnumber;
    }
  };
})();

//test
var result = [];
for (var i = 0; i < 100; i++) {
  result[i] = getUniqRandomInt();
}
result.sort(compareNumbers);
console.log(result.toString());

function compareNumbers(a, b) {
  return a - b;
}