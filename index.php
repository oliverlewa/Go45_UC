<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        
        /* Background images */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('UC_Landscape.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
        }
        
        /* Portrait mode background */
        @media (max-width: 768px) {
            body::before {
                background-image: url('UC_portrait.jpeg');
            }
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            padding: 40px 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }
        
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .progress-container {
            width: 100%;
            background-color: rgba(255,255,255,0.2);
            border-radius: 10px;
            padding: 15px;
            margin: 30px 0;
        }
        
        .progress-bar {
            height: 20px;
            background: linear-gradient(90deg, #ff9a9e, #fad0c4);
            border-radius: 10px;
            width: 65%;
            transition: width 1s ease-in-out;
        }
        
        .countdown {
            font-size: 1.5rem;
            margin-top: 20px;
            background: rgba(255,255,255,0.2);
            padding: 15px;
            border-radius: 10px;
            display: inline-block;
        }
        
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            
            p {
                font-size: 1rem;
            }
            
            .container {
                padding: 20px 15px;
            }
        }
        
        @media (max-width: 400px) {
            h1 {
                font-size: 1.5rem;
            }
            
            .countdown {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Under Construction</h1>
        
        <p>We're working hard to bring you something amazing. Please check back soon!</p>
        
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
        
        <div class="countdown">
            Estimated Completion: <span id="countdown">30 days</span>
        </div>
    </div>

    <script>
        // Simple countdown animation
        const progressBar = document.querySelector('.progress-bar');
        let progress = 0;
        
        function updateProgress() {
            progress += 0.5;
            if (progress <= 65) {
                progressBar.style.width = progress + '%';
                setTimeout(updateProgress, 100);
            }
        }
        
        // Start animation
        window.onload = function() {
            updateProgress();
        };
    </script>
</body>
</html>
