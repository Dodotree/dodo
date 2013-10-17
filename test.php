<?php

// to test saving /u/test.txt (should have permition and ownership of root)
// curl -F MAX_FILE_SIZE='10485760' -F userfile=@"/u/test.txt" http://localhost/test.php

$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?>
