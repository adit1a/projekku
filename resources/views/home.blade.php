<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="guwa">
        <h2 class="title">Home Page</h2>
        <div class="container">
            <div class="kotak-kotak">
                <p class="kotak11">Kotak pertama</p>
                <p class="kotak22">kotak dua</p>
                <p class="kotak32">kotak ke 3</p>
                <p class="kotak44">kotak ke 4</p>
            </div>
            <div class="label">
                <div class="box"> <p class="ini">tandai ini guys</p>
                    <input class="chek" type="checkbox" id="untukcontoh">
                    <label class="label1" for="untukcontoh">check</label>
                    <input type="checkbox" id="untukcontoh" class="chek">
                    <label class="label1" for="untukcontoh">check</label>
                </div>
            </div>
        </div>
        <div class="middle">
            <p class="mid1">kotak tengah</p>
            <p class="mid12">ini tulisan</p>
            <div class="tombol">
                <button id='tombol-home'type="button" 
                class="button" disabled aria-label="Close"><a href="/"
                        class="tekan">Tekan</a></button>
            </div>
            <div class="class-btn">
                <button class="btn-tolist"><a class="btn-tolist1"
                href='/toList'>Tekan
                </a></button>
            </div>
        </div>
    </div>
</body>

</html>