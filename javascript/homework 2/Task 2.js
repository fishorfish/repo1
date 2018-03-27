var pointA = {};
pointA.x = parseInt(prompt("Введите координату вершины А по оси х"));
pointA.y = parseInt(prompt("Введите координату вершины А по оси y"));
pointA.z = parseInt(prompt("Введите координату вершины А по оси z"));

var pointB = {};
pointB.x = parseInt(prompt("Введите координату вершины B по оси х"));
pointB.y = parseInt(prompt("Введите координату вершины B по оси y"));
pointB.z = parseInt(prompt("Введите координату вершины B по оси z"));

var pointC = {};
pointC.x = parseInt(prompt("Введите координату вершины C по оси х"));
pointC.y = parseInt(prompt("Введите координату вершины C по оси y"));
pointC.z = parseInt(prompt("Введите координату вершины C по оси z"));

console.log(isRightTriangular(pointA, pointB, pointC));

function isRightTriangular(pointA, pointB, pointC) {
	var a = getLengthInPow2(pointA, pointB);
	var b = getLengthInPow2(pointB, pointC);
	var c = getLengthInPow2(pointC, pointA);

 	return a === b + c || 
		b === a + c || 
		c === a + b;
}

function getLengthInPow2(pointA, pointB) {
	return Math.pow((pointB.x - pointA.x), 2) + Math.pow((pointB.y - pointA.y), 2) + Math.pow((pointB.z - pointA.z), 2);
}
