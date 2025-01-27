<h1 class="text-center">Update Sponsor</h1>
<br>
<form action="<?php echo site_url('Projects/update'); ?>" method="post">
    <input type="text" name="id" id="id" class='form-control' value="<?php echo $project->ProjectID; ?>" style="display: none;">
    
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class='form-control' value="<?php echo $project->Name; ?>">
    <label for="description">Description:</label>
    <textarea name="description" id="description" class='form-control'><?php echo $project->Description; ?></textarea>
    <label for="responsible">Responsible:</label>
    <input type="text" name="responsible" id="responsible" class='form-control' value="<?php echo $project->Responsible; ?>">
    <label for="startDate">Start Date:</label>
    <input type="date" name="startDate" id="startDate" class='form-control' value="<?php echo $project->StartDate; ?>">
    <label for="endDate">End Date:</label>
    <input type="date" name="endDate" id="endDate" class='form-control' value="<?php echo $project->EndDate; ?>">
    <br>
    <input type="submit" value="Update" class='btn btn-success'>
</form>