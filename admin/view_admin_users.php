<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>View Users</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <a href="../admin_home.php">Admin Home</a><br/><br/>
    <?php
        include('../db.php');
        $sql="select * from user_table where user_type='admin'";
        $result=$conn->query($sql);
        if(($result->num_rows)>0){
            echo "<h2 align='center'>List of Admin Users</h2>";
            echo "<table border='1' align='center'><tr><th>ID</th><th>Name</th><th>User Name</th><th>Password</th><th>User Type</th></tr>";
            while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td><td>".$row["user_type"]."</td></tr>";
            }
            echo "</table>";
        }else{
            echo "No Records";
        }
    ?>
</body>
</html>
