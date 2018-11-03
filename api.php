<?php

    require('db.php');
    $data_arr = array();
    $sql = 'SELECT * FROM music ORDER BY id DESC';
    $data = $conn->query($sql);

    while($row = $data->fetch_assoc()){
        $row_array['title'] = $row['title'];
        $row_array['description'] = $row['description'];
        $row_array['image_url'] = $row['image_url'];
        $row_array['music_url'] = $row['music_url'];
        $row_array['category'] = $row['category'];
        array_push($data_arr,$row_array);

    }

    echo json_encode(array("music"=> $data_arr));


?>