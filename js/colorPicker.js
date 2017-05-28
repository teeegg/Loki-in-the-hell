
function showHex(){
    var hex =  document.querySelector("#color_hex_value"),
        bodyColor = document.querySelector("body");
		
    bodyColor.style.backgroundColor = document.querySelector("#color_picker").value;
}