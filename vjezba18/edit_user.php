<?php
// Spajanje na bazu podataka (prilagodite svojim podacima)
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Provjera veze
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Provjeravanje je li ID korisnika predan u URL
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Dohvat podataka korisnika
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found";
        exit();
    }

    // Postavljanje država za padajući izbornik
    $sql_countries = "SELECT * FROM countries";
    $result_countries = $conn->query($sql_countries);
    $countries = $result_countries->fetch_all(MYSQLI_ASSOC);
} else {
    echo "User ID not provided";
    exit();
}

// Provjera je li obrazac poslan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dohvat podataka iz obrasca
    $new_firstname = $_POST['new_firstname'];
    $new_lastname = $_POST['new_lastname'];
    $new_country_code = $_POST['new_country_code'];

    // Ažuriranje podataka korisnika
    $update_sql = "UPDATE users SET firstname = '$new_firstname', lastname = '$new_lastname', country_code = '$new_country_code' WHERE id = $user_id";

    if ($conn->query($update_sql) === TRUE) {
        echo "User updated successfully";
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form method="post" action="">
    <label for="new_firstname">First Name:</label>
    <input type="text" name="new_firstname" value="<?php echo $user['firstname']; ?>" required>
    <br>

    <label for="new_lastname">Last Name:</label>
    <input type="text" name="new_lastname" value="<?php echo $user['lastname']; ?>" required>
    <br>

    <label for="new_country_code">Country:</label>
    <select name="new_country_code">
        <?php
        foreach ($countries as $country) {
            $selected = ($country['country_code'] == $user['country_code']) ? 'selected' : '';
            echo "<option value='{$country['country_code']}' $selected>{$country['country_name']}</option>";
        }
        ?>
    </select>
    <br>

    <input type="submit" value="Save Changes">
</form>

</body>
</html>
