<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat | Star One Education Center</title>
    <style>
        body {
            background: #f3f3f3;
            text-align: center;
            font-family: 'Sorts Mill Goudy', 'Goudy Bookletter 1911', serif;
            letter-spacing: 0.8px;
        }

        canvas {
            border: 1px solid #ccc;
            margin-top: 20px;
            max-width: 100%;
            height: auto;
        }

        .btn {
            background: #007bff;
            color: white;
            padding: 10px 18px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <input type="hidden" id="name" value="{{ $data->name }}">
    <input type="hidden" id="kursus" value="{{ $data->kursus }}">

    <canvas id="certificateCanvas" width="1086" height="768"></canvas>
    <br>
    <button class="btn" id="downloadBtn" style="margin-top: 20px">Download Sertifikat</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const canvas = document.getElementById('certificateCanvas');
            const ctx = canvas.getContext('2d');

            const bg = new Image();
            const qr = new Image();

            const name = $('#name').val();
            const kursus = $('#kursus').val();

            let imagesLoaded = 0;

            function drawCertificate() {
                // Gambar background
                ctx.drawImage(bg, 0, 0, canvas.width, canvas.height);

                // Tulis teks
                ctx.textAlign = 'center';
                ctx.fillStyle = '#000';
                ctx.font = 'bold 38px "Sorts Mill Goudy", "Goudy Bookletter 1911", serif';
                ctx.fillText(name, canvas.width / 2, 340);

                ctx.font = 'bold 28px "Poppins"';
                ctx.fillText(kursus, canvas.width / 2, 450);

                ctx.font = '18px "Poppins"';
                ctx.fillText('Berlaku hingga 23 Januari 2027', canvas.width / 2 + 270, 670);

                // Gambar QR di atas background
                ctx.drawImage(qr, canvas.width - 340, canvas.height - 305, 150, 150);
            }

            function checkLoaded() {
                imagesLoaded++;
                if (imagesLoaded === 2) drawCertificate();
            }

            bg.onload = checkLoaded;
            qr.onload = checkLoaded;

            // Set sumber gambar
            bg.src = "{{ asset('own_assets/images/template.png') }}";
            qr.src = "{{ asset('own_assets/images/qr.png') }}";

            $('#downloadBtn').on('click', function() {
                const link = document.createElement('a');
                link.download = `sertifikat-${name}.png`;
                link.href = canvas.toDataURL('image/png');
                link.click();
            });
        });
    </script>
</body>
</html>
