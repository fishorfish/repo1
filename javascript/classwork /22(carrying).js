function mat_model(c1, c2, c3, c4) {
  return function(x) {
    return c1 + c2 *x + c3*x*x + c4*x*x*x;
  }
}
var model = mat_model(1,2,3,4);
console.log(model(10));