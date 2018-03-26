var pointA = {};
pointA.x = 0;
pointA.y = 0;

var pointB = {};
pointB.x = 0;
pointB.y = 3;

var pointC = {};
pointC.x = 4;
pointC.y = 0;

console.log(isRightTriangular(pointA, pointB, pointC));

function isRightTriangular(pointA, pointB, pointC) {
	var a = getLength(pointA, pointB);
	var b = getLength(pointB, pointC);
	var c = getLength(pointC, pointA);

 	return Math.pow(a, 2) ===  Math.pow(b, 2) + Math.pow(c, 2) || 
	Math.pow(b, 2) ===  Math.pow(a, 2) + Math.pow(c, 2) ||
	Math.pow(c, 2) ===  Math.pow(a, 2) + Math.pow(b, 2);
}

function getLength(pointA, pointB) {
	return Math.sqrt(Math.pow((pointB.x - pointA.x), 2) + Math.pow((pointB.y - pointA.y), 2));
}
