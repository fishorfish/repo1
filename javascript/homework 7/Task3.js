;(function() {
	window.Task3 = {
		min: function(arr) {
			let min = arr[0];
			for (let i = 1; i < arr.length; i++) {
				if(arr[i] < min) {
					min = arr[i];
				}
			}
			return min;
		},

		max: function(arr) {
      		let max = arr[0];
			for (let i = 1; i < arr.length; i++) {
				if(arr[i] > max) {
					max = arr[i];
			 	}
      		}
       		return max;
		},

		mean: function(arr) {
			let length = arr.length;
			if (length === 0) {
				return null;
			}
			let sum = 0;
			for (let i = 1; i < arr.length; i++) {
				sum += arr[i];
			}
			return sum/length;
		},

		clone: function(arr) {
		  	var clonedArr = JSON.parse(JSON.stringify(arr));
  			return clonedArr;
			} 
	};
}() );