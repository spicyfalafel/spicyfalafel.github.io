<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../index.css">
    <link rel="icon" href="../res/ukraine.png" type="image/png">
    <title>Lab1</title>
</head>
<body>
<header class="header">
    <h1 class="lab_info">Вариант 2212</h1>
    <h1 class="lab_info"><a href="https://github.com/spicyfalafel">Кривошеев Святослав P3211</a></h1>
</header>
<table class="everything_table">
    <tr class="first-row-in-everything-table">
        <td>
            <table class="result-table">
                <tr class="result-table-cell-text">
                    <th>X</th>
                    <th>Y</th>
                    <th>R</th>
                    <th>RESULT</th>
                    <th>TIME</th>
                    <th>EXECUTION TIME</th>
                </tr>
            </table>
        </td>
        <td>
            <object class="graph"
                    type="image/svg+xml"
                    data="../res/graph.svg">
            </object>
        </td>
        <td>
            <form id="coordinates-form" method="get">
                <div class="X-radios">
                    <h4>X:</h4>
                    <label class="x-element-label">-3<input class="x_radio" type="radio" name="x"></label>
                    <label class="x-element-label">-2<input class="x_radio" type="radio" name="x"></label>
                    <label class="x-element-label">-1<input class="x_radio" type="radio" name="x"></label>
                    <label class="x-element-label">0<input class="x_radio" type="radio" name="x"></label>
                    <label class="x-element-label">1<input class="x_radio" type="radio" name="x"></label>
                    <label class="x-element-label">2<input class="x_radio" type="radio" name="x"></label>
                    <label class="x-element-label">3<input class="x_radio" type="radio" name="x"></label>
                    <label class="x-element-label">4<input class="x_radio" type="radio" name="x"></label>
                    <label class="x-element-label">5<input class="x_radio" type="radio" name="x"></label>
                </div>
                <label class="Y-element-label"> Y:
                    <input class="y-text-input" type="text" placeholder="y value">
                </label>
                <span id="value-validate-text"></span>
                <div class="R-checkboxes" id="R">
                    <h4>R:</h4>
                    <label class="r-element-label">1<input class="r-checkbox" type="checkbox" name="r"
                                                           checked></label>
                    <label class="r-element-label">1.5<input class="r-checkbox" type="checkbox" name="r"></label>
                    <label class="r-element-label">2<input class="r-checkbox" type="checkbox" name="r"></label>
                    <label class="r-element-label">2.5<input class="r-checkbox" type="checkbox" name="r"></label>
                    <label class="r-element-label">3<input class="r-checkbox" type="checkbox" name="r"></label>
                </div>
                <button type="submit">Отправить</button>
                <button type="reset">Очистить</button>
            </form>
        </td>
    </tr>
</table>


<script src="../jquery.js"></script>

<script>
    $("input:checkbox").click(function(){
        var group = "input:checkbox[name='"+$(this).prop("name")+"']";
        $(group).prop("checked",false);
        $(this).prop("checked",true);
    });



    function numberIsInInterval(num, min, max) {
        return min <= num && num <= max;
    }


    const yTextField = document.getElementsByClassName("y-text-input")[0];
    const error = document.getElementById('value-validate-text');

    yTextField.addEventListener("input", function (event) {
        const parsedString = Number.parseInt(this.value);
        if (Number.isInteger(parsedString)) {
            if (numberIsInInterval(parsedString, -5, 5)) {
                error.innerText = "OK"
                error.style.color = "green"
            } else {
                error.innerText = "Not correct value: must be in [-5;5]"
                error.style.color = "red";
            }
        } else {
            error.innerText = "Please enter number only"
            error.style.color = "red";
        }
    })

</script>


</body>
</html>