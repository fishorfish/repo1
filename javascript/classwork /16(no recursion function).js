function pow(x, n) {
	if(n === 0) {
		return 1;
 	} else if(n === 1) {
 		return x;
 	} else {
 		let m = x;
 		for(let i = n; i > 1; i--) 
 			m *= x;
 		return m;
 	}
 }