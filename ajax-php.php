<html>

<head>
    <script>
        // when a user types a character in the input field, a function called "showHint()" is executed

        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                //Create an XMLHttpRequest object to fetch data by sending http request without reloading the page
                let xmlhttp = new XMLHttpRequest();
                //Create the function to be executed when the server response is ready
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) { //If request is completed
                        document.getElementById("txtHint").innerHTML = this.responseText; //response text received from the server.
                    }
                };
                //Send the request off to a PHP file (gethint.php) on the server
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>

    <p><b>Start typing a name in the input field below:</b></p>
    <form action="">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>
    <p>Suggestions: <span id="txtHint"></span></p>
</body>

</html>