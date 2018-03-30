//Quicksort

var arr = [12,4,3,10,1,20];
quickSort(arr);

function swap(arr, firstIndex, secondIndex) {
	const tmp = arr[firstIndex];
	arr[firstIndex] = arr[secondIndex];
	arr[secondIndex] = tmp;
}

function partition(arr, left, right) {
	var pivot = arr[Math.floor((right + left) / 2)],
	i = left,
	j = right;

	while (i <= j) {

		while (arr[i] < pivot) {
			i++;
		}

		while (arr[j] > pivot) {
			j--;
		}

		if(i <= j) {
			swap(arr, i, j);
			i++;
			j--;
		}
	}
	return i;
}

function quickSort(arr, left, right) { 
	var index;
	if(arr.length > 1) {
		index = partition(arr, left, right);

		if(left < index - 1) {
			quickSort(arr, left, index - 1);
		}
		if(index < right) {
			quickSort(arr, index, right);
		}
	}
	return arr;
}
var result = quickSort(arr, 0, arr.length - 1);