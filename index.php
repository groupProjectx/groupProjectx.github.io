

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="main-container">
        <span class="title">PLEASE INPUT CODE!</span>
        <form class="barcode" method="post" id="barcode">
            <input type="number" name="code" id="code">
            <input type="submit" value="Show" name="getcode">
        </form>
        <div class="barcode-section">
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

    $("#barcode").submit(function(e){
                e.preventDefault();
                let bcode = $('#code').val();
                $.ajax({
                    type: "POST",
                    url: "barcode.php",
                    data: {
                        bcode
                    },
                    success: function(result){
                        $(".barcode-section").html(result);
                    }
                })
            });
    </script>
</body>
</html>