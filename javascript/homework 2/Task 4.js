console.log(getLengthInMeters(5, 45000));

function getLengthInMeters(measure, length) {
	var result;
	switch(measure) {
		case 1: 
			result = 0.1 * length;
			break;
		case 2:
		 	result = 1000 * length;
		 	break;
		case 3:
		 	result = 1 * length;
		 	break;
		case 4: 
		 	result = 0.001 * length;
		 	break;
		case 5:
		 	result = 0.01 * length;
		 	break;
		default:
		result = "unknown measure"
	}
  return result;
}