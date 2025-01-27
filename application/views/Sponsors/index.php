<h1 class="text-center">List Sponsor</h1>
<br>
<div class="row">
    <div class="col-md-12">
        <a href="<?php echo site_url('Sponsors/add') ?>" class='btn btn-primary'>New</a>
    </div>
</div>
<br>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Phone</th>
            <th>RegistrationDate</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sponsors as $sponsor): ?>
        <tr>         	 	 	 	 	 	
            <td><?php echo $sponsor -> IDSponsor; ?></td>
            <td><?php echo $sponsor -> Name; ?></td>
            <td><?php echo $sponsor -> Contact; ?></td>
            <td><?php echo $sponsor -> Email; ?></td>
            <td><?php echo $sponsor -> Phone; ?></td>
            <td><?php echo $sponsor -> RegistrationDate; ?></td>
            <td>
                <a href="<?php echo site_url('Sponsors/getRegisterById/'.$sponsor->IDSponsor) ?>" class='btn btn-success'>Update</a>
                <a href="<?php echo site_url('Sponsors/delete/'.$sponsor->IDSponsor) ?>" class='btn btn-danger' onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>