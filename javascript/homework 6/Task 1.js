var student = {
	name: "Elvin",
	surname: "Smith",
	age: 24,
	university: "ITMO",
	interests: ["Interests: programming", "music", "anime"],
	biography: function() {
		console.log("My biography:" + " " + this.name +  " "  + this.surname + ", " + this.age +  ", " + this.university +  ", " + this.interests);
	}
};
student.biography();