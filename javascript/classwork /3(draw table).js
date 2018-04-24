var i = 0;
var rows = 4;
var str = "<table><tbody>" + 
"<tr><th>`№</th><th>№*2</th></tr>";
while(i < rows) {
	if(i%2) {
		str = str + '<tr style="background-color: blue">' + 
		'<td>' + (i + 1) + '</td>' +
		'<td>' + (i + 1)*2 + '</td>' + 
		'</tr>';
	} else {
		str = str + '<tr style="background-color: red">' + 
		'<td>' + (i + 1) + '</td>' +
		'<td>' + (i + 1)*2 + '</td>' + 
		'</tr>';
	}

	i++;
}
str = str + "</tbody></table>";
document.write(str);