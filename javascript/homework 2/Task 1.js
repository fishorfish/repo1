var x = 3;
var y = 2;
alert(x, y);

if(x>y) {
	swap();
	alert(x, y);
} 

function swap() {
	var tmp;
	tmp = x;
	x = y;
	y = tmp;
}
