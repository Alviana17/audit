<!DOCTYPE html>
<html>
<head>
    <title>Laporan Audit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .content {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ $title }}</h1>
        <p>Tanggal: {{ $date }}</p>
        <p>Auditor: {{ $auditor }}</p>
    </div>
    <div class="content">
        <p>{{ $content }}</p>
    </div>
</body>
</html>
