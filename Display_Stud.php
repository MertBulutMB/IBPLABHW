<html>
<head>
    <title>Display Students</title>
</head>
<body>
<h2>Registered Students</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Gender</th>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "studentdb");
    $sql = "SELECT * FROM students;";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['full_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
