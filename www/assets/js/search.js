window.onload = function () {
    xmlHttp = createXmlHttpRequestObject();
    };
    function createXmlHttpRequestObject() {
    // create a XMLHttpRequest object compatible to most browsers
    if (window.ActiveXObject) {
        return new ActiveXObject("Microsoft.XMLHTTP");
    } else if (window.XMLHttpRequest) {
        return new XMLHttpRequest();
        
    } else {
        alert("Error creating the XMLHttpRequest object.");
        return false;
    }
}

function clickTitle(title) {

suggestionBoxObj = document.getElementById('suggestionDiv');
searchBoxObj = document.getElementById('searchBoxObj');
//display the title in the search box
searchBoxObj.value = title.innerHTML;

//hide all suggestions
suggestionBoxObj.style.display = 'none';
}
    function handleKeyUp(e) {
            suggest(e.target.value);
    }
    function suggest(query) {
        xmlHttp = createXmlHttpRequestObject();
        suggestionBoxObj = document.getElementById('suggestionDiv');
    if (query === "") {
        
        suggestionBoxObj.innerHTML = "";
        return;
    }
    xmlHttp.open("GET", "search_features.php?q=" + query, true);
    xmlHttp.send();
    
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
            
            // extract the JSON received from the server
            
            console.log(xmlHttp.responseText);
            var suggestions = JSON.parse(xmlHttp.responseText);
            console.log(suggestions);

            //Display
            var divContent = "";
            for (i = 0; i < suggestions.length; i++) {
                divContent += "<span id=s_" + i + " onclick='clickTitle(this)'>" + suggestions[i] + "</span> <br>";
            }
            suggestionBoxObj.innerHTML = divContent;
            suggestionBoxObj.style.display = 'block';
        }
    }
}