<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
        }
        .card {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>{{ $title }}</h1>
        <p>{{ $content }}</p>
    </div>

</body>
</html>
