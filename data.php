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
            <td><?php session_start(); echo $_SESSION["Fname"] ?></td>
            <td><?php  echo $_SESSION["Lname"] ?></td>
            <td><?php  echo $_SESSION["Uname"] ?></td>
            <td><?php  echo $_SESSION["Pass"] ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>