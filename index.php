<?php
$input_text = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_input'])) {
    // Sanitasi input untuk mencegah XSS
    $input_text = htmlspecialchars(trim($_POST['user_input']), ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum DevSecOps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .container {
            background: #fff;
            padding: 24px 32px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 480px;
        }
        h2 {
            margin-top: 0;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 12px;
        }
        button {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #0b5ed7;
        }
        .result-box {
            margin-top: 20px;
            padding: 12px 16px;
            background-color: #e9ecef;
            border-left: 4px solid #0d6efd;
            border-radius: 4px;
            word-wrap: break-word;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Praktikum DevSecOps</h2>
    
    <form method="POST" action="">
        <label for="user_input">Masukkan Teks:</label><br><br>
        <input type="text" id="user_input" name="user_input" placeholder="Ketik sesuatu..." required>
        <button type="submit">Kirim</button>
    </form>

    <?php if (!empty($input_text)): ?>
        <div class="result-box">
            <strong>Teks yang dimasukkan:</strong>
            <p style="margin: 8px 0 0;"><?php echo $input_text; ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
