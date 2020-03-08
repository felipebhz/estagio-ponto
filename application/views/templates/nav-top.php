<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?= base_url() ?>registros">EstágioPonto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>registros">Registros <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>registro/novo">Inserir Novo</a>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <label class="pr-5" for=""></label>
      <a href="<?= base_url() ?>login/logout" class="btn btn-outline-danger my-2 my-sm-0">Sair</a>
    </form>
  </div>
</nav>