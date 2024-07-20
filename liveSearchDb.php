<?php
$con = new mysqli("localhost","root","","jqueryformdetails");

$sql = "select * from details where name like '{$_POST["s"]}%' OR mail like '{$_POST["s"]}%'";

$res = $con->query($sql);

echo "
        <table border='1'>
        <tr>
        <th>Name</th>
        <th>Dob</th>
        <th>Email</th>
        </tr>
     ";

if($res->num_rows > 0)
{
    while($row = $res->fetch_assoc())
    {
        echo"
                <tr>
                <td>{$row["name"]}</td>
                <td>{$row["dob"]}</td>
                <td>{$row["mail"]}</td>
                </tr>
            ";
    }

    echo "</table>";
}

else
{
    echo"<p>no record found</p>";
}
?>