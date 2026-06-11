<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Sarabun', sans-serif;
            background: #f0f4ff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 16px;
        }

        .header {
            background: linear-gradient(135deg, #4f6ef7, #7c3aed);
            color: white;
            padding: 18px 36px;
            border-radius: 14px;
            text-align: center;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 0.3px;
            box-shadow: 0 4px 18px rgba(79,110,247,0.35);
            margin-bottom: 28px;
            width: 100%;
            max-width: 480px;
        }

        .nav-link {
            display: inline-block;
            margin-bottom: 24px;
            color: #4f6ef7;
            font-weight: 600;
            text-decoration: none;
            padding: 8px 20px;
            border: 2px solid #4f6ef7;
            border-radius: 50px;
            transition: background 0.2s, color 0.2s;
            font-size: 0.95rem;
        }

        .nav-link:hover {
            background: #4f6ef7;
            color: white;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 32px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 6px 30px rgba(79,110,247,0.12);
        }

        .card label {
            display: block;
            font-weight: 600;
            color: #374151;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .input-row {
            display: flex;
            gap: 10px;
        }

        .card input[type="number"] {
            flex: 1;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            font-family: 'Sarabun', sans-serif;
            outline: none;
            transition: border-color 0.2s;
            color: #1f2937;
        }

        .card input[type="number"]:focus {
            border-color: #4f6ef7;
        }

        .card input[type="submit"] {
            padding: 12px 24px;
            background: linear-gradient(135deg, #4f6ef7, #7c3aed);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-family: 'Sarabun', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.1s;
            white-space: nowrap;
        }

        .card input[type="submit"]:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .result-title {
            margin-top: 28px;
            font-size: 1.15rem;
            font-weight: 700;
            color: #4f6ef7;
            text-align: center;
            padding-bottom: 12px;
            border-bottom: 2px dashed #e5e7eb;
            margin-bottom: 14px;
        }

        .result-table {
            width: 100%;
            border-collapse: collapse;
        }

        .result-table tr:nth-child(even) td {
            background: #f5f3ff;
        }

        .result-table td {
            padding: 9px 16px;
            font-size: 1rem;
            color: #1f2937;
            border-radius: 6px;
        }

        .result-table td:last-child {
            font-weight: 700;
            color: #7c3aed;
            text-align: right;
        }
    </style>
</head>
<body>

    <?php
    echo "<div class='header'>งานที่ 1 — พิชญะ อันทะโคตร &nbsp;|&nbsp; BIT.2/4 เลขที่ 31</div>";
    ?>

    <a class="nav-link" href="while.php">→ ไปหน้า While loop</a>

    <div class="card">
        <form action="" method="get">
            <label for="Num">เลขแม่สูตรคูณ</label>
            <div class="input-row">
                <input type="number" name="Num" id="Num" placeholder="เช่น 3, 7, 12">
                <input type="submit" value="คำนวณ">
            </div>
        </form>

        <?php
        if(isset($_GET["Num"])){
            $Num = $_GET["Num"];

            echo "<div class='result-title'>สูตรคูณแม่ " . $Num . "</div>";
            echo "<table class='result-table'>";

            for($i=1; $i<=12; $i++){
                echo "<tr><td>" . $Num . " &times; " . $i . "</td><td>= " . $Num * $i . "</td></tr>";
            }

            echo "</table>";
        }
        ?>
    </div>

</body>
</html>