<?php

session_start();
header('Content-type: text/css');


?>

* {
 		padding: 0px;
 		margin: 0%;
 		font-family: arial, sans-serif;
 	}
 	#container {
 		width: 80%;
 		margin: 2% auto;
 	}
 	#game {
 		width: 60%;
 		margin: 0% auto;
 		padding: 20px;
 		text-align: center;
 	}

 	.correct {
 		background: green;
 		width: 20%;
 	}
 	.high, .low {
 		background: red;
 	}

 	.high, .low, .correct{
 		width: 40%;
 		height: 100px;
 		margin: 3% auto;
 		padding: 50px 30px;
 	}
 	h1 {
 		color: blue;
 		text-shadow: 5px 5px 5px #888888;
 	}
 	h2 {
 		padding: 30px 0px;
 		color: white;
 	}
 	p {
 		font-weight: bold;
 	}
 	.input {
 		margin-top: 2%;
 	}
 	.button {
 		display: block;
 		background: blue;
 		color: white;
 		font-weight: bold;
 		padding: 5px;
 		border: none;
 		border-radius: 5%;
 		margin: 2% auto;
 		box-shadow: 5px 5px 10px #888888;
 	}