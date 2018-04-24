;(function() {
	window.GameMaster = function GameMaster() {
		this.player1 = new Player('Котун', 3, 9, 100, 10, 25);
		this.player2 = new Player('Сябау', 7, 12, 100, 10, 25);
		this.fight();
	}

	GameMaster.prototype.fight = function() {
		var isFirst = Math.floor(Math.random() * 2);
			if(isFirst) {
				this.player2.protect(this.player1.attack());
				if(this.player2.isAlive()) {
					console.log(this.player2.getInfo());
				} else {
					console.log('Win player' + this.player1.name);
					return;
				}
				this.player1.protect(this.player2.attack());
				if(this.player1.isAlive()) {
					console.log(this.player1.getInfo());
				} else {
					console.log('Win player' + this.player2.name);
					return;
				}
			} else {
				this.player1.protect(this.player2.attack());
				if(this.player1.isAlive()) {
					console.log(this.player1.getInfo());
				} else {
					console.log('Win player' + this.player2.name);
					return;
				}
				this.player1.protect(this.player1.attack());
				if(this.player2.isAlive()) {
					console.log(this.player2.getInfo());
				} else {
					console.log('Win player' + this.player1.name);
					return;
				}
			}
	var that = this;
	setTimeout(function() {
		that.fight();
	}, 1000);
}


		function Player(nickName, minAr, maxAr, health, minA,maxA) {
			this.name = nickName;
			this.health = health;
			this.minA = minA;
			this.maxA = maxA;
			this.minAr = minAr;
			this.maxAr = maxAr;

		}
	Player.prototype.attack = function() {
		return Math.floor(Math.random() * (this.maxA - this.minA + 1) + this.minA);
	}
	Player.prototype.protect = function(attack) {
		var currDef = Math.floor(Math.random() * (this.maxAr - this.minAr + 1) + this.minAr);
		var damage = attack - currDef;
		if(damage > 0) this.health -= damage;
	}

	Player.prototype.getInfo = function() {
		return "Player: " + this.name + " Health " + this.health;
	}

	Player.prototype.isAlive = function() {
		return this.health > 0;
	}
}());