let cat = {
	name: "Барсик",
	age: 3,
	keyword: 'мяу'
	}; 

let dog = {
	name: "Шарик",
	age: 8,
	keyword: 'гав'
	};

function logHello() {
	console.log(this.keyword + "! Меня зовут" + this.name);
}
cat.hello = logHello;
dog.hello = logHello;
cat.hello();
dog.hello();


//рефакторинг

let cat = {
	name: "Барсик",
	age: 3,
	keyword: 'мяу',
	hello: function logHello() {
	console.log(this.keyword + "! Меня зовут" + this.name);
	}
};
let dog = {
	name: "Шарик",
	age: 8,
	keyword: 'гав',
	hello: function logHello() {
	console.log(this.keyword + "! Меня зовут" + this.name);
	}
};
cat.hello();
dog.hello();
