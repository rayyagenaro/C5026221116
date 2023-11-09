<html><head>
    <title>CSS</title>
    <link rel="stylesheet" href="p4/mystyle.css">
    <style>
        body {
            font-family:Georgia, 'Times New Roman', Times, serif;
            color: blueviolet;
        }
        p {
            text-align: center;

        }
        .tes {
            font-size: 100px;
            text-align: center;
            font-weight: bold;
            color: darkslateblue;
            text-transform: uppercase;
        }

        .garisbawah {
            text-decoration: underline;
            color: black;
        }

    </style>

</head>
    <body>
        <b style="
        color: rgb(64, 5, 112);
        text-decoration: underline;
        font-size: 50px;
         ">HALLO</b>
        <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda -->
        <p>
        Hallo <b style="
        color:red;
        text-decoration: underline;
        text-shadow: 2px 2px rgb(187, 96, 157);
        ">Apa</b> Kabar?
        <!-- Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->
       </p><div class="garisbawah tes"> Hallo Apa Kabar ?</div>
       <!-- External File, digunakan untuk global 1 situs-->
        <span class="sembunyi">Hallo Apa Kabar ?</span>
        <p>Hallo Apa Kabar ?</p>



</body></html>
