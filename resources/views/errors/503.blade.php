<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{URL::to('/')}}/assets/img/logos/logo_danakirti.png" type="image/x-icon">
    <title>Maintenance</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: #164039;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        .maintenance-container {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        h1 {
            font-size: 2rem;
            margin: 10px 0;
        }

        p {
            font-size: 1rem;
            margin: 0;
        }

        canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        /* Animasi logo */
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }


    </style>
</head>
<body>
    <div class="maintenance-container">
        <img src="{{URL::to('/')}}/assets/img/logos/logo_danakirti.png" alt="Logo Web" class="logo">
        <h1>Sedang dalam Maintenance</h1>
        <p>Kami sedang melakukan peningkatan. Terima kasih atas kesabaran Anda.</p>
    </div>
    <div>
        <canvas id="bubbles"></canvas>
    </div>
    <script>
        const canvas = document.getElementById("bubbles");
        const ctx = canvas.getContext("2d");

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const bubbles = [];

        class Bubble {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = canvas.height + Math.random() * 100;
                this.radius = Math.random() * 10 + 5;
                this.speed = Math.random() * 2 + 1;
                this.opacity = Math.random() * 0.5 + 0.5;
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                ctx.fill();
                ctx.closePath();
            }

            update() {
                this.y -= this.speed;
                if (this.y + this.radius < 0) {
                    this.y = canvas.height + Math.random() * 100;
                    this.x = Math.random() * canvas.width;
                }
            }
        }

        function createBubbles() {
            for (let i = 0; i < 50; i++) { // Membuat 50 gelembung
                bubbles.push(new Bubble());
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            bubbles.forEach((bubble) => {
                bubble.update();
                bubble.draw();
            });
            requestAnimationFrame(animate);
        }

        createBubbles();
        animate();

        window.addEventListener("resize", () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });


    </script>
</body>
</html>
