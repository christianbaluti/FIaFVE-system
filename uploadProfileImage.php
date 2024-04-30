<?php
if (isset($_FILES['profileImage'])) {
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["profileImage"]["name"]);
    if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        // Correctly include 'newImage' within the array
        echo json_encode(['success' => true, 'path' => $target_file, 'newImage' => $target_file]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
