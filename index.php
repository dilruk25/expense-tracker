<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <a class="btn btn-primary" href="/Rightmo Project/create.php" role="button">Add Expence</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "expenses";

            //Create the connection
             $connection = new mysqli($servername, $username, $password, $database);

             //Check the connection
             if ($connection->connect_error) {
                die("Connection Failed: ". $connection->connect_error);
             }

             //Read all rows from the database table
            $sql = "SELECT * from daily_expenses";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            //Read data of each row
            while ($row = $result->fetch_assoc()) {
            }
            echo "
            <tr>
            <td>$row[id]</td>
            <td>$row[item_nme]</td>
            <td>$row[category]</td>
            <td>$row[amount]</td>
            <td>$row[buy_date]</td>
            <td>
            <a class='btn btn-primary btn-sm' href='/RightmoProject/edit.php'>Edit</a> 
            <a class='btn btn-danger btn-sm' href='/RightmoProject/delete.php'>Delete</a></td>
        </tr>";
            ?>
            
        </tbody>
    </table>
</body>

</html>