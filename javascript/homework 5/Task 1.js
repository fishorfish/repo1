
var student = {
	name: "Harry",
	surname: "Potter",
	age: 23,
	interests: ["sport", "science", "code"],
	university: "ITMO",
};

function studentProperies(Object) {
	 for(var propName in Object) {
	 	console.log(Object[propName]);
	 }
}
studentProperies(student);