<div class="container">
		 	<div class="row mb-4">
		 		<div class="col-sm-12">
		 			<h3 class="text-center mt-3"> Glossary List</h3>
		 		</div>
		 	</div>

		 	<div class="row mb-4">
		 		<div class="col-sm-12">
			 		<a href="create.php">Create Term</a>
		 		</div>
		 	</div>

		 	<div class="row">
		 		<div class="col-sm-12">
		 			<table class="table table-striped">
		 				<?php foreach ($model as $item) : ?>
		 					<tr>
		 						<td><a href="edit.php?key=<?= $item->id?>">Edit</a></td>
		 						<td><?= $item->term?></td>
		 						<td><?= $item->definition ?></td>
		 						<td><a href="delete.php?key=<?= $item->id?>">Delete</a></td>
		 					</tr>
		 				<?php endforeach; ?>
		 			</table>
		 		</div>
		 	</div>
</div>	

