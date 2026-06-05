<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }

        .container {
            width: 300px;
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            width: 60px;
        }

        #hasil {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator Javascript</h2>

    <input type="number" id="angka1" placeholder="Masukkan angka pertama">
    <input type="number" id="angka2" placeholder="Masukkan angka kedua">

    <br>

    <button onclick="tambah()">+</button>
    <button onclick="kurang()">-</button>
    <button onclick="kali()">*</button>
    <button onclick="bagi()">/</button>

    <div id="hasil">Hasil: </div>
</div>

<script>
    function ambilNilai() {
        let a = parseFloat(document.getElementById("angka1").value);
        let b = parseFloat(document.getElementById("angka2").value);

        return [a, b];
    }

    function tambah() {
        let [a, b] = ambilNilai();
        document.getElementById("hasil").innerHTML =
            "Hasil: " + (a + b);
    }

    function kurang() {
        let [a, b] = ambilNilai();
        document.getElementById("hasil").innerHTML =
            "Hasil: " + (a - b);
    }

    function kali() {
        let [a, b] = ambilNilai();
        document.getElementById("hasil").innerHTML =
            "Hasil: " + (a * b);
    }

    function bagi() {
        let [a, b] = ambilNilai();

        if (b == 0) {
            document.getElementById("hasil").innerHTML =
                "Tidak bisa dibagi 0";
        } else {
            document.getElementById("hasil").innerHTML =
                "Hasil: " + (a / b);
        }
    }
</script>

</body>
</html>