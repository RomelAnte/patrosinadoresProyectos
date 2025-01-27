<h1 class="text-center">List Projects</h1>
<br>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo site_url('Projects/add') ?>" class='btn btn-primary'>New</a>
    </div>
</div>
<br>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Responsible</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>     	 	 	 	 	 	
        <?php foreach ($projects as $project): ?>
        <tr>         	 	 	 	 	 	
            <td><?php echo $project -> ProjectID; ?></td>
            <td><?php echo $project -> Name; ?></td>
            <td><?php echo $project -> Description; ?></td>
            <td><?php echo $project -> Responsible; ?></td>
            <td><?php echo $project -> StartDate; ?></td>
            <td><?php echo $project -> EndDate; ?></td>
            <td>
                <a href="<?php echo site_url('Projects/getRegisterById/'.$project -> ProjectID) ?>" class='btn btn-success'>Update</a>
                <a href="<?php echo site_url('Projects/delete/'.$project -> ProjectID) ?>" class='btn btn-danger' onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>