<head>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "ginokok1996_nl_school";
    $password = "4MpJtMQBb4ff";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=ginokok1996_nl_school", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    $query = "SELECT * FROM cursist";
    $stmt = $conn->prepare($query) or die('17');
    $stmt->execute() or die('error 19');


    echo '<table>';

    while ($array = $stmt->fetch()) {
        echo '<tr>';
        echo "<td>" . $array['cursistnr'] . "</td>";
        echo "<td>" . $array['naam'] . "</td>";
        echo "<td>" . $array['roepnaam'] . "</td>";
        echo "<td>" . $array['straat'] . "</td>";
        echo "<td>" . $array['postcode'] . "</td>";
        echo "<td>" . $array['plaats'] . "</td>";
        echo "<td>" . $array['geslacht'] . "</td>";
        echo "<td>" . $array['geb_datum'] . "</td>";
        echo '</tr>';
    }

    echo '</table>';
    ?>

    <br>
    <a href="/h06/hoofdstuk6.php">Terug</a>
</body>