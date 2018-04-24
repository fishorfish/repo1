;(function() {
		//функция получения размерности игрового поля
		function getSize() {
			return parseInt(window.prompt('Введите размер поля'));
		};
		function shuffle() {
			return rand(-1, 1);
		}

		function rand(min, max) {
			return Math.floor(
				Math.random()*(max - min +1)) + min;
		}
	window.matrix = {
		getField:function(parentId) {
			let parentEl = document.getElementById(parentId);

			let arr = [];
			let n = getSize();
			for(let i = 1; i <= n*n; i++) {
				arr.push(i);
			}
			arr.sort(shuffle);

			for(let j = 0; j < n*n; j++) {
				let cell = document.createElement('div');
				cell.innerText = arr[j];
				// rgb(1,2,3);
				cell.style.color = `rgb(${rand(0, 200)},${rand(0, 200)},${rand(0, 200)})`;
				cell.style.fontSize = (rand(10, 100)/10) + 'vh';
				cell.style.height = (100/n) + 'vh';
				cell.style.width = (100/n) + 'vw';
				cell.style.border = '1px solid #000';
				cell.style.textAlign = 'center';
				cell.style.float = 'left';
				parentEl.appendChild(cell);
			}
		}
	}
}());