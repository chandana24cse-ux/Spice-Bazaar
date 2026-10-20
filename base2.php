<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student information</title>
</head>
<body>
    <form method="POST">
        USN:
        <input type="text" name="usn"><br><br>
        Name:
        <input type="text" name="name"><br><br>
        Branch:
        <input type="text" name="branch"><br><br>
         Email:
        <input type="email" name="email"><br><br>
        <input type="submit" name="submit" value="Save">
    </form>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "student_db1");
    if($conn)
        {
            echo "Connection successful <br><br>";
        }
        else
            {
            echo "Connection failed<br><br>" ;

        }
        $database="CREATE DATABASE IF NOT EXISTS student_db1";
        if(mysqli_query($conn, $database))
        {
            echo "Database created successfully <br><br>";
        }
        else
        {
            echo "Error creating database: " ;
        }
        mysqli_select_db($conn, "student_db1");
        echo "Database selected successfully <br><br>";
        
            $table = "CREATE TABLE IF NOT EXISTS student_info
             (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                usn VARCHAR(30) ,
                name VARCHAR(50) ,
                branch VARCHAR(50) ,
                email VARCHAR(50) 
            )";
            
             if(mysqli_query($conn, $table))
                {
                    echo "Table created successfully <br><br>";
                }
                else
                {
                    echo "Error inserting data: <br><br>";
                }
                if(isset($_POST['submit']))
                {
                    $usn = $_POST['usn'];
                    $name = $_POST['name'];
                    $branch = $_POST['branch'];
                    $email = $_POST['email'];
                
                    $insert = "INSERT INTO student_info (usn,name,branch,email)
                    VALUES('$usn', '$name', '$branch', '$email')";
                
                    if(mysqli_query($conn, $insert))
                    {
                        echo "Data inserted successfully <br><br>";
                    }
                    else
                    {
                        echo "Error inserting data: <br><br>";
                    }
                }
                $result = mysqli_query($conn, "SELECT * FROM student_info");
                echo "<h2>Student Information:</h2>";
                echo "<table border='1' cellpadding='10'>";
                echo "<tr>
                <th>usn</th>
                <th>name</th>
                <th>branch</th>
                <th>email</th>
                </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_close($conn);
                echo "Connection closed <br><br>";
                ?>
                </body>
                </html>
            