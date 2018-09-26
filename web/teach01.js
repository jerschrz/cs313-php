function button_clicked()
{
	alert("Clicked!");
}
function pick_color()
{
	document.getElementById('div1').style.backgroundColor = document.getElementById('textbox').value;
}
function pick_color_jq()
{
	$("#div1").css("backgroundColor", "red");
}