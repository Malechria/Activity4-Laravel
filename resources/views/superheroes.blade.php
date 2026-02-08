<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eceff1;
            display: flex;
            justify-content: center;
            padding-top: 50px;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            width: 85%;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 50px;
        }
        .header {
            background: linear-gradient(135deg, #e74c3c, #c0392b); /* Rojo Heroico */
            padding: 20px;
            color: white;
            text-align: center;
        }
        h1 { margin: 0; font-size: 24px; font-weight: 300; }
        table { width: 100%; border-collapse: collapse; }
        th {
            background-color: #f9f9f9;
            color: #7f8c8d;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #ecf0f1;
        }
        td {
            padding: 15px;
            border-bottom: 1px solid #ecf0f1;
            color: #2c3e50;
        }
        tr:last-child td { border-bottom: none; }
        tr:hover { background-color: #fce4ec; cursor: default; }
        .id-circle {
            background: #e74c3c;
            color: white;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <h1> Superheroes </h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hero Name</th>
                    <th>Real Identity</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach($superheroes as $hero)
                <tr>
                    <td><span class="id-circle">{{ $hero->id }}</span></td>
                    <td style="font-weight: bold;">{{ $hero->name }}</td>
                    <td>{{ $hero->real_name }}</td>
                    <td>{{ $hero->gender }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>