
var student = {
	name: "Harry",
	surname: "Potter",
	age: 23,
	interests: ["sport", "science", "code"],
	university: "ITMO",
};

studentProperies(student);

function studentProperies(student) {
	 for(var propName in student) {
	 	console.log(student[propName]);
	 }
}
