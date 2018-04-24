var a = {
	x: 2,
	y: 2
};
var b = {};

for(var propName in a) {
	b[propName] = a[propName];
}

b["z"] = 3;
console.dir(a);
console.dir(b);