<!DOCTYPE html>
<html>
<head>
    <title>Upload a JSON File</title>
</head>
<body>
    <h1>Upload a JSON File</h1>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <input type="file" name="json_file" accept=".json" />
        <input type="submit" name="next" value="NEXT" />
    </form>
</body>
</html>
