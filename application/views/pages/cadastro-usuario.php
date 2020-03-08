<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title><?= $title ?></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" method="post" action="<?= base_url() ?>cadastro/cadastrar">
    <img class="mb-4" src="<?= base_url() ?>assets/img/estagioPontoLogo.png" alt="" width="180" height="180">
    <h1 class="h3 mb-3 font-weight-normal">Faça seu Cadastro</h1>

    <label for="inputName" class="sr-only">Nome de Usuário</label>
    <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Nome de Usuário" required autofocus>

    <label for="inputEmail" class="sr-only">E-mail</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail" required>

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>

    <label for="inputName" class="sr-only">Nome Completo</label>
    <input type="text" name="nome_completo" id="inputNomeCompleto" class="form-control" placeholder="Nome Completo" required>

    <label for="inputName" class="sr-only">Setor</label>
    <input type="text" name="setor" id="inputSetor" class="form-control" placeholder="Setor">

    <div class="form-group">
      <label for="selectCargaHoraria">Carga Horária Diária</label>
      <select class="form-control" id="selectCargaHoraria">
        <option value="4">4 Horas</option>
        <option value="6">6 Horas</option>
      </select>
    </div>

    <input type="hidden" name="status" id="inputStatus" value="1">
    <input type="hidden" name="created_at" id="inputCreatedAt" value="<?= date('Y-m-d H:i:s') ?>">


    <p>
      <a href="<?= base_url() ?>login">Já tem uma conta?</a>
    </p>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
  </form>
</body>

</html>