function emailValidator(a,i){if(emailPass=!0,emailLength=i.length,atFirstPosition=i.indexOf("@"),atLastPosition=i.lastIndexOf("@"),emailDomain=i.substring(atFirstPosition+1,emailLength),oldDomainLength=emailDomain.length,dotFirstPosition=emailDomain.indexOf("."),domainLength=dotFirstPosition-atFirstPosition,domainExtension=emailDomain.substring(dotFirstPosition+1,oldDomainLength),0===emailLength&&validationFeedback(a,"fail","A valid email address is required"),-1!==atFirstPosition&&0!==atFirstPosition||emailPass!==!0||validationFeedback(a,"fail","An @ is required in an email address"),atFirstPosition!==emailLength-1&&0!==dotFirstPosition||emailPass!==!0||validationFeedback(a,"fail","Email must have a domain, example: gmail.com"),atFirstPosition!=atLastPosition&&emailPass===!0&&validationFeedback(a,"fail","Email cannot have more than one @"),-1===dotFirstPosition&&emailPass===!0&&validationFeedback(a,"fail","Email must have an extension, example: gmail.com"),emailPass===!0)switch(domainExtension){case"com":break;case"co.uk":break;case".org":break;case"net":break;case"ac.uk":break;default:validationFeedback(a,"fail","must have a domain extension, example: .com")}if(emailPass===!0){var e=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;e.test(i)===!1&&validationFeedback(a,"fail","Emails cannot contain special characters")}emailPass===!0&&validationFeedback(a,"pass")}