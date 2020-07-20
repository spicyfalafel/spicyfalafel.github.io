<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/input.css">
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
            <table id="result-table" class="result-table">
                <tr class="result-table-row">
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
            <object class="graph" type="image/svg+xml" data="../res/graph.svg"></object>
        </td>
        <td>
            <form id="coordinates-form" action="get_data.php" method="get">
                <div class="X-radios">
                    <h4>X:</h4>
                    <label class="x-element-label">-3
                        <input class="x_radio" type="radio" name="x" value="-3">
                    </label>
                    <label class="x-element-label">-2
                        <input class="x_radio" type="radio" name="x" value="-2">
                    </label>
                    <label class="x-element-label">-1
                        <input class="x_radio" type="radio" name="x" value="-1">
                    </label>
                    <label class="x-element-label">0
                        <input class="x_radio" type="radio" name="x" value="0">
                    </label>
                    <label class="x-element-label">1
                        <input class="x_radio" type="radio" name="x" value="1">
                    </label>
                    <label class="x-element-label">2
                        <input class="x_radio" type="radio" name="x" value="2">
                    </label>
                    <label class="x-element-label">3
                        <input class="x_radio" type="radio" name="x" value="3">
                    </label>
                    <label class="x-element-label">4
                        <input class="x_radio" type="radio" name="x" value="4">
                    </label>
                    <label class="x-element-label">5
                        <input class="x_radio" type="radio" name="x" value="5">
                    </label>
                </div>
                <label class="Y-element-label"> Y:
                    <input class="y-text-input" type="text" name="y" placeholder="y value" required/>
                </label>
                <span id="value-validate-text"></span>
                <div class="R-checkboxes" id="R">
                    <h4>R:</h4>
                    <label class="r-element-label">1
                        <input class="r-checkbox" type="checkbox" name="r" value="1" checked>
                    </label>
                    <label class="r-element-label">1.5
                        <input class="r-checkbox" type="checkbox" name="r" value="1.5">
                    </label>
                    <label class="r-element-label">2
                        <input class="r-checkbox" type="checkbox" name="r" value="2">
                    </label>
                    <label class="r-element-label">2.5
                        <input class="r-checkbox" type="checkbox" name="r" value="2.5">
                    </label>
                    <label class="r-element-label">3
                        <input class="r-checkbox" type="checkbox" name="r" value="3">
                    </label>
                </div>
                <button id="submit-button">Отправить</button>
                <button type="reset">Очистить</button>
            </form>
        </td>
    </tr>
</table>


<script src="../res/jquery.js"></script>
<script src="../my_script.js"></script>
</body>
</html>