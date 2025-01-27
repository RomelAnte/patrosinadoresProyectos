<h1 class="text-center">New Sponsor</h1>
<br>
<form action="<?php echo site_url('Sponsors/save'); ?>" method="post" id= "sponsorForm">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class='form-control'>
    <br>
    <label for="contact">Contact:</label>
    <input type="text" name="contact" id="contact" class='form-control'>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class='form-control'>
    <br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" class='form-control'>
    <br>
    <br>
    <input type="submit" value="Submit" class='btn btn-primary'>
</form>

<script>
    $(document).ready(function() {
        $('#sponsorForm').validate({
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