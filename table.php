<html>
    <body>
    <?php
                if (isset($_POST['submit']))
                {
                    if (isset($error))
                    {
                        echo "<p style='color:red;'>" 
                        . $error . "</p>";
                    }
                }
                ?>
                <?php
       if(isset($_POST['submit']))
       {
          if(!isset($error))
           {
                   echo"<h1>INPUT RECEIVED</h1><br>";
                   echo "<table border='1'>";
                   echo "<thead>";
                   echo "<th>Parameter</th>";
                   echo "<th>Value</th>";
                   echo "</thead>";
                   echo "<tr>";
                   echo "<td>First Name</td>";
                   echo "<td>".$firstname."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Last Name</td>";
                   echo "<td>".$lastname."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Address</td>";
                   echo "<td>".$address."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Email Address</td>";
                   echo "<td>" .$emailaddress."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Password</td>";
                   echo "<td>".$password."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Gender</td>";
                   echo "<td>".$gender."</td>";
                   echo "</tr>";
                   echo "</table>";
        }
      }
    ?>
        <?php
if (isset($_POST['submit']))
{
    if ((!isset($_POST['firstname'])) || (!isset($_POST['lastname'])) || 
        (!isset($_POST['address'])) || (!isset($_POST['emailaddress'])) || 
        (!isset($_POST['password'])) || (!isset($_POST['gender'])))
    {
        $error = "*" . "Please fill all the required fields";
    }
    else
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    }
}
?>
    </body>
</html>