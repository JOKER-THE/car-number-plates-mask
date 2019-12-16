input1.addEventListener('input', joinValues, false);
input2.addEventListener('input', joinValues, false);

function joinValues(){
    input3.value = input1.value + input2.value + 'RUS';
}

function agreeForm(id) {
	blocks = document.getElementsByName('number-block')
	blocks.forEach(function(block) {
    	block.style.display = "none";
	});
    form = document.getElementById(id)
    form.style.display = "";
}