function addToScreen(obj) {
	const val = document.getElementById('calc_screen').value;

	if (val.length < 21) {
		if (val == '0' || val == 'OVERFLOW') document.getElementById('calc_screen').value = obj.innerHTML;
		else if (obj.innerHTML == 'x') document.getElementById('calc_screen').value = val.substr(0, val.length) + '*';
		else document.getElementById('calc_screen').value = val.substr(0, val.length) + obj.innerHTML;
	} else document.getElementById('calc_screen').value = 'OVERFLOW';
}

function clearScreen() {
	document.getElementById('calc_screen').value = '0';
}

function del() {
	var str = document.getElementById('calc_screen').value;
	if (str != '0') document.getElementById('calc_screen').value = str.substr(0, str.length - 1);
}
