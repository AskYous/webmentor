$(document).ready(function() {
    $('.textarea-chat').keydown(function() {
        if (event.keyCode == 13) {
        	var chatnumber = "." + this.name;
        	var form="form[name=" + this.name +"]";
        	alert(form);
        	$(form).submit();
        	$(chatnumber).append("<p>" + this.value + "</p>");
            this.value = null;
            return false;
         }
    });
});