<html>
    <style>
        table, th, td {
            border: 10px solid cyan;
            color: blueviolet;
            background-color: black;
        }
        p{
            border: 1px solid green;
            width: 11em;
            color:yellow;
        }
    </style>
<body>
<p>welcome, here is your info:</p>
<table>
    <thead>
        <tr>
            <th> Firstname </th>
            <th> Lastname </th>
            <th> Username </th>
            <th> Password </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_GET["FirstName"] ?></td>
            <td><?php echo $_GET["LastName"] ?></td>
            <td><?php echo $_GET["UserName"] ?></td>
            <td><?php echo $_GET["Password"] ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>