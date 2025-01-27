<h1 class="text-center">Update Sponsor</h1>
<br>
<form action="<?php echo site_url('Sponsors/update'); ?>" method="post">
    <input type="text" name="id" id="id" class='form-control' value="<?php echo $sponsor->IDSponsor; ?>" style="display: none;">     	 	 	 	 	 	
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class='form-control' value="<?php echo $sponsor->Name; ?>">
    <label for="contact">Contact:</label>
    <input type="text" name="contact" id="contact" class='form-control' value="<?php echo $sponsor->Contact; ?>">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class='form-control' value="<?php echo $sponsor->Email; ?>">
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" class='form-control' value="<?php echo $sponsor->Phone; ?>">
    <br>
    <input type="submit" value="Update" class='btn btn-success' value="<?php echo $sponsor->RegistrationDate; ?>">
</form>