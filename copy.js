function copyTextToClipboard(elementId,button) {
        var element = document.getElementById(elementId);
        var text = element.textContent.trim();
        var textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
        button.textContent = "Copied"; // Change the button text to "Copied"
    }
    
   
    
 
