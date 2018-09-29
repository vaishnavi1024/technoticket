function isthere(num2, oldnum2) {
	if (oldnum2.indexOf(num2) === -1)
	{
		oldnum2.push(num2);
		return oldnum2;
	}
	else
	{
		oldnum2=generate(num2,oldnum2);
		return oldnum2;
	}
}

function generate(num1, oldnum1) {
	num1 = Math.floor(Math.random() * 20 + 1);
	var result = isthere(num1,oldnum1);
	return(result);
}
