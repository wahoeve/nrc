

$(document).ready(function(){
	var inputUser = $("#nick");
	var inputMessage = $("#message");
	var loading = $("#loading");
	var messageList = $(".content > ul");
	
	function updateShoutbox(){

		$.ajax({
			type: "POST", url: "shoutbox.php", data: "action=update",
			complete: function(data){
				loading.fadeOut();
				messageList.html(data.responseText);
				messageList.fadeIn(2000);
			}
		});
	}
	function checkForm(){
		if(inputUser.attr("value") && inputMessage.attr("value"))
			return true;
		else
			return false;
	}
	
	updateShoutbox();
	
	$("#form").submit(function(){
		if(checkForm()){
			var nick = inputUser.attr("value");
			var message = inputMessage.attr("value");
			$("#send").attr({ disabled:true, value:"Sending..." });
			$("#send").blur();
			$.ajax({
				type: "POST", url: "shoutbox.php", data: "action=insert&nick=" + nick + "&message=" + message,
				complete: function(data){
					messageList.html(data.responseText);
					updateShoutbox();
					$("#send").attr({ disabled:false, value:"Shout" });
				}
			 });
		}

	});
});