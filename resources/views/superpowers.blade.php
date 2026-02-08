<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superpowers List</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
            display: flex;
            justify-content: center;
            padding: 40px;
        }
        .container {
            width: 100%;
            max-width: 900px;
        }
        h1 {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 10px;
            color: #1abc9c; /* Verde Esmeralda */
            text-shadow: 2px 2px 4px #000;
        }
        .table-wrapper {
            background: #34495e;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }
        table { width: 100%; border-collapse: collapse; }
        th {
            background-color: #16a085;
            color: white;
            padding: 20px;
            text-align: left;
            font-size: 18px;
        }
        td {
            padding: 15px 20px;
            border-bottom: 1px solid #2c3e50;
            color: #bdc3c7;
        }
        tr:nth-child(even) { background-color: #3b5369; }
        tr:hover {
            background-color: #1abc9c;
            color: white;
            transition: 0.3s;
        }
        tr:hover td { color: white; }
    </style>
</head>
<body>

    <div class="container">
        <h1>  Abilities and Powers</h1>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th style="width: 10%;">ID</th>
                        <th style="width: 30%;">Power Name</th>
                        <th style="width: 60%;">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($superpowers as $power)
                    <tr>
                        <td>{{ $power->id }}</td>
                        <td style="font-weight: bold; font-size: 1.1em;">{{ $power->name }}</td>
                        <td>{{ $power->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>