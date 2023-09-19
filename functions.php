<?php
$conn = mysqli_connect('localhost', 'root', '', 'todo');
function tambah($select)
{
    global $conn;
    $query = mysqli_query($conn, $select);
    $wadah = [];
    while ($isi = mysqli_fetch_assoc($query)) {
        $wadah[] = $isi;
    }
    return $wadah;
}
//hapus
function delete($remove)
{
    global $conn;
    $query = mysqli_query($conn, $remove);
    return $query;
}
