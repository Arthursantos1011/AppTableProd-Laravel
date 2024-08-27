<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon" />
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="CssForms.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="formStyles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contato">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/quemsomos">Quem somos</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5 d-flex justify-content-center">
                    <form action="/contato" method="POST" style="margin-top: 20px;">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="motivo_contato" class="form-label">Motivo do Contato</label>
                            <textarea class="form-control" id="motivo_contato" name="motivo_contato" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    
                        @if(isset($data))
                        <div class="mt-5">
                            <h2>Dados Recebidos</h2>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nome:</strong> {{ $data['nome'] }}</li>
                                <li class="list-group-item"><strong>Telefone:</strong> {{ $data['telefone'] }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $data['email'] }}</li>
                                <li class="list-group-item"><strong>Motivo do Contato:</strong> {{ $data['motivo_contato'] }}</li>
                                <li class="list-group-item"><strong>Mensagem:</strong> {{ $data['mensagem'] }}</li>
                            </ul>
                        </div>
                        @endif
                        </div>

 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

