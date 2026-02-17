<!DOCTYPE html>
<html>
<head>
    <title>Application Error</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f8f9fa;
            padding:40px;
        }
        .error-box{
            background:#fff;
            padding:20px;
            border-left:5px solid red;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        h1{
            color:red;
        }
    </style>
</head>
<body>

<div class="error-box">
    <h1>An Error Was Encountered</h1>
    <p><?= isset($message) ? $message : 'Something went wrong.' ?></p>
</div>

</body>
</html>
