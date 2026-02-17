<!DOCTYPE html>
<html>
<head>
    <title>PHP Error</title>
    <style>
        body{
            background:#f8f9fa;
            font-family: Arial, sans-serif;
            padding:40px;
        }
        .error-box{
            background:#fff;
            border-left:5px solid #dc3545;
            padding:20px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        h1{
            color:#dc3545;
        }
        p{
            margin:5px 0;
        }
    </style>
</head>
<body>

<div class="error-box">
    <h1>A PHP Error Was Encountered</h1>
    <p><strong>Severity:</strong> <?= isset($severity) ? $severity : '' ?></p>
    <p><strong>Message:</strong> <?= isset($message) ? $message : '' ?></p>
    <p><strong>Filename:</strong> <?= isset($filepath) ? $filepath : '' ?></p>
    <p><strong>Line Number:</strong> <?= isset($line) ? $line : '' ?></p>
</div>

</body>
</html>
