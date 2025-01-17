<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f5;
            transition: background-color .3s, color .3s;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .modo-escuro {
            background-color: #181818;
            color: #fff;
        }

        .container {
            background-color: #fff;
            width: 100%;
            max-width: 380px;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .1);
            text-align: center;
            position: relative;
            transition: background-color .3s, color .3s;
        }

        .modo-escuro .container {
            background-color: #222;
        }

        .imagem-perfil {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            transition: transform .3s ease;
        }

        .imagem-perfil:hover {
            transform: scale(1.1);
        }

        .nome {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 10px;
            color: inherit;
        }

        .bio {
            font-size: 14px;
            margin-bottom: 20px;
            color: inherit;
        }

        .links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .link {
            padding: 16px 24px;
            border-radius: 50px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(145deg, #6a11cb, #2575fc);
            box-shadow: 4px 4px 10px rgba(0, 0, 0, .1), -4px -4px 10px rgba(255, 255, 255, .1);
            transition: all .3s ease;
            position: relative;
        }

        .link::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, .2);
            border-radius: 50px;
            opacity: 0;
            transition: opacity .3s;
        }

        .link:hover::after {
            opacity: 1;
        }

        .link:hover {
            transform: translateY(-4px);
            box-shadow: 6px 6px 15px rgba(0, 0, 0, .15), -6px -6px 15px rgba(255, 255, 255, .2);
        }

        .links-sociais {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 20px;
        }

        .link-social {
            width: 50px;
            height: 50px;
            background-color: #fff;
            color: #6a11cb;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            transition: all .3s ease;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, .1), -4px -4px 10px rgba(255, 255, 255, .1);
        }

        .link-social:hover {
            background-color: #6a11cb;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 6px 6px 15px rgba(0, 0, 0, .1), -6px -6px 15px rgba(255, 255, 255, .2);
        }

        .rodape {
            font-size: 12px;
            margin-top: 30px;
            color: inherit;
        }

        .rodape a {
            text-decoration: none;
            color: #6a11cb;
        }

        .rodape a:hover {
            text-decoration: underline;
        }

        .botao-modo {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #fff;
            border: none;
            padding: 10px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, .1), -4px -4px 10px rgba(255, 255, 255, .1);
            transition: all .3s;
        }

        .botao-modo:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, .2), -6px -6px 15px rgba(255, 255, 255, .2);
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            .nome {
                font-size: 22px;
            }

            .bio {
                font-size: 13px;
            }

            .link {
                font-size: 15px;
            }

            .links-sociais {
                margin-top: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <button id="botaoModo" class="botao-modo">
            <i class="fas fa-sun"></i>
        </button>
        <img class="imagem-perfil" src="https://images-ext-1.discordapp.net/external/soapWg455u6sgT19V4WJdlGU1A6AfF_B_JeDpI40yhk/%3Fsize%3D2048/https/cdn.discordapp.com/avatars/1032861462634438687/d20eadea705a0207bf77358fe2b2fc35.png" alt="Foto de perfil">
        <div class="nome">Crazy_ArKzX</div>
        <div class="bio">Owner ForTGroup</div>
        <div class="links">
            <a target="_blank" class="link" href="https://dc.gg/nockrpg">Meu Servidor</a>
            <a target="_blank" class="link" href="https://dc.gg/arkzx">Minha Família</a>
            <a target="_blank" class="link" href="https://dc.gg/nilplays">Nil Play's Community</a>
            <a target="_blank" class="link" href="https://dc.gg/n1xteam">N1x Team</a>
            <a target="_blank" class="link" href="https://starsgames.com.br">StarsGames</a>
        </div>
        <div class="links-sociais">
            <a target="_blank" class="link-social" href="https://www.youtube.com/@Crazy_ArKzX">
                <i class="fab fa-youtube"></i>
            </a>
            <a target="_blank" class="link-social" href="https://github.com/crazy-arkzx">
                <i class="fab fa-github"></i>
            </a>
            <a target="_blank" class="link-social" href="https://www.tiktok.com/@crazy.arkzx">
                <i class="fab fa-tiktok"></i>
            </a>
        </div>
        <div class="rodape">
            <p>Feito com ❤ por <a target="_blank" href="https://github.com/crazy-arkzx">Crazy_ArKzX</a></p>
        </div>
    </div>

    <script>
        const botaoModo = document.getElementById('botaoModo');
        const corpo = document.body;

        botaoModo.addEventListener('click', () => {
            corpo.classList.toggle('modo-escuro');
            const container = document.querySelector('.container');
            if (corpo.classList.contains('modo-escuro')) {
                botaoModo.innerHTML = '<i class="fas fa-moon"></i>';
                container.classList.add('modo-escuro');
            } else {
                botaoModo.innerHTML = '<i class="fas fa-sun"></i>';
                container.classList.remove('modo-escuro');
            }
        });

        function gerarIP() {
            return `${Math.floor(Math.random() * 256)}.${Math.floor(Math.random() * 256)}.${Math.floor(Math.random() * 256)}.${Math.floor(Math.random() * 256)}`;
        }

        const ipVisitante = gerarIP();
        console.log(`${ipVisitante} Visualizou sua Bio`);
    </script>
</body>

</html>