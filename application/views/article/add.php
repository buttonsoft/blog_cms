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
            <header>
              <h2 class="page_title">Create new article</h2>
            </header>

            <div class="content-inner">
              <div class="form-wrapper">
                <form class="form-horizontal" method="post" action="<?php echo base_url().'article/process_add_article'; ?>">
                  <div class="form-group">
                    <label class="sr-only">Title</label>
                    <input type="text" name="article_title" class="form-control" id="title" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label class="sr-only">Article</label>
                    <textarea class="form-control summernote" placeholder="Article" name="article_post"></textarea>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Publish article
                    </label>
                  </div>

                  <div class="clearfix">
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

    <!-- textarea summernote -->
    <link href="<?php echo base_url().'assets/summernote/summernote.css' ?>" rel="stylesheet">
    <script src="<?php echo base_url().'assets/summernote/summernote.min.js' ?>"></script>

    <!-- data Tables -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/DataTables/datatables.min.css' ?>">
    <script src="<?php echo base_url().'assets/DataTables/datatables.min.js' ?>"></script>
    <script type="text/javascript">

    $(document).ready(function() {

      $('#articleData').DataTable();

      //config summernote
      $('.summernote').summernote({
        height: 200
      });


    });

    </script>
  
