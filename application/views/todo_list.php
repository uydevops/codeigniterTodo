<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Todo List Codeigniter UY.</title>
</head>

<body>
	<div class="contanier">
		<h3 class="text-center">Todo List</h3>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="<?php echo base_url("todo/insert"); ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="title" placeholder="Todo Giriniz" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-success" type="submit" id="button-addon2"><i class="fas fa-plus"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<table class="table table-bordered">
					<th>Acıklama</th>
					<th>İşlem</th>
					<?php foreach ($todoList as $todo) : ?>
						<tr>
							<td><?php echo $todo->title; ?></td>
							<td>
								<a href="<?php echo base_url("todo/delete/$todo->id"); ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
								<a href="<?php echo base_url("todo/status/$todo->id"); ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>






	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
