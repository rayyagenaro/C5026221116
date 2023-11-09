<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>topic-4</h1>
        <p><b>note : </b>penggunaan atribut data parent yang mana ketika salah satu showed, maka yang lainnya closed</p>
        <div id="accord">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#data-1">demo card-1</a>
                </div>
                <div id="data-1" class="collapse" data-parent="#accord">
                    <div class="card-body">
                        isi body data 1
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#data-2">demo card-1</a>
                </div>
                <div id="data-2" class="collapse" data-parent="#accord">
                    <div class="card-body">
                        isi body data 2
                    </div>
                </div>
            </div>
        </div>
    </div>

</body></html>
