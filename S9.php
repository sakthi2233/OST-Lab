<?php
echo '
<html>
<head>
    <title>Simple Form</title>
    <style>
        .center {
            width: 250px;
            margin: 100px auto;
            text-align: center;
        }
        input {
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>

<div class="center">
    <h3>Student Form</h3>

    <label>Name:</label><br>
    <input type="text" id="username"><br>

    <label>Roll No:</label><br>
    <input type="text" id="rollno"><br>

    <button onclick="displayOutput()">Submit</button>
</div>

<script>
function displayOutput() {
    let name = document.getElementById("username").value;
    let roll = document.getElementById("rollno").value;

    document.write("Name: " + name + "<br>");
    document.write("Roll No: " + roll);
}
</script>

</body>
</html>
';
?>
