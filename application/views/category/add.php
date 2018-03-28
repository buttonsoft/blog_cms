<header>
  <h2 class="page_title">Create new category</h2>
</header>

<div class="content-inner">
	<div class="form-wrapper">
		<?php echo form_open(base_url().'category/add_category'); ?>
		<?php echo validation_errors(); ?>
          <div class="form-group">
            <label class="sr-only">Category</label>
            <input type="text" name="category_name" class="form-control" id="category" placeholder="Category name">
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox"> Publish category
            </label>
          </div>

          <div class="clearfix">
            <button type="submit" class="btn btn-primary pull-right">Save / Publish</button>
          </div>
        <?php echo form_close(); ?>
	</div>
</div>