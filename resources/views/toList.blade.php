<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/gaya.css') }}">
    <title>To Do list</title>
</head>

<body>
    <div class="container">
        <div class="todos">
            <h1 class="h1list">To Do List Saya</h1>
        </div>
        <div class="todolist">
            <h2 class="h2list">plan untuk hari ini</h2>
            <h2 class="h2list2">ngapain</h2>
        </div>
        <div class="isi">
            <div class="kotak1">
                <span class="pclass">Rencana</span>
                <div class="input">
                <label for="" class="label1">Tulis</label>
                <input type="text" class="class1" id="id" 
                placeholder="ketik apa yang">
                </div>
                <div class="input">
                <label for="" class="label1">Tulis</label>
                <input type="text" class="class1" id="id" 
                placeholder="ketik apa yang">
                </div>
                <div class="input">
                <label for="text" class="label1">Tulis</label>
                <input type="text" class="class1" id="id" 
                placeholder="ketik apa yang">
                </div>
            </div>
            <div class="tekann">
                <button class="tekan2">Simpan</button>
            </div>
        <div class="isi2">
            <div class="kata">
                <span>Tandai</span>
                
            </div>

            <div class="pilihan">
                <p>pilih</p>
                <input type="radio" class="input2" id="penting">
                <label for="radio">excercise</label>
                <input type="radio" class="input2" id="penting">
                <label for="radio">Baca buku</label>
                <input type="radio" class="input2" id="penting">
                <label for="radio">Valorant</label>
            </div>
        </div>
            <div class="tombol">
                <button class="tekan"><a href="/home" class="btn-tekan">
                        tekan ini kembali ke home
                    </a></button>
            </div>
        </div>
    </div>
</body>

</html>