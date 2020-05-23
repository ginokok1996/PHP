<?php
class BroodLijst
{

    private $broodjes = [];
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $conn;
    private $query;

    function __construct()
    {

        $this->conn = new PDO("mysql:host=$this->servername;dbname=ginokok1996_nl_school", $this->username, $this->password);
        try {

            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    function voegBroodToe($naam, $soort, $vorm, $gewicht)
    {
        if ($naam != "" && $gewicht != "") {
            $this->query =
                "INSERT INTO brood
                (naam,soort,vorm,gewicht)
                VALUES('$naam','$soort','$vorm','$gewicht')";
            $stmt = $this->conn->prepare($this->query) or die('17');
            $stmt->execute() or die('error 19');
        }
    }

    function getBroodjes()
    {
        $this->query = "SELECT * FROM brood";
        $stmt = $this->conn->prepare($this->query) or die('17');
        $stmt->execute() or die('error 19');

        while ($array = $stmt->fetch()) {
            $nieuwBrood = new Brood($array['naam'], $array['soort'], $array['vorm'], $array['gewicht']);
            $this->broodjes[] = $nieuwBrood;
        }
        return $this->broodjes;
    }
}
