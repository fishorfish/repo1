function Iterator(_from, _to) {
	this._from = _from;
	this._to = _to;

	var curr = _from;

	this.next = function() {
		if(this._from < this._to)
			curr++;
		else
			curr--;
		return curr;
	}
}

var myIterator1 = new Iterator(10,20);
console.log(myIterator1.next());
console.log(myIterator1.next());
console.log(myIterator1.next());
console.log(myIterator1.next());
console.log(myIterator1.next());