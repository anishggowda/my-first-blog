$(document).ready(function(){
// f11 key-click event for full screen
	$(document).keyup(function(e){
		if(e.which==122){
			$(".start_alert").stop().fadeOut();
		}
	});

	$(".status").click(function(){
		alert("yes its working");
	})
	
	
});


// Add function for fullscreen
 
function fullConfirm(){
	$(".start_alert").stop().fadeOut();

	var el = document.documentElement
	, rfs = // for newer Webkit and Firefox
       el.requestFullScreen
    || el.webkitRequestFullScreen
    || el.mozRequestFullScreen
    || el.msRequestFullScreen;
	if(typeof rfs!="undefined" && rfs){
	  rfs.call(el);
	  screenstautus = 1;
	  console.log(screenstautus);
	}	

else if(typeof window.ActiveXObject!="undefined"){
  // for Internet Explorer
  var wscript = new ActiveXObject("WScript.Shell");
  if (wscript!=null) {
     wscript.SendKeys("{F11}");
  }

  var screenstautus = 0;

  



}
}

function fullCancel(){
	$(".start_alert").stop().fadeOut();
}




function checkstatus(){
	if(screenstautus == 1){
		alert("yes it working");
		fullConfirm();
	}
	else(screenstautus == 0)
	{
		fullCancel();
	}
}



