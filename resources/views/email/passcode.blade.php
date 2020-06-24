<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<h2>Passcode Generated</h2>
<table>
    <tr>
        <th>Company</th>
        <th>Name</th>
        <th>Email</th>
        <th>Passcode</th>
    </tr>
    <tr>
        <td>{{$company}}</td>
        <td>{{$name}}</td>
        <td>{{$email}}</td>
        <td>{{$passcode}}</td>
    </tr>
</table>

</body>
</html>
