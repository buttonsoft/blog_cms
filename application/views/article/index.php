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

            <li class="link">
              <a href="<?php echo base_url().'category/index' ?>">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Category</span>
              </a>
            </li>

            <li class="link active">
              <a href="<?php echo base_url().'article/index' ?>">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Article</span>
                <span class="label label-success pull-right hidden-sm hidden-xs" id="countArticle"><?php //echo $countArticle; ?></span>
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
              <h2 class="page_title pull-left">All articles</h2>
              <button id="btnAdd" type="button" class="btn btn-xs btn-primary pull-right"><b>Create new article</b></button>
            </header>

            <div class="content-inner">
            <div class="alert alert-success" style="display: none;"></div>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th style="width:20%;">Article title</th>
                  <th>Article post</th>
                  <th style="width:15%;">Created at</th>
                  <th style="width:10%;">Actions</th>
                </tr>
              </thead>
              <tbody id="articleData">

              </tbody>
            </table>

            </div>
          </div>

        <!-- start modal -->
        <div id="articleModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                <form id="articleForm" action="" method="post" class="form-horizontal">
                <input type="hidden" name="article_id" value="0">

                  <div class="form-group">
                    <label for="article-title" class="label-control col-md-3">Article title</label>
                    <div class="col-md-8">
                      <input type="text" name="article_title" class="form-control" placeholder="Article title" autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="article-post" class="label-control col-md-3">Article post</label>
                    <div class="col-md-8">
                      <textarea name="article_post" class="form-control" rows="5" placeholder="Article post"></textarea>
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
                <p>Do you want to delete this article?</p>
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

    // calling function getAllArticle
    getAllArticle();

    // count article
    function countArticle() {
      $.ajax({
        type: "ajax",
        url: "<?php echo base_url().'article/count_article' ?>",
        async: false,
        method: "get",
        dataType: "json",
        success: function(data) {
          $('#countArticle').val(data);
        }
      });
    }

    // show all article
    function getAllArticle() {
      $.ajax({
        type: "ajax",
        url: "<?php echo base_url().'article/get_all_article' ?>",
        async: false,
        dataType: "json",
        success: function(data) {
          var html = '';
          var i;
          for(i=0; i<data.length; i++) {
            html +='<tr>'+
                      '<td>'+(i+1)+'</td>'+
                      '<td>'+data[i].article_title+'</td>'+
                      '<td>'+data[i].article_post+'</td>'+
                      '<td>'+data[i].created_at+'</td>'+
                      '<td>'+
                          '<a href="javascript:;" class="btn btn-info btn-xs item-edit" data="'+data[i].article_id+'">Edit</a>'+
                          '<a href="javascript:;" class="btn btn-danger btn-xs item-delete" data="'+data[i].article_id+'">Delete</a>'+
                      '</td>'+
                   ' </tr>';
          }
          $('#articleData').html(html);
        },
        error: function() {
          alert('Could not get data from database');
        }
      });
    }

     // button add
    $('#btnAdd').click(function() {
      $('#articleModal').modal('show');
      $('#articleModal').find('.modal-title').text('Add new article');
      $('#articleForm').attr('action', '<?php echo base_url() ?>article/add_article');
    });

    // button Save
    $('#btnSave').click(function() {
      var url = $('#articleForm').attr('action');
      var data = $('#articleForm').serialize();

      // validate form
      var article_title = $('input[name=article_title]');
      var article_post = $('textarea[name=article_post]');
      var result = '';
      if(article_title.val() == '') {
        article_title.parent().parent().addClass('has-error');
      } else {
        article_title.parent().parent().removeClass('has-error');
        result +='1';
      }

      if(article_post.val() == '') {
        article_post.parent().parent().addClass('has-error');
      } else {
        article_post.parent().parent().removeClass('has-error');
        result +='2';
      }

      if(result == '12') {
        $.ajax({
          type: "ajax",
          method: "post",
          url: url,
          data: data,
          async: false,
          dataType: "json",
          success: function(response) {
            if(response.success) {
              $('#articleModal').modal('hide');
              $('#articleForm')[0].reset();

              if(response.type == 'add') {
                var type = 'added';
              } else if(response.type == 'update') {
                var type = 'updated';
              }
              $('.alert-success').html('Article '+type+' successfully').fadeIn().delay(2000).fadeOut('slow');
              getAllArticle();
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
    $('#articleData').on('click', '.item-edit', function() {
      var article_id = $(this).attr('data');
      $('#articleModal').modal('show');
      $('#articleModal').find('.modal-title').text('Edit Article');
      $('#articleForm').attr('action', '<?php echo base_url() ?>article/update_article');

      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>article/edit_article',
        data: {article_id: article_id},
        async: false,
        dataType: 'json',
        success: function(data) {
          $('input[name=article_title]').val(data.article_title);
          $('textarea[name=article_post]').val(data.article_post);
          $('input[name=article_id]').val(data.article_id);
        },
        error: function() {
          alert('Could not edit article');
        }
      });

    });

    //item-delete
    $('#articleData').on('click', '.item-delete', function() {
      var article_id = $(this).attr('data');
      $('#modalDelete').modal('show');

      //prevent previous handler - unbind()
      $('#btnDelete').unbind().click(function() {
        $.ajax({
          type: 'ajax',
          method: 'get',
          async: false,
          url: '<?php echo base_url() ?>article/delete_article',
          data: {article_id: article_id},
          dataType: 'json',
          success: function(response) {
            if(response.success) {
              $('#modalDelete').modal('hide');
              $('.alert-success').html('Article deleted successfully').fadeIn().delay(2000).fadeOut('slow');
              getAllArticle();
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

  });

</script>
