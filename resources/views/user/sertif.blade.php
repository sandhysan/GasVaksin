<html>

<head>
    <style type='text/css'>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        body {
            color: black;
            display: table;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }

        .container {
            border: 20px solid #6BB3FF;
            width: 100vw;
            height: 100vh;
            display: table-cell;
            vertical-align: middle;
        }

        .logo {
            color: #6BB3FF;
        }

        .marquee {
            color: #6BB3FF;
            font-size: 48px;
            margin: 20px;
        }

        .assignment {
            margin: 20px;
        }

        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }

        .reason {
            margin: 20px;
        }
        .tombol{
            background-color: #d11313;
            width: 200px;
            height: 30px;
            border: none;
            border-radius: 5px;
            font-size: 20px
        }
        .tombol:hover{
            background-color: #6BB3FF;
        }
    </style>

</head>

<body >
    <input class="tombol" type="button" style="position: absolute; z-index: 1; top: 30px; left: 30px;"  onclick="printDiv('printableArea')" value="Cetak sertif" />
    <div class="print" id="printableArea">
        <div class="container" >
            <div class="logo" id="losd">
                GasVaksin
            </div>

            <div class="marquee">
                Sertifikat vaksin GasVaksin
            </div>

            <div class="assignment">
                Sertifikat ini ditunjukan kepada
            </div>

            <div class="person">
                {{$riwayat->user->nama}}
            </div>

            <div>
                <p>( ID Peserta: {{$riwayat->tempat->tahap}} | ID Lokasi: {{$riwayat->tempat_id}} )</p>
            </div>

            <div class="reason">
                Atas ke ikut sertaan program vaksin <br>
                Tahap {{$riwayat->tempat->tahap}}
            </div>

        </div>
    </div>



        <script>
        function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
}
    </script>

</body>

</html>
