<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin only</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/upload.css">
</head>

<body>
    <div class="container">
        <h1>Form Upload Training</h1>
        <form id="uploadForm" action="add2" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="itemText" required><br>

            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="itemDesc" required></textarea><br>

            <input type="submit" value="Save">
        </form>
    </div>
</body>

</html>
