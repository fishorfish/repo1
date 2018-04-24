function pow(x, n) {
	if(n === 0) {
		return 1;
 	} else if(n === 1) {
 		return x;
 	} else {
 		return x + pow(x, n-1);
 	}

}