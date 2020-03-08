    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    		<h1 class="h2"></h1>
    	</div>

    	<div class="col-md-12">

    		<?php if (isset($registro)) : ?>
    			<form id="registro_form" action="<?= base_url() ?>registro/atualizar/<?= $registro['id'] ?>" method="post">
    			<?php else : ?>
    				<form id="registro_form" action="<?= base_url() ?>registro/gravar" method="post">
    				<?php endif; ?>
    				<div class="col-md-6">
    					<div class="form-group">
							<label for="data_registro">Qual a data do Registro?</label>
							<?php if(isset($_POST['dataSelecionada'])){
									$dataSelecionada = $_POST['dataSelecionada'];
								} else{
									$dataSelecionada = '';
								}
							;?>
    						<input type="date" class="form-control" name="data_registro" id="data_registro" placeholder="data_registro" required value="<?= isset($registro) ? $registro['data_registro'] : $dataSelecionada ?>">
    					</div>
    				</div>

    				<div class="col-12 col-md-6">
    					<div class="form-group">
    						<label for="hora_entrada">Hora de Entrada</label>
    						<input type="time" class="form-control" name="hora_entrada" id="hora_entrada" placeholder="Hora de Entrada" value="<?= isset($registro) ? $registro['hora_entrada'] : '' ?>">
    					</div>
    				</div>

    				<div class="col-12 col-md-6">
    					<div class="form-group">
    						<label for="hora_saida_almoco">Hora de Saída para Almoço</label>
    						<input type="time" class="form-control" name="hora_saida_almoco" id="hora_saida_almoco" placeholder="Hora de Saída Almoço" value="<?= isset($registro) ? $registro['hora_saida_almoco'] : '' ?>">
    					</div>
    				</div>

    				<div class="col-12 col-md-6">
    					<div class="form-group">
    						<label for="hora_entrada_almoco">Hora de Retorno do Almoço</label>
    						<input type="time" class="form-control" name="hora_entrada_almoco" id="hora_entrada_almoco" placeholder="Hora de Retorno do Almoço" value="<?= isset($registro) ? $registro['hora_entrada_almoco'] : '' ?>">
    					</div>
    				</div>

    				<div class="col-12 col-md-6">
    					<div class="form-group">
    						<label for="hora_saida">Hora de Saída</label>
    						<input type="time" class="form-control" name="hora_saida" id="hora_saida" placeholder="Hora de Saída" value="<?= isset($registro) ? $registro['hora_saida'] : '' ?>">
    					</div>
    				</div>

    				<input type="hidden" name="ep_usuario_id" id="ep_usuario_id" value="<?= $this->session->userdata('ep_userid') ?>">


    				<div class="col-md-6">
    					<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i><?= isset($registro) ? ' Editar' : ' Gravar' ?></button>
    					<a href="<?= base_url() ?>registros" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
    				</div>
    	</div>
    	</form>
    	</div>

    </main>
    </div>
    </div>