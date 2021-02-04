<div class="container">
		 	<div class="row mb-4">
		 		<div class="col-sm-12">
		 			<h3 class="text-center mt-3"><?= $view_bag['heading'] ?></h3>
		 		</div>
		 	</div>

		 	<div class="row mb-4">
		 		<div class="col-sm-12">
			 		<form class="form-inline" method="GET" action="">
			 			<div class="form-group">
			 				<input type="text" name="search" id="search" placeholder="Search...">
			 				<input type="submit">
			 			</div>
			 		</form>
		 		</div>
		 	</div>

		 	<div class="row">
		 		<div class="col-sm-12">
		 			<table class="table table-striped">
		 				<?php foreach ($model as $item) : ?>
		 					<tr>
		 						<td><a href="detail.php?term=<?= $item->id?>"><?= $item->term?></a></td>
		 						<td><?= $item->definition ?></td>
		 					</tr>
		 				<?php endforeach; ?>
		 			</table>
		 		</div>
		 	</div>
</div>	

