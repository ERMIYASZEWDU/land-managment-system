
<?php
// Check if the user is logged in as an admin
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Include the database connection file
include './pages/connection.php';

// Function to add a new register officer
function addRegisterOfficer($name, $email) {
    global $connection;
    $query = "INSERT INTO register_officers (name, email) VALUES ('$name', '$email')";
    mysqli_query($connection, $query);
}

// Function to delete a register officer
function deleteRegisterOfficer($id) {
    global $connection;
    $query = "DELETE FROM register_officers WHERE id = $id";
    mysqli_query($connection, $query);
}

// Function to update a register officer
function updateRegisterOfficer($id, $name, $email) {
    global $connection;
    $query = "UPDATE register_officers SET name = '$name', email = '$email' WHERE id = $id";
    mysqli_query($connection, $query);
}

// Function to search for a parcel by ID
function searchParcel($parcel_id) {
    global $connection;
    $query = "SELECT * FROM land_registration WHERE parcel_id = $parcel_id";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result);
}

// Function to view all parcels
function viewParcels() {
    global $connection;
    $query = "SELECT * FROM land_registration";
    $result = mysqli_query($connection, $query);
    return $result;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submissions for adding, deleting, and updating register officers
    if (isset($_POST['add_officer'])) {
        addRegisterOfficer($_POST['officer_name'], $_POST['officer_email']);
    } elseif (isset($_POST['delete_officer'])) {
        deleteRegisterOfficer($_POST['officer_id']);
    } elseif (isset($_POST['update_officer'])) {
        updateRegisterOfficer($_POST['officer_id'], $_POST['officer_name'], $_POST['officer_email']);
    }
}

?>

<!-- HTML form to add, delete, and update register officers -->
<h1>Manage Register Officers</h1>
<form method="post">
    <label>Add Register Officer:</label>
    <input type="text" name="officer_name" placeholder="Name">
    <input type="email" name="officer_email" placeholder="Email">
    <button type="submit" name="add_officer">Add</button>
</form>

<form method="post">
    <label>Delete Register Officer:</label>
    <input type="number" name="officer_id" placeholder="ID">
    <button type="submit" name="delete_officer">Delete</button>
</form>

<form method="post">
    <label>Update Register Officer:</label>
    <input type="number" name="officer_id" placeholder="ID">
    <input type="text" name="officer_name" placeholder="Name">
    <input type="email" name="officer_email" placeholder="Email">
    <button type="submit" name="update_officer">Update</button>
</form>

<!-- HTML form to search for a parcel -->
<h1>Search Parcel</h1>
<form method="get">
    <input type="number" name="parcel_id" placeholder="Parcel ID">
    <button type="submit">Search</button>
</form>

<?php
// Handle parcel search results
if(isset($_GET['parcel_id'])) {
    $parcel_id = $_GET['parcel_id'];
    $parcel = searchParcel($parcel_id);
    
    if ($parcel) {
        echo "<h2>Parcel Found:</h2>";
        echo "<p>Owner Name: ".$parcel['owner_name']."</p>";
        echo "<p>Address: ".$parcel['address']."</p>";
        echo "<p>Area: ".$parcel['area']."</p>";
    } else {
        echo "<h2>Parcel Not Found</h2>";
    }
}

// Display all parcels
echo "<h1>View Parcels</h1>";
$result = viewParcels();
echo "<table border='1'>";
echo "<tr><th>Parcel ID</th><th>Owner Name</th>&l

ChatGPT & Midjourney | AI bot, [09/03/2024 06:21]
t;th>Address</th><th>Area</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['parcel_id']."</td>";
    echo "<td>".$row['owner_name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['area']."</td>";
    echo "</tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($connection);
?>
