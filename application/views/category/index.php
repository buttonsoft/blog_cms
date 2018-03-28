        <!-- side menu -->
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-sm hidden-xs">Navigation</h1>
          <ul>
            <li class="link">
              <a href="<?php echo base_url(); ?>">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Dashboard</span>
              </a>
            </li>

            <li class="link active">
              <a href="<?php echo base_url().'category/index' ?>">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Category</span>
              </a>
            </li>

            <li class="link">
              <a href="<?php echo base_url().'article/index' ?>">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Article</span>
                <span class="label label-success pull-right hidden-sm hidden-xs"><?php echo $countArticle; ?></span>
              </a>
            </li>

            <li class="link">
              <a href="#collapse-comments" data-toggle="collapse" aria-controls="collapse-comments">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Comments</span>
              </a>
              <ul class="collapse collapseable" id="collapse-comments">
                <li>
                  <a href="approved.php">Approved
                  <span class="label label-success pull-right hidden-xs hidden-sm">10</span>
                  </a>
                </li>
                <li>
                  <a href="unapproved.php">Unapproved
                  <span class="label label-warning pull-right hidden-xs hidden-sm">20</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="link">
              <a href="#collapse-product" data-toggle="collapse" aria-controls="collapse-product">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Product</span>
                <span class="label label-success pull-right hidden-sm hidden-xs">20</span>
              </a>
              <ul class="collapse collapseable" id="collapse-product">
                <li><a href="index.php">The first product</a></li>
                <li><a href="index.php">The seccond product</a></li>
              </ul>
            </li>

            <li class="link">
              <a href="commenters.php">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Commenters</span>
              </a>
            </li>

            <li class="link">
              <a href="tags.php">
                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Tags</span>
              </a>
            </li>

             <li class="link settings-btn">
              <a href="settings.php">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Settings</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- main content -->
        <div class="col-md-10 col-sm-11 display-table-cell valign-top">
          <div class="row">
            <header id="nav-header" class="clearfix">
              <div class="col-md-5">
                <nav class="navbar-default pull-left">
                  <button class="navbar-toggle collapsed" type="button" data-toggle="offcanvas" data-target="#side-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </nav>
                <input type="text" class="hidden-xs hidden-sm" id="header-search-field" placeholder="Search....">  
              </div>

              <div class="col-md-7">
                <ul class="pull-right">
                  <li id="welcome" class="hidden-xs"><strong>Welcome to admin area</strong></li>
                  <li class="fixed-width">
                    <a href="#">
                      <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                      <span class="label label-warning">5</span>
                    </a>
                  </li>

                  <li class="fixed-width">
                    <a href="#">
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                      <span class="label label-message">7</span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="logout">
                      <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                      Log out
                    </a>
                  </li>
                </ul>  
              </div>
            </header>
          </div>

          <div id="content">

            <header class="clearfix">
              <h2 class="page_title pull-left">All category</h2>
              <button id="btnAdd" class="btn btn-xs btn-primary pull-right"><b>Create new category</b></button>
            </header>
            <div class="content-inner">
            <div class="alert alert-success" style="display: none;"></div>
             <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Category Name</td>
                    <td>Created at</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody id="categoryData">
                  
                </tbody>       
              </table>

            </div>  
          </div>

          <!-- start modal -->
          <div id="categoryModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                <form id="categoryForm" action="" method="post" class="form-horizontal">
                <input type="hidden" name="category_id" value="0">

                  <div class="form-group">
                    <label for="category-name" class="label-control col-md-3">Category Name</label>
                    <div class="col-md-8">
                      <input type="text" name="category_name" class="form-control" placeholder="Category name" autofocus>
                    </div>
                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btnSave" class="btn btn-primary">Save</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- end modal -->


        <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm delete</h4>
              </div>
              <div class="modal-body">
                <p>Do you want to delete this category?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- end modal -->


    <script type="text/javascript">

      $(document).ready(function() {

        // calling function getAllContact
          getAllCategory();

          // button add
          $('#btnAdd').click(function() {
            $('#categoryModal').modal('show');
            $('#categoryModal').find('.modal-title').text('Add new category');
            $('#categoryForm').attr('action', '<?php echo base_url() ?>category/add_category');
          });

          // button Save
          $('#btnSave').click(function() {
            var url = $('#categoryForm').attr('action');
            var data = $('#categoryForm').serialize();

            // validate form
            var category_name = $('input[name=category_name]');
            var result = '';
            if(category_name.val() == '') {
              category_name.parent().parent().addClass('has-error');
            } else {
              category_name.parent().parent().removeClass('has-error');
              result +='1';
            }

            if(result == '1') {
              $.ajax({
                type: "ajax",
                method: "post",
                url: url,
                data: data,
                async: false,
                dataType: "json",
                success: function(response) {
                  if(response.success) {
                    $('#categoryModal').modal('hide');
                    $('#categoryForm')[0].reset();

                    if(response.type == 'add') {
                      var type = 'added';
                    } else if(response.type == 'update') {
                      var type = 'updated';
                    }
                    $('.alert-success').html('Category '+type+' successfully').fadeIn().delay(2000).fadeOut('slow');
                    getAllCategory();
                    // $("[name='category_name']").val('');
                  } else {
                    $('#msg').html(response.msg);
                    alert("Error");
                  }
                },
                error: function() {
                  alert("Could not added data");
                }
              });
            }

          });

          //item-edit
          $('#categoryData').on('click', '.item-edit', function() {
            var category_id = $(this).attr('data');
            $('#categoryModal').modal('show');
            $('#categoryModal').find('.modal-title').text('Edit Category');
            $('#categoryForm').attr('action', '<?php echo base_url() ?>category/update_category');

            $.ajax({
              type: 'ajax',
              method: 'get',
              url: '<?php echo base_url() ?>category/edit_category',
              data: {category_id: category_id},
              async: false,
              dataType: 'json',
              success: function(data) {
                $('input[name=category_name]').val(data.category_name);
                $('input[name=category_id]').val(data.category_id);
              },
              error: function() {
                alert('Could not edit category');
              }
            });

          });

          //item-delete
          $('#categoryData').on('click', '.item-delete', function() {
            var category_id = $(this).attr('data');
            $('#modalDelete').modal('show');

            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function() {
              $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>category/delete_category',
                data: {category_id: category_id},
                dataType: 'json',
                success: function(response) {
                  if(response.success) {
                    $('#modalDelete').modal('hide');
                    $('.alert-success').html('Category deleted successfully').fadeIn().delay(2000).fadeOut('slow');
                    getAllCategory();
                  } else {
                    alert('Error');
                  }
                },
                error: function() {
                  alert('Error deleting data');
                }
              });
            });

          });

          // show all category
          function getAllCategory() {
            $.ajax({
              type: "ajax",
              url: "<?php echo base_url().'category/get_all_category' ?>",
              async: false,
              dataType: "json",
              success: function(data) {
                var html = '';
                var i;
                for(i=0; i<data.length; i++) {
                  html +='<tr>'+
                            '<td>'+(i+1)+'</td>'+
                            '<td>'+data[i].category_name+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td>'+
                                '<a href="javascript:;" class="btn btn-info btn-xs item-edit" data="'+data[i].category_id+'">Edit</a>'+
                                '<a href="javascript:;" class="btn btn-danger btn-xs item-delete" data="'+data[i].category_id+'">Delete</a>'+
                            '</td>'+
                         ' </tr>';
                }
                $('#categoryData').html(html);
              },
              error: function() {
                alert('Could not get data from database');
              }
            });
          }

      });

    </script>
  
