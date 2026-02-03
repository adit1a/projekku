<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/gaya.css')}}">
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
            </div>
    <div class="isi2">
        <div class="kotak2">
                <span>Senin</span>
                <p>pilih</p> 
            <div class="item-radio">
                <input type="radio" class="input2" id="senin_exc">
                <label for="radio" class="radio1">excercise</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="senin_baca">
                <label for="radio" class="radio1">Baca buku</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="senin_valorant">
                <label for="radio" class="radio1">Valorant</label>
            </div>
            
        </div>
        <div class="tekann2">
                <button class="tekan3">Simpan</button>
            </div>
        </div>
        <div class="isi3">
            <div class="kotak3">
                <span>Selasa</span>
                <p>pilih</p> 
            <div class="item-radio">
                <input type="radio" class="input2" id="selsa_exc" name="selasa">
                <label for="radio" class="radio1">excercise</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="selsa_baca" name="selasa">
                <label for="radio" class="radio1">Baca buku</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="selsa_valorant" name="selasa">
                <label for="radio" class="radio1">Valorant</label>
            </div>
        </div>
        <div class="tekann3">
                <button class="tekan4">Simpan</button>
            </div>
    </div>
     <div class="isi4">
            <div class="kotak4">
                <span>Rabu</span>
                <p>pilih</p> 
            <div class="item-radio">
                <input type="radio" class="input2" id="rabu_exc" name="rabu">
                <label for="radio" class="radio1">excercise</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="rabu_baca" name="rabu">
                <label for="radio" class="radio1">Baca buku</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="rabu_valorant" name="rabu">
                <label for="radio" class="radio1">Valorant</label>
            </div>
        </div>
        <div class="tekann3">
                <button class="tekan4">Simpan</button>
            </div>
    </div>       
    <div class="isi5">
        <div class="kotak5">
                <span>Kamis</span>
                <p>pilih</p> 
            <div class="item-radio">
                <input type="radio" class="input2" id="kamis_exc" name="kamis">
                <label for="radio" class="radio1">excercise</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="kamis_baca" name="kamis">
                <label for="radio" class="radio1">Baca buku</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="kamis_valorant" name="kamis">
                <label for="radio" class="radio1">Valorant</label>
            </div>
        </div>
            <div class="tekann4">
                <button class="tekan5">Simpan</button>
            </div>
        </div>
    <div class="isi6">
        <div class="kotak6">
                <span>Jum'at</span>
                <p>pilih</p> 
            <div class="item-radio">
                <input type="radio" class="input2" id="jumat_exc" name="jumat">
                <label for="radio" class="radio1">excercise</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="jumat_baca" name="jumat">
                <label for="radio" class="radio1">Baca buku</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="jumat_valorant" name="jumat">
                <label for="radio" class="radio1">Valorant</label>
            </div>
        </div>
            <div class="tekann5">
                <button class="tekan6">Simpan</button>
            </div>
        </div>
         <div class="isi7">
            <div class="kotak7">
                <span>Sabtu</span>
                <p>pilih</p> 
            <div class="item-radio">
                <input type="radio" class="input2" id="sabtu_exc" name="sabtu">
                <label for="radio" class="radio1">excercise</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="sabtu_baca" name="sabtu">
                <label for="radio" class="radio1">Baca buku</label>
            </div>
            <div class="item-radio">
                <input type="radio" class="input2" id="sabtu_valorant" name="sabtu">
                <label for="radio" class="radio1">Valorant</label>
            </div>
        </div>
        <div class="tekann6">
                <button class="tekan7">Simpan</button>
            </div>
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