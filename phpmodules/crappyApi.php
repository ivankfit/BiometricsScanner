<?php

if (isset($_POST['getData'])) {
    $conn = new mysqli('localhost', 'root', '', 'records');

    $start = $conn->real_escape_string($_POST['start']);
    $limit = $conn->real_escape_string($_POST['limit']);

    $sql = $conn->query("SELECT patient_id, fingerprint FROM patient LIMIT $start, $limit");
    if ($sql->num_rows > 0) {
        $response = array();

        while($data = $sql->fetch_assoc()) {
            $response [] = $data;           
            
        }

        exit(json_encode($response));
    } else
        exit('reachedMax');
}

?>