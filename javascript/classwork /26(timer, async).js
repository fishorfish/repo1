
//timer, асинхронность 
function doSomething(callback) {
	setTimeout(callback, 5000)
}
doSomething(function() {
	alert('hi');
});