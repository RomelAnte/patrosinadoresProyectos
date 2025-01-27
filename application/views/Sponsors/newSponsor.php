<h1 class="text-center">New Sponsor</h1>
<br>
<form action="<?php echo site_url('Sponsors/save'); ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class='form-control'>
    <label for="contact">Contact:</label>
    <input type="text" name="contact" id="contact" class='form-control'>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class='form-control'>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" class='form-control'>
    <br>
    <input type="submit" value="Submit" class='btn btn-primary'>
</form>