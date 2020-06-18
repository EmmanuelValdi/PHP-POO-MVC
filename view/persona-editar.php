<div class="container">
    <h1 class="page-header">
        <?php echo $cliente->id != null ? $cliente->name : 'New Registration'; ?>
    </h1>

    <ol class="breadcrumb">
        <li><a class="homepage" href="?c=persona">Homepage</a> / </li>
        <li class="active"><?php echo $cliente->id != null ? $cliente->name :'New'; ?></li>
    </ol>

    <form id="frm-persona" action="?c=persona&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $cliente->id; ?>" />
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $cliente->name; ?>" class="form-control" placeholder="Enter your name" required>
        </div>
        
        <div class="form-group">
            <label>Position</label>
            <input type="text" name="position" value="<?php echo $cliente->position; ?>" class="form-control" placeholder="Enter your position" required>
        </div>
        
        <div class="form-group">
            <label>Office</label>
            <input type="text" name="office" value="<?php echo $cliente->office; ?>" class="form-control" placeholder="Enter your office" required>
        </div>
        
        <div class="form-group">
            <label>Age</label>
            <input type="text" name="age" value="<?php echo $cliente->age; ?>" class="form-control" placeholder="Enter your age" required>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="text" name="salary" value="<?php echo $cliente->salary; ?>" class="form-control" placeholder="Enter your salary" required>
        </div>
            
        
        <hr />
        
        <div class="text-right">
            <button class="btn btn-save-edit">Save</button>
        </div>
    </form>
</div>