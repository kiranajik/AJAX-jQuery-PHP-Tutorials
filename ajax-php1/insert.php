<?php
$conn = mysqli_connect("localhost","root","","test") or die ("Database Connection FAILED");
$sql  = "SELECT * FROM students";
$result = mysqli_query($conn,$sql) or die("SQL query FAILED");
$output = "";
if(mysqli_num_rows($result)>0)
{
    $output='<table border="1" width="100%" cellspacing="0" cellpadding="10px">
            <tr>
                <th>Id</th>
                <th>Surname</th>
                <th>ForeName</th>
            </tr>';
    while($row = mysqli_fetch_assoc($result))
    {
        $output .= "<tr><td>{$row["student_no"]}</td>
                    <td>{$row["surname"]}</td>
                    <td>{$row["forename"]}</td></tr>";

    }
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
}
else{
    echo "<h2>Records not Found</h2>";
}

?>
