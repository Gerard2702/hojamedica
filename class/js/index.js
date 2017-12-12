$("#errorlogin").hide();

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
var error = getParameterByName('error');
if(error == 1){
	$("#errorlogin").addClass('animated fadeIn');
	$("#errorlogin").show();
}