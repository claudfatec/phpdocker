<?php
if ($proxverscl >= 217434) {
    $proxverscl=186374;
} elseif ($proxverscl <=186372) {
    $proxverscl=217430;
}
$sql = "select books.id, chapter, name from books inner join verses on book = books.id -1 where verses.id = '$proxverscl' ";
$results = mysqli_query($conn, $sql);
if ($results === false) {
    echo mysqli_error($conn);
} else {
    $bibles = mysqli_fetch_all($results, MYSQLI_ASSOC);
} 
    if (empty($bibles)){
        echo 'SQL não funfou.';
    } else {
        foreach ($bibles as $bible)
        $bookid= $bible['id'];
        $captl= $bible['chapter'];
        $nombre= $bible['name'];
    } 