<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <title>Маска ввода номерного знака</title>
</head>
<body>
	<div>
		<form>
			<label><p><input id="active-classic" name="type" type="radio" value="1" onclick="selectForm('classic')"> Стандартный номер</p></label>
			<label><p><input id="active-army" name="type" type="radio" value="1" onclick="selectForm('army')"> Армейский номер</p></label>
			<label><p><input id="active-policy" name="type" type="radio" value="2" onclick="selectForm('police')"> Полицейский номер</p></label>
			<label><p><input id="active-bus" name="type" type="radio" value="3" onclick="selectForm('bus')"> Номер маршрутного ТС</p></label>
		</form>
	</div>
	<div>
		<form id="classic" name="number-block" style="display: none">
			<div class="car-number-block car-number-classic">
				<div class="car-number-left">
					<input id="classic-number" type="text" name="number" class="car-number-text-number" placeholder="A000AA" pattern="[А, В, Е, К, М, Н, О, Р, С, Т, У, Х, а, в, е, к, м, н, о, р, с, т, у, х]{1}[0-9]{3}[А, В, Е, К, М, Н, О, Р, С, Т, У, Х, а, в, е, к, м, н, о, р, с, т, у, х]{2}" >
				</div>
				<div class="car-number-right">
					<input id="classic-number-reg" type="text" name="region" onchange="joinValues('classic-number', 'classic-number-reg')" class="car-number-text-region" placeholder="000" pattern="[0-9]{2,3}" >
					<div class="car-number-country">
						<span>RUS</span>
						<svg class="car-number-flag">
							<rect fill="#fff" width="17" height="4"></rect>
							<rect fill="#0039a6" y="4" width="17" height="4"></rect>
							<rect fill="#d52b1e" y="8" width="17" height="4"></rect>
							<rect fill="none" width="17" height="12" stroke="#000" stroke-width="1"></rect>
						</svg>
					</div>
				</div>
			</div>
		</form>
	</div>
	<p></p>
	<div>
		<form id="army" name="number-block" style="display: none">
			<div class="car-number-block car-number-army">
				<div class="car-number-left">
					<input id="army-number" type="text" name="number" class="car-number-text-number" placeholder="0000AA" pattern="[0-9]{4}[А, В, Е, К, М, Н, О, Р, С, Т, У, Х, а, в, е, к, м, н, о, р, с, т, у, х]{2}">
				</div>
				<div class="car-number-right">
					<input id="army-number-reg" type="text" name="region" onchange="joinValues('army-number', 'army-number-reg')" class="car-number-text-region" placeholder="000" pattern="[0-9]{2,3}">
					<div class="car-number-country">
						<span>RUS</span>
						<svg class="car-number-flag">
							<rect fill="#fff" width="17" height="4"></rect>
							<rect fill="#0039a6" y="4" width="17" height="4"></rect>
							<rect fill="#d52b1e" y="8" width="17" height="4"></rect>
							<rect fill="none" width="17" height="12" stroke="#000" stroke-width="1"></rect>
						</svg>
					</div>
				</div>
			</div>
		</form>
	</div>
	<p></p>
	<div>
		<form id="police" name="number-block" style="display: none">
			<div class="car-number-block car-number-police">
				<div class="car-number-left">
					<input id="police-number" type="text" name="number" class="car-number-text-number" placeholder="A0000" pattern="[А, В, Е, К, М, Н, О, Р, С, Т, У, Х, а, в, е, к, м, н, о, р, с, т, у, х]{1}[0-9]{4}">
				</div>
				<div class="car-number-right">
					<input id="police-number-reg" type="text" name="region" onchange="joinValues('police-number', 'police-number-reg')" class="car-number-text-region" placeholder="000" pattern="[0-9]{2,3}">
					<div class="car-number-country">
						<span>RUS</span>
						<svg class="car-number-flag">
							<rect fill="#fff" width="17" height="4"></rect>
							<rect fill="#0039a6" y="4" width="17" height="4"></rect>
							<rect fill="#d52b1e" y="8" width="17" height="4"></rect>
							<rect fill="none" width="17" height="12" stroke="#000" stroke-width="1"></rect>
						</svg>
					</div>
				</div>
			</div>
		</form>
	</div>
	<p></p>
	<div>
		<form id="bus" name="number-block" style="display: none">
			<div class="car-number-block car-number-bus">
				<div class="car-number-left">
					<input id="bus-number" type="text" name="number" class="car-number-text-number" placeholder="AА000" pattern="[А, В, Е, К, М, Н, О, Р, С, Т, У, Х, а, в, е, к, м, н, о, р, с, т, у, х]{2}[0-9]{3}">
				</div>
				<div class="car-number-right">
					<input id="bus-number-reg" type="text" name="region" onchange="joinValues('bus-number', 'bus-number-reg')" class="car-number-text-region" placeholder="000" pattern="[0-9]{2,3}">
					<div class="car-number-country">
						<span>RUS</span>
						<svg class="car-number-flag">
							<rect fill="#fff" width="17" height="4"></rect>
							<rect fill="#0039a6" y="4" width="17" height="4"></rect>
							<rect fill="#d52b1e" y="8" width="17" height="4"></rect>
							<rect fill="none" width="17" height="12" stroke="#000" stroke-width="1"></rect>
						</svg>
					</div>
				</div>
			</div>
		</form>
	</div>
	<p></p>
	<input id="input-number" name="input3"/>
   	<script src="/js/car-number.js"></script>
</body>
</html>