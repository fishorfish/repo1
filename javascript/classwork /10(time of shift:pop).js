console.time("10000 push и pop");
let arr = [];

for(let i = 0; i < 10000; i++) {
	arr.push(i);
}
for(let i = 0; i < 10000; i++) {
	arr.pop(i);
}
console.timeEnd("10000 push и pop");






console.time("10000 shift и unshift");
let arr2 = [];

for(let i = 0; i < 10000; i++) {
	arr2.shift(i);
}
for(let i = 0; i < 10000; i++) {
	arr2.unshift(i);
}
console.timeEnd("10000 shift и unshift");
