<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>labFinalWrittenSlove</title>
</head>

<body>
    <form action="calculate.php" method="post" id="submitForm">
        <label for="c">C: </label>
        <input type="text" name="c" id="c"><br><br>
        <label for="k">K: </label>
        <input type="text" name="k" id="k"><br><br>
        <label for="f">F: </label>
        <input type="text" name="f" id="f"><br><br>

        <button type="submit" name="btnCelsius" onclick="return celsius()">C</button>
        <button type="submit" name="btnKelvin" onclick="return kelvin()">K</button>
        <button type="submit" name="btnFahrenheit" onclick="return fahrenheit()">F</button>

        <script>
            function validation(id) {

                var regex = /(?<=^| )[+-]?\d+(\.\d+)?(?=$| )/; /* note: [accept digit, one dot, and + or -] */

                if (!id.match(regex)) {
                    alert(id + ' is invalid. Please must be provide a valid number.');
                    return false;
                } else {
                    document.getElementById('submitForm').submit;
                }
            }

            function condition(value1, value2, value3) {

                if (value1.length > 0 && value2.length > 0 && value3.length > 0) {
                    alert('You cannot convert Celcius, Fahrenheit and Kelvin at a time.');
                    return false;
                } else if (value1.length > 0 && value2.length > 0) {
                    alert('You cannot convert more than one temperature at a time.');
                    return false;
                } else if (value1.length > 0 && value3.length > 0) {
                    alert('You cannot convert more than one temperature at a time.');
                    return false;
                } else if (value2.length > 0 && value3.length > 0) {
                    alert('You cannot convert more than one temperature at a time.');
                    return false;
                } else if (value3.length > 0) {
                    alert('You cannot convert at the same temperature.');
                    return false;
                } else {
                    if (value1.length > 0) {
                        return validation(value1);
                    } else if (value2.length > 0) {
                        return validation(value2);
                    }
                }
            }


            function celsius() {
                var c = document.getElementById('c').value;
                var k = document.getElementById('k').value;
                var f = document.getElementById('f').value;

                return condition(f, k, c);
            }

            function kelvin() {
                var c = document.getElementById('c').value;
                var k = document.getElementById('k').value;
                var f = document.getElementById('f').value;

                return condition(c, f, k);
            }

            function fahrenheit() {
                var c = document.getElementById('c').value;
                var k = document.getElementById('k').value;
                var f = document.getElementById('f').value;

                return condition(c, k, f);
            }
        </Script>
    </form>
</body>

</html>