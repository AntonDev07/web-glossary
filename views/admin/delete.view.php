<div class="container">
		 	<div class="row mb-4">
		 		<div class="col-sm-12">
		 			<h3 class="text-center mt-3"> Delete Term</h3>
		 		</div>
		 	</div>
		 	<div class="row">
		 		<div class="col-sm-12">
		 			<h2>Are you sure want to delete <strong><?=$model->term?></strong></h2>
		 		</div>
		 	</div>

		 	<div class="row mb-4">
		 		<div class="col-sm-6 mx-auto">
			 		<form method="POST" action="">
			 			<input type="hidden" name="id" value="<?= $model->id?>">
			 			<div class="form-group">
			 				<input type="submit" value="Delete" class="btn btn-primary">
			 			</div>
			 		</form>
		 		</div>
		 	</div>
</div>	

