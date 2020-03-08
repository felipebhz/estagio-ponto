        <main role="main" class="container">
            <h1 class="h2">Registros de Ponto</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="registro/novo" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Novo Registro</a>
                </div>
            </div>
            </div>

            <div class="table-responsive">
                <table class="table thead-dark">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Entrada</th>
                            <th scope="col">Saída Almoço</th>
                            <th scope="col">Entrada Almoço</th>
                            <th scope="col">Saída</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($registros as $registro) : ?>
                            <tr>
                                <?php
                                $str_data_registro = $registro['data_registro'];
                                $time_data_registro = strtotime($str_data_registro);
                                ?>
                                <td><?= date("d/m/Y", $time_data_registro)  ?></td>
                                <td><?= (substr($registro['hora_entrada'], 0, -3) != "00:00") ? substr($registro['hora_entrada'], 0, -3) :  "-" ?></td>
                                <td><?= (substr($registro['hora_saida_almoco'], 0, -3) != "00:00") ? substr($registro['hora_saida_almoco'], 0, -3) : "-" ?></td>
                                <td><?= (substr($registro['hora_entrada_almoco'], 0, -3) != "00:00") ? substr($registro['hora_entrada_almoco'], 0, -3) : "-" ?></td>
                                <td><?= (substr($registro['hora_saida'], 0, -3) != "00:00") ? substr($registro['hora_saida'], 0, -3) : "-" ?></td>
                                <td>
                                    <a href="<?= base_url() ?>registro/edit/<?= $registro['id'] ?>" class="btn btn-sm btn-warning mt-1 mx-auto">Editar</a>
                                    <a id="delete_registro" href="<?= base_url() ?>registro/deletar/<?= $registro['id'] ?>" class="btn btn-sm btn-danger mt-1 mx-auto">Deletar</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </main>

        </div>
        </div>