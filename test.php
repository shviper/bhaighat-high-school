<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <select id="mySelect" onchange="showFields()">
        <option value="">Select an option</option>
        <option value="six">Six</option>
        <option value="seven">Seven</option>
        <option value="eight">Eight</option>
        <option value="nine">Nine</option>
        <option value="ten">Ten</option>
    </select>

    <div id="dynamicFields"></div>


    <script>
        function showFields() {
            var select = document.getElementById("mySelect");
            var selectedValue = select.options[select.selectedIndex].value;

            if (selectedValue === "nine") {
                var fields = "";
                fields += '<label for="field1">Field 1:</label>';
                fields += '<input type="text" id="field1" name="field1">';
                fields += '<label for="field2">Field 2:</label>';
                fields += '<input type="text" id="field2" name="field2">';
                fields += '<label for="field3">Field 3:</label>';
                fields += '<input type="text" id="field3" name="field3">';
                document.getElementById("dynamicFields").innerHTML = fields;
            } else {
                document.getElementById("dynamicFields").innerHTML = "";
            }
        }
    </script>
</body>

</html>