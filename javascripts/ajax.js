function storeOptions(radio) {
    if (radio === "dist") { 
        document.getElementById("store_options").innerHTML = "";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("store_options").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "db/stores_dist.php?q=" + radio, true);
        xmlhttp.send();
    } else if (radio === "abc") {
        document.getElementById("store_options").innerHTML = "";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("store_options").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "db/stores_abc.php?q=" + radio, true);
        xmlhttp.send();
    }
}

function storeSelected(store) {
    //console.log('function triggered');
    if (store !== "") {
        document.getElementById("store_info").innerHTML = "";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                document.getElementById("store_info").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "db/store_info.php?q=" + store, true);
        xmlhttp.send();
    } else {
        document.getElementById("store_info").innerHTML = "Please choose a store from the dropdown menu above";
    }
}