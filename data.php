<html>
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
            <th><?php echo $_GET["FirstName"] ?></th>
            <th><?php echo $_GET["LastName"] ?></th>
            <th><?php echo $_GET["UserName"] ?></th>
            <th><?php echo $_GET["Password"] ?></th>
        </tr>
    </tbody>
</table>
</body>
</html>