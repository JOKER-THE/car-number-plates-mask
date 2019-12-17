function joinValues(firstInput, secondInput){
	var first = document.getElementById(firstInput);
	var second = document.getElementById(secondInput);
	var input = first.value + '.' + second.value + 'RUS';
	document.getElementById('input-number').value = input;
}

function selectForm(id) {
	document.getElementById('input-number').value = "";
	blocks = document.getElementsByName('number-block')
	blocks.forEach(function(block) {
    	block.style.display = "none";
	});
    form = document.getElementById(id)
    form.style.display = "";
}