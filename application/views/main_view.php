<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
	<body>
<div class="well well-sm">
<h1 align="center">Please entry the name correctly!</h1>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo base_url()?>main/form_validation">
				<div class="jumborton">
				<div class="well">
					<div class="form-horizontal">
					<?php  
						if ($this->uri->segment(2) == "inserted") {

							echo '<p class="text-success">Data Inserted</p>';
						}
					?>
					<label>Employee Name:</label>
					<div class="form-inline">
					<input type="text" name="firstname" id="firstname" class="form-control"  placeholder="First Name" />
					<span class="text-danger"><?php echo form_error("firstname") ?></span>
					<input type="text" name="lastname" id="lastname" class="form-control"  placeholder="Last Name" />
					<span class="text-danger"><?php echo form_error("lastname") ?></span>
					</div>
				<div class="form-horizontal">
					<label>Employee type:</label>
					<div class="form-inline">
							<select name="e_type" id="" class="form-control" >
							<option value="Permanent">Permanent</option>
							<option value="Temporary">Temporary</option>
							</select>
					</div>
				</div>
				<div class="form-horizontal">
					<label>Gender:</label>
					<div class="form-inline">
					<input type="radio" name="gender" value="Male" /> Male
  					<input type="radio" name="gender" value="Female" /> Female
					</div>
				</div>

				</div>
				</div>
				<div class="well">
					<div class="input-form">
							<button class="btn btn-success" value="insert" id="success" name="insert" type="success">Submit</button>
							<button class="btn btn-warning" value="reset" id="reset" name="reset" type="reset">Reset</button>

						</div>

				</div>

				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- table -->
<div class="container">
	<div class="row"> 
		<div class="col-md-12">
			<div class="table-responsive">
				<div class="well" align="center">
					<table id="mytable" class="table table-bordred table-striped">
						<tr>
							<th>Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Gender</th>
							<th>Employee type</th>
							<th>Leave Allowed(Days)</th>
							<th>Leave Taken(Days)</th>
							<th>Leave Remaning(Days)</th>
						</tr>

						<?php
						if($fetch_data->num_rows() > 0)
						{
							foreach ($fetch_data->result() as $row)
							{
							?>
							<tr>
								<td><?php echo $row->id; ?></td>
								<td><?php echo $row->first_name; ?></td>
								<td><?php echo $row->last_name; ?></td>
								<td><?php echo $row->gender; ?></td>
								<td><?php echo $row->e_type; ?></td>
								<td><?php echo $row->leave_allowed; ?></td>

								<td><?php echo $row->leave_taken; ?></td>
								<td><?php echo $row->leave_remaning; ?></td>

							</tr>
							<?php			
							}
						}
						else
						{
						?>
							<tr>
								<td colspan="8">No Data Found</td>
							</tr>
						<?php
							}

						 ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	</body>
</html>