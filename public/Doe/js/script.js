document.querySelector('header button') //seleciono o header button
.onclick = function() {
	document
	.querySelector('.form') //pego a class .form
	.classList.toggle('hide') //add uma class toggle, que add e remove algo. Ele coloca e tira conforme tem a class 'hide'
}



