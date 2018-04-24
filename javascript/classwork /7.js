var str = "Привет, мир";
var a = prompt("Введите слово");

var template = '';
var i = 0;
var arr, reg, result;
while(i < a.length) {
  var arr = a.split('');
  arr[i] = ".";
  template = arr.join('');
  var reg = new RegExp(template, 'i');
  var result = str.match(reg);
  if(result !==null) {
      alert(result[0]);
      break;
  }
  i++;
}