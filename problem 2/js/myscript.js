
function _(id){ return document.getElementById(id); }
function submitForm(){
	_("submitbtn").disabled = true;
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "firstname", _("first_name").value );
	formdata.append( "lastname", _("last_name").value );
	formdata.append( "mobile", _("mobile").value );
	formdata.append( "address", _("address").value );
	formdata.append( "email", _("email").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "contact.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("contact-form").innerHTML = '<h2>Thanks '+_("first_name").value+', your message has been sent.</h2>';
			} else {
				_("status").innerHTML = ajax.responseText;
				_("submitbtn").disabled = false;
			}
		}
	}
	ajax.send( formdata );
}
