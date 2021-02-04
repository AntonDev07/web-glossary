<div class="container">
		 	<div class="row mb-4">
		 		<div class="col-sm-12">
		 			<h3 class="text-center mt-3">Hello Anton</h3>
		 		</div>
		 	</div>

		 	<div class="row">
		 		<div class="col-sm-6 mx-auto">
		 			<form method="post">
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					    <small class="text-dangesr"><?= isset($view_bag['status']) ? $view_bag['status'] : "" ?></small>
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-primary">Login</button>
					</form>
		 		</div>
		 	</div>
</div>	
