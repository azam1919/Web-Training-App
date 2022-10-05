<html>

<head>
    <title>Image Processs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.15/css/jquery.Jcrop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.15/js/jquery.Jcrop.js"></script>
</head>

<body>
    <img src="https://i.stack.imgur.com/UYYqo.jpg" alt="" id="image">
    <script>
        $(document).ready(function() {
            $('#image').Jcrop({
                onSelect: function(c) {
                    console.log(c);

                    console.log(c.x);
                    console.log(c.y);
                    console.log(c.w);
                    console.log(c.h);
                }
            });
        });
    </script>
</body>

</html>
