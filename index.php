<!DOCTYPE html>
<html>
<head>
    <title>Faarah saed Dirie</title>
    <!-- style or css start -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img {
            position: absolute;
            width: 180px;
            margin-left: 40px;
        }

        .title {
            font-size: 20px;
            font-weight: bold;
            padding: 5px;
            margin-top: 30px;
            margin-left: 260px;
        }

        h1 {
            font-size: 27px;
            margin-top: 70px;
            text-align: center;
            margin-right: 400px;
            padding: 7px;
        }

        h2 {
            padding: 5px;
        }

        p {
            text-align: center;
            margin-right: 400px;
            font-family: sans-serif;
        }

        form {
            border: 1px solid #1cd71c;
            padding: 5px 0px 5px 5px;
            margin: 30px 280px;
            width: 40%;
        }

        form input {
            margin-left: 60px;
            margin-bottom: 5px;
            font-size: 25px;
        }

        .signs {
            margin-bottom: 5px;
            font-size: 25px;
            margin-left: 10px;
        }

        label {
            background: skyblue;
            width: 200px;
            font-size: 25px;
        }

        .operator {
            color: skyblue;
            font-size: 25px;
        }

        .kariim {
            margin-left: 170px;
            margin-top: 10px;
            padding: 3px;
            background: #d86161;
            color: #fff;
        }

        .saed {
            margin-left: 135px;
            padding: 3px;
            background: #d86161;
            color: #fff;
        }
    </style>
</head>
<body>
    <img src="LOGO.png">
    <div class="title">
        <h1>ABAARSO TECH UNIVERSITY</h1>
        <h2>FACULTY OF SOFTWARE ENGINEERING</h2>
        <p>ASSIGNMENT #2</p>
    </div>
    <form method="POST">
        <label for="num1">Number 1:</label>
        <input type="number" step="any" name="num1"><br>
        <div class="operator">Select Operator
            <select name="operator" class="signs"> 
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
               
            </select><br>
        </div>
        <label for="num2">Number 2:</label>
        <input type="number" step="any" name="num2"><br>
        <input type="submit" name="calculate" value="Calculate" class="kariim">
        <input type="submit" name="clear" value="Clear" class="saed"><br>

        <label>Result:
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['calculate'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operator = $_POST['operator'];

                    $result = 0;

                    switch ($operator) {
                        case '+':
                            $result = $num1 + $num2;
                            break;
                        case '-':
                            $result = $num1 - $num2;
                            break;
                        case '*':
                            $result = $num1 * $num2;
                            break;
                        case '/':
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                echo "Error: Division by zero is not allowed.";
                            }
                            break;
                        case '2.2':
                            $result = pow($num1, $num2);
                            break;
                        case '4.6':
                            $result = sqrt($num1) + sqrt($num2);
                            break;
                        default:
                            echo "Invalid operator selected.";
                            break;
                    }

                    echo "<span>$result</span>";
                } elseif (isset($_POST['clear'])) {
                    // Clear the form inputs
                    $_POST['num1'] = "";
                    $_POST['num2'] = "";
                    echo "<span></span>";
                }
            }
            ?>
        </label>
    </form>
</body>
</html>
