<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Web 2023</title>
    <link rel="stylesheet" href="/asset/style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h1>Workshop Web Developer</h1>
        </div> 
    </div>

    <div class="form">
        <form action="proses.php" method="post">
            <div class="form-gr">
                <label>Nama</label>
                <input type="text" name="content[]" placeholder="Nama">
            </div>
            <div class="form-gr">
                <label>NIM</label>
                <input type="text" name="content[]" placeholder="NIM">
            </div>
            <div class="form-gr">
                <label>Fakultas</label>
                <input type="text" name="content[]" placeholder="Fakultas">
            </div>
            <div class="form-gr">
                <label>Prodi</label>
                <input type="text" name="content[]" placeholder="Prodi">
            </div>

            <input class="submit" type="submit" value="Submit">
        
        </form>
        <div class="clx"></div>
    </div>

    <div id="content-js">
    </div>
    <input type="text" id="input_js">
    <script src="./asset/tes.js"></script>

</body>
</html>
