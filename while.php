<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', sans-serif; background: #f5f4fb; min-height: 100vh; display: flex; justify-content: center; padding: 2rem 1rem; }
        .container { width: 100%; max-width: 640px; }
        h1 { font-size: 20px; font-weight: 600; color: #2d2a6e; margin-bottom: 4px; }
        .subtitle { font-size: 13px; color: #888; margin-bottom: 1.5rem; }
        .card { background: #fff; border: 1px solid #e5e3f8; border-radius: 14px; padding: 1.25rem; margin-bottom: 1.5rem; }
        .form-row { display: flex; align-items: center; gap: 12px; flex-wrap: wrap; }
        label { font-size: 14px; color: #555; white-space: nowrap; }
        input[type=number] { flex: 1; min-width: 80px; max-width: 120px; padding: 8px 12px; border: 1px solid #d0cef5; border-radius: 8px; font-size: 15px; outline: none; }
        input[type=number]:focus { border-color: #534AB7; }
        button[type=submit] { padding: 9px 20px; background: #534AB7; color: #EEEDFE; border: none; border-radius: 8px; font-size: 14px; font-weight: 500; cursor: pointer; }
        button[type=submit]:hover { background: #4540a3; }
        .badge { display: inline-block; background: #EEEDFE; color: #3C3489; font-size: 12px; font-weight: 500; padding: 4px 12px; border-radius: 8px; margin-bottom: .75rem; }
        .result-title { font-size: 16px; font-weight: 600; color: #2d2a6e; margin-bottom: 1rem; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 8px; }
        .row-card { background: #f9f8fe; border: 1px solid #e5e3f8; border-radius: 10px; padding: 10px 14px; display: flex; justify-content: space-between; align-items: center; }
        .row-eq { font-size: 14px; color: #777; }
        .row-ans { font-size: 16px; font-weight: 600; color: #534AB7; }
        .meta { font-size: 12px; color: #aaa; margin-top: 1rem; }
    </style>
</head>
<body>
<div class="container">
    <h1>🔢 สูตรคูณ</h1>
    <p class="subtitle">BIT.2/4 · พิชญะ อันทะโคตร · เลขที่ 31</p>

    <div class="card">
        <form action="" method="GET">
            <div class="form-row">
                <label for="Num">เลขแม่สูตรคูณ</label>
                <input type="number" name="Num" id="Num" min="1" max="99" placeholder="เช่น 7"
                       value="<?= isset($_GET['Num']) ? (int)$_GET['Num'] : '' ?>">
                <button type="submit">คำนวณ</button>
            </div>
        </form>
    </div>
     <a class="nav-link" href="index.php">→ ไปหน้า For loop</a>
    <?php if (isset($_GET["Num"])): ?>
        <?php
            $Num = (int)$_GET["Num"];
            $i = 1;
        ?>
       
        <span class="badge">แม่ <?= $Num ?></span>
        <p class="result-title">สูตรคูณแม่ <?= $Num ?></p>
        <div class="grid">
            <?php while ($i <= 12): ?>
                <div class="row-card">
                    <span class="row-eq"><?= $Num ?> × <?= $i ?></span>
                    <span class="row-ans">= <?= $Num * $i ?></span>
                </div>
            <?php $i++; endwhile; ?>
        </div>
        <p class="meta">ใช้ while loop · 12 รายการ</p>
    <?php endif; ?>
</div>
</body>
</html>