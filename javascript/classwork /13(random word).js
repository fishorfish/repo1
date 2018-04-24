let vowels = ['а', 'е', 'ё', 'и', 'о', 'э', 'у', 'ы', 'ю', 'я'];
let consonant = ['б', 'в', 'г', 'д', 'ж', 'з', 'й', 'к', 'л', 'м', 'н', 'п', 'р', 'с', 'т', 'ф', 'х', 'ц', 'ч', 'ш', 'щ'];
let wordLength = Math.floor(Math.random() * 3) + 3;
let firstLetter = Math.floor(Math.random() * 2);
let word = '';
let currLetter = firstLetter;
for(let i = 0; i < wordLength; i++) {
	if(currLetter) {
		word+=consonant[Math.floor(Math.random() * consonant.length)];
		currLetter = 0;
	} else {
		word+=vowels[Math.floor(Math.random() * vowels.length)];
		currLetter = 1;
	}
}
console.log(word);