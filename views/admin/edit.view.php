<div class="container">
		 	<div class="row mb-4">
		 		<div class="col-sm-12">
		 			<h3 class="text-center mt-3"> Edit Term</h3>
		 		</div>
		 	</div>

		 	<div class="row mb-4">
		 		<div class="col-sm-6 mx-auto">
			 		<form method="POST" action="">
			 			<input type="hidden" name="id" value="<?= $model->id?>">
			 			<div class="form-group">
			 				<label for="term">Term:</label>
			 				<input type="text" class="form-control" name="term" id="term" value="<?= $model->term?>" />
			 			</div>

			 			<div class="form-group">
			 				<label for="definition">Definition:</label>
			 				<textarea class="form-control" name="definition" id="definition"><?= $model->definition?></textarea>
			 			</div>

			 			<div class="form-group">
			 				<input type="submit" value="Edit" class="btn btn-primary">
			 			</div>
			 		</form>
		 		</div>
		 	</div>
</div>	

