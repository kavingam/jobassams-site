<?php
// Database connection
// $host = "localhost";
// $dbname = "jobassams_com";
// $username = "root";
// $password = "";
include 'db/pdo_connections.php';
try {
    // $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, [
    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    // ]);

    // Get category_id from AJAX request
    $category_id = isset($_GET["category_id"]) ? (int)$_GET["category_id"] : 0;

    // Fetch category 0 data
    $stmt = $pdo->prepare("SELECT t1, t2 FROM table_data WHERE category_id = :category_id");
    $stmt->execute([":category_id" => $category_id]);
    $rows = $stmt->fetchAll();

    // Generate HTML rows
    if ($rows) {
        foreach ($rows as $row) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["t1"]) . "</td>
                    <td class='text-center'><a href='" . htmlspecialchars($row["t2"]) . "' target='_blank' class='text-decoration-none'>Click</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='2' class='text-center'>No data available.</td></tr>";
    }
} catch (PDOException $e) {
    echo "<tr><td colspan='2' class='text-danger'>Database Error</td></tr>";
}
?>
