<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #d404 {
            margin-left: 30%;
            margin-right: 30%;
            justify-content: center;
            border-radius: 15px 50px;
            background: #be0606;
            padding: 20px;
            width: 360px;
            height: 250px;
            display: flex;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayfa Bulunamadı !</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<section style="padding-top:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-lg-center">
                <div id="d404">
                    <h1 style="font-size: 162px; color:white; text-align: center;">404!</h1>
                </div>
                <br>
                <br>
                <h2>Maalesef Böyle Bir Sayfa Bulunamadı..</h2>
                <br>
                <br>
                <br>
                <h2>Anasayfaya yönlendiriliyorsunuz..</h2>
                <!-- Add the button below -->
                <button onclick="redirectToHomepage()">Anasayfaya Dön</button>
            </div>
        </div>
    </div>

</section>

<script>
    // JavaScript function to redirect to the homepage
    function redirectToHomepage() {
        window.location.href = "/";
    }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
