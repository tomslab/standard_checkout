function validationFeedback(a,e,s){"fail"===e?(emailPass=!1,$("#"+a).parent("div").removeClass("has-success").addClass("has-feedback").addClass("has-error"),$("#"+a+"-error").text(s),$("#"+a+"-error").css("display","block"),$("#"+a+"Status").replaceWith($('<i id="'+a+'Status" class="fa fa-exclamation form-control-feedback"></i>')),$("#continue").attr("disabled",!0)):"pass"===e&&($("#"+a).parent("div").removeClass("has-error").addClass("has-feedback").addClass("has-success"),$("#"+a+"-error").text(""),$("#"+a+"-error").css("display","none"),$("#continue").attr("disabled",!1),$("#"+a+"Status").replaceWith($('<i id="'+a+'Status" class="fa fa-check form-control-feedback"></i>')))}function fieldCheck(a){switch(value=$("#"+a).val().toLowerCase(),a){case"email":emailOut===!0&&emailValidator(a,value);break;case"addressLine1":addressLine1Out===!0&&addressLine1Validator(a,value)}}function fieldCheckOut(a){switch(a){case"email":emailOut=!0;break;case"addressLine1":addressLine1Out=!0}fieldCheck(a)}function addressLine1Validator(a,e){addressLine1Pass=!0,addressLine1Length=e.length,0===addressLine1Length&&validationFeedback(a,"fail","A valid first line of address is required"),addressLine1Pass===!0&&validationFeedback(a,"pass")}var emailOut=!1,emailPass,emailLength,atFirstPosition,atLastPosition,emailDomain,dotFirstPosition;ß;var domainLength,oldDomainLength,domainExtension,message,addressLine1Out=!1,addressLine1Pass,addressLine1Length;ß;