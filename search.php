<?php
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}
$conn = new PDO("mysql:host=localhost;dbname=autocompletion;charset=UTF8", "root", "admin");
$sql = "SELECT id, superhero FROM dc_comics WHERE superhero LIKE '%$search%'";
$result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <td class="link"><input class="form-control" id="closeSearch" type="button" value="x"></td>
    <?php
    foreach ($result as $data) {
        echo '<tr class="list"><td><a class="" href=index.php?id=' . $data['id'] . '>' . $data['superhero'] . ' </a></td></tr>';
    }
    ?>
</table>