<?php echo $this->Html->css('../libs/dropzone/dropzone'); ?>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="pull-left page-title">Álbuns</h4>
				</div>
			</div>
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<div class="pull-left"> 
							<h3 class="panel-title">Álbum - Álbum name</h3>
						</div>
						
						<div class="pull-right">
							<button class="waves-effect waves-light btn btn-danger" type="button">Cancelar</button>
							<button class="waves-effect waves-light btn btn-success" type="button">Salvar</button>
						</div> 
					</div> 
					<div class="panel-body"> 
						<form class="form-horizontal col-sm-8" role="form">
							<div class="form-group">
								<label for="title" class="col-sm-3 control-label">Título</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="title" placeholder="Título">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Categorias</label>
								<div class="col-sm-9">
									<select class="select2" multiple data-placeholder="Selecione as categorias">
										<option value="#">&nbsp;</option>
										<option value="Wedding">Wedding</option>
										<option value="Street Urban">Street Urban</option>
										<option value="Outdoor">Outdoor</option>
									</select>
								</div>
							</div>
						</form>
					</div> 
				</div>
				<div class="panel panel-default">
					<div class="panel-heading"> 
						<h3 class="panel-title">Upload de imagem</h3> 
					</div> 
					<div class="panel-body"> 
						<form action="#" class="dropzone" id="dropzone">
							<div class="fallback">
								<input name="file" type="file" multiple />
							</div>
                        </form>
					</div> 
				</div>    
			</div>          
		</div> <!-- container -->
	</div> <!-- content -->
</div>

<?php echo $this->Html->script('../libs/dropzone/dropzone.min'); ?>