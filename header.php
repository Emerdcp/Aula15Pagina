<!DOCTYPE html>
<html lang="pt-br">
<!-- header.php -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilo.css">

    <style>
        .fundo {
            background: rgb(14,12,55);
            background: linear-gradient(90deg, rgba(14,12,55,1) 0%, rgba(35,76,116,1) 12%, rgba(58,147,173,1) 32%, rgba(59,178,212,1) 51%, rgba(183,210,215,1) 79%, rgba(172,172,172,1) 100%);

        }/* Site para Gradiante => https://cssgradient.io/
        /*.fundo {
            min-height: 100vh;
            background: radial-gradient(50% 123.47% at 50% 50%, #00ff94 0%, #720059 100%),
                linear-gradient(121.28deg, #669600 0%, #ff0000 100%),
                linear-gradient(360deg, #0029ff 0%, #8fff00 100%),
                radial-gradient(100% 164.72% at 100% 100%, #6100ff 0%, #00ff57 100%),
                radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #51d500 100%);
            background-blend-mode: screen, color-dodge, overlay, difference, normal;
        }*/

        .fundo-cinza {
            background-color: #f8f8f8;
        }
        .active{
            font-weight: bold;
        }

        .avatar {
            border: 0.3rem solid rgba(#fff, 0.3);
            margin-top: -6rem;
            margin-bottom: 1rem;
            max-width: 9rem;
        }        
    </style>
</head>

<body>
    <main class="fundo">
    