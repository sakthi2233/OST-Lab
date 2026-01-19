<?php
echo "
<html>
<head>
    <title>Iteration</title>
</head>
<body>
    <script>
        // For Loop
        console.log('For Loop');

        for (let i = 1; i <= 5; i++) {
            console.log('Iteration ' + i);
        }

        // While Loop
        console.log('While Loop');

        let j = 1;
        while (j <= 5) {
            console.log('Iteration ' + j);
            j++;
        }

        // Do While Loop
        console.log('Do While Loop');

        let k = 1;
        do {
            console.log('Iteration ' + k);
            k++;
        } while (k <= 5);

        // For..in Loop (object)
        console.log('For..in Loop');

        let student = { name: 'Sharan', age: 19, city: 'Viruthunagar' };
        for (let key in student) {
            console.log(key + ': ' + student[key]);
        }

        // For..of Loop (array)
        console.log('For..of Loop');

        let colors = ['Red', 'Green', 'Blue'];
        for (let color of colors) {
            console.log(color);
        }
    </script>
</body>
</html>";
?>









";