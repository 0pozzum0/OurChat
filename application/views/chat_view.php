<h2>Chat</h2>
<?php
foreach ($data as $row) {
    echo '<pre><tr><td>' . $row['Year'] . '</td><td>' . $row['Site'] . '</td><td>' . $row['Description'] . '</td></tr></pre>';
}
?>

