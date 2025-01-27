<h1 class="text-center">Update Sponsor</h1>
<br>
<form action="<?php echo site_url('Sponsors/update'); ?>" method="post" id='updateForm'>
    <input type="text" name="id" id="id" class='form-control' value="<?php echo $sponsor->IDSponsor; ?>" style="display: none;">     	 	 	 	 	 	
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class='form-control' value="<?php echo $sponsor->Name; ?>">
    <br>
    <label for="contact">Contact:</label>
    <input type="text" name="contact" id="contact" class='form-control' value="<?php echo $sponsor->Contact; ?>">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class='form-control' value="<?php echo $sponsor->Email; ?>">
    <br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" class='form-control' value="<?php echo $sponsor->Phone; ?>">
    <br>
    <br>
    <input type="submit" value="Update" class='btn btn-success' value="<?php echo $sponsor->RegistrationDate; ?>">
</form>

<script>
    $(document).ready(function() {
        $('#updateForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 10
                },
                contact: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                },
                phone: {
                    required: true,
                },
            },
            message: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name must be at least 10 characters long"
                },
                contact: {
                    required: "Please enter your contact",
                    minlength: "Your contact must be at least 3 characters long"
                },
                email:{
                    required: "Please enter your email",
                },
                phone:{
                    required: "Please enter your phone",
                },
            }    
        })
    });

</script>