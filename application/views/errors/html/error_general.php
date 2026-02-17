<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <style>
        body{
            font-family:Arial;
            background:#f8f9fa;
            padding:40px;
        }
        .error-box{
            background:#fff;
            padding:20px;
            border-left:5px solid red;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="error-box">
    <h1>An Error Occurred</h1>
    <p><?= isset($message) ? $message : 'Something went wrong.' ?></p>
</div>
</body>
</html>
