<?php
$conn = new PDO("mysql:host=localhost;dbname=autocompletion;charset=UTF8", "root", "admin");

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $sql = "SELECT * FROM dc_comics WHERE id = " . $id . " ";
    $result = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
    <div class="name">
        <h2><?php echo $result["superhero"]; ?></h2>
    </div>
    <table>
        <thead>
            <tr>
                <th>Superhéro</th>
                <th>Alter Ego</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $result['superhero']; ?></td>
                <td><?php echo $result['alter_ego']; ?></td>
            </tr>
        </tbody>
    </table>
<?php
}
?>

