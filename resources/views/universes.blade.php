<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universes List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        th, td {
            padding: 15px;
            background-color: rgba(255,255,255,0.2);
            color: #555;
        }
        th {
            text-align: left;
            background-color: #2c3e50; /* Azul Oscuro */
            color: #fff;
            text-transform: uppercase;
            font-size: 14px;
        }
        tr:nth-child(even) {
            background-color: #f8f8f8;
        }
        tr:hover {
            background-color: #e8f4f8; 
            transition: background-color 0.3s ease;
        }
        .badge {
            background-color: #3498db;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>🌌 Universes Registry</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                @foreach($universes as $universe)
                <tr>
                    <td>#{{ $universe->id }}</td>
                    <td><strong>{{ $universe->universe }}</strong></td>
                    <td><span class="badge">{{ $universe->company }}</span></td>
                    <td>{{ $universe->age }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>