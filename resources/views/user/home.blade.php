@extends('layouts.user.app')

@push('css')

<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<style>
.flex-parent {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100%;
}

.input-flex-container {
	display: flex;
	justify-content: space-around;
	align-items: center;
	width: 80vw;
	height: 100px;
	max-width: 1000px;
	position: relative;
	z-index: 0;
}

.input {
	width: 25px;
	height: 25px;
	background-color: #2C3E50;
	position: relative;
	border-radius: 50%;
}

.input:hover {
	cursor: pointer;
}

.input::before, .input::after {
	content: '';
	display: block;
	position: absolute;
	z-index: -1;
	top: 50%;
	transform: translateY(-50%);
	background-color: #2C3E50;
	width: 4vw;
	height: 5px;
	max-width: 50px;
}

.input::before {
	left: calc(-4vw + 12.5px);
}

.input::after {
	right: calc(-4vw + 12.5px);
}

.input.active {
	background-color: #2C3E50;
}

.input.active::before {
	background-color: #2C3E50;
}

.input.active::after {
	background-color: #AEB6BF;
}

.input.active span {
	font-weight: 700;
}

.input.active span::before {
	font-size: 13px;
}

.input.active span::after {
	font-size: 15px;
}

.input.active ~ .input, .input.active ~ .input::before, .input.active ~ .input::after {
	background-color: #AEB6BF;
}

.input span {
	width: 1px;
	height: 1px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	visibility: hidden;
}

.input span::before, .input span::after {
	visibility: visible;
	position: absolute;
	left: 50%;
}

.input span::after {
	content: attr(data-year);
	top: 25px;
	transform: translateX(-50%);
	font-size: 14px;
}

.input span::before {
	content: attr(data-info);
	top: -65px;
	width: 70px;
	transform: translateX(-5px) rotateZ(-45deg);
	font-size: 12px;
	text-indent: -10px;
}

.description-flex-container {
	width: 80vw;
	font-weight: 400;
	font-size: 22px;
	margin-top: 100px;
	max-width: 1000px;
}

.description-flex-container p {
	margin-top: 0;
	display: none;
}

.description-flex-container p.active {
	display: block;
}

@media (min-width: 1250px) {
	.input::before {
		left: -37.5px;
	}

	.input::after {
		right: -37.5px;
	}
}

@media (max-width: 850px) {
	.input {
		width: 17px;
		height: 17px;
	}

	.input::before, .input::after {
		height: 3px;
	}

	.input::before {
		left: calc(-4vw + 8.5px);
	}

	.input::after {
		right: calc(-4vw + 8.5px);
	}
}

@media (max-width: 600px) {
	.flex-parent {
		justify-content: initial;
	}

	.input-flex-container {
		flex-wrap: wrap;
		justify-content: center;
		width: 100%;
		height: auto;
		margin-top: 15vh;
	}

	.input {
		width: 60px;
		height: 60px;
		margin: 0 10px 50px;
		background-color: #AEB6BF;
	}

	.input::before, .input::after {
		content: none;
	}

	.input span {
		width: 100%;
		height: 100%;
		display: block;
	}

	.input span::before {
		top: calc(100% + 5px);
		transform: translateX(-50%);
		text-indent: 0;
		text-align: center;
	}

	.input span::after {
		top: 50%;
		transform: translate(-50%, -50%);
		color: #ECF0F1;
	}

	.description-flex-container {
		margin-top: 30px;
		text-align: center;
	}
}

@media (max-width: 400px) {
	body {
		min-height: 950px;
	}
}
</style>
@endpush
@section('content')

<div class="flex-parent">
	<div class="input-flex-container">
		<div class="input">
			<span data-year="1910" data-info="headset"></span>
		</div>
		<div class="input">
			<span data-year="1920" data-info="jungle gym"></span>
		</div>
		<div class="input active">
			<span data-year="1930" data-info="chocolate chip cookie"></span>
		</div>
		<div class="input">
			<span data-year="1940" data-info="Jeep"></span>
		</div>
		<div class="input">
			<span data-year="1950" data-info="leaf blower"></span>
		</div>
		<div class="input">
			<span data-year="1960" data-info="magnetic stripe card"></span>
		</div>
	</div>
</div>



@endsection