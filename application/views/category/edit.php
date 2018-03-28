<header>
  <h2 class="page_title">Edit category</h2>
</header>

<div class="content-inner">
	<div class="form-wrapper">
		<?php echo form_open(base_url().'category/update_category'); ?>
    <input type="hidden" name="category_id" value="<?php echo $category['category_id']; ?>">
		<?php echo validation_errors(); ?>
          <div class="form-group">
            <label class="sr-only">Category</label>
            <input type="text" name="category_name" class="form-control" id="category" value="<?php echo $category['category_name']; ?>">
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox"> Publish category
            </label>
          </div>

          <div class="clearfix">
            <button type="submit" class="btn btn-primary pull-right">Update</button>
          </div>
        <?php echo form_close(); ?>
	</div>
</div>