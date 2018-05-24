//------------------------------------------------------------------------------
function setCookie(name,value,days) {
    if (days)
    {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = '; expires='+date.toGMTString();
    }
    else var expires = '';
    document.cookie = name+'='+value+expires+'; path=/';
}

//------------------------------------------------------------------------------
function readCookie(name) {
    var nameEQ = name + '=';
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
       var c = ca[i];
       while (c.charAt(0)==' ') c = c.substring(1,c.length);
       if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

//------------------------------------------------------------------------------
function checkSessionTimeout()
{
    session_timeout = session_timeout - delaytime/1000;
    if(session_timeout < 0){
        window.location.href = "logout.php";
    }else if(session_timeout < minimal_timeout_value){
		playSound("sound_alert");
		appShowExpiredWindow();
    }else{
        // session not expired yet
    }
    setTimeout("checkSessionTimeout()", delaytime); 
}

//------------------------------------------------------------------------------
function resetSessionTimeout(){
    session_timeout = default_session_timeout;			
}

//------------------------------------------------------------------------------
function appShowExpiredWindow(){
    document.getElementById('light').style.display='block';
    document.getElementById('fade').style.display='block';
}

//------------------------------------------------------------------------------
function appCloseExpiredWindow(){
    document.getElementById('light').style.display='none';
    document.getElementById('fade').style.display='none';
	resetSessionTimeout();
	resetAjaxSessionTimeout();
}

//--------------------------------------------------------------------------
function resetAjaxSessionTimeout(){
	jQuery.ajax({
		url: "ajax/handler.ajax.php",
		global: false,
		type: "POST",
		data: ({action : 'ping', check_key : "apphpap"}),
		dataType: "html",
		async:false,
		error: function(html){
			alert("AJAX: cannot connect to the server or server response error! Please try again later.");
		},
		success: function(html){
			//alert("Ok");
			//var obj = jQuery.parseJSON(html);            			
			//if(obj.status == "1"){}
		}
	});	
}


//------------------------------------------------------------------------------
function playSound(obj) {
	var sound = document.getElementById(obj);
	if(sound != null && typeof(sound.Play) != "undefined") sound.Play();		
}

//------------------------------------------------------------------------------
function setFocus(el_id){
    if(document.getElementById(el_id)){
        document.getElementById(el_id).focus();
    }    
}
