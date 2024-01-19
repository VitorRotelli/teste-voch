<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #checkzinho {
            width: 30%;
            height: 30%;
        }

        .inputs-unidades {
            margin-top: 10px;
        }

        .inputs-unidades span {
            font-family: 'AileronB', sans-serif;
            color: #4BBAA1;
            opacity: 0;
            top: 20px;
            animation: sucesso-uni 1.5s forwards;
            font-size: calc(1.6em + 1.6vw);
        }

        @keyframes sucesso-uni {
            from {
                opacity: 0;
                top: 20px;
            }

            to {
                opacity: 1;
                top: 0px;
            }
        }
    </style>
</head>

<body>

    <div id="checkzinho"> </div>
    <div class="inputs-unidades">
        <span>Sucesso!</span>
    </div>

    <script>
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('checkzinho'),
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: 'https://lottie.host/f8f23123-6089-47f3-be43-20b9d3b07b88/lNPRbFdbWR.json'    
        })
    </script>

    <script>
        setTimeout(function() {
            window.location.href = '/';
        }, 5000);
    </script>

</body>


</html>