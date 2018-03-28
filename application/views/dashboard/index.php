        <!-- side menu -->
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-sm hidden-xs">Navigation</h1>
          <ul>
            <li class="link active">
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

            <div class="charts" style="width: 60%;">
              <canvas id="chart"></canvas>
            </div>

          </div>

<style type="text/css">
  .charts {
      width: 50%;
      margin: 15px auto;
  }
</style>
<script src="<?php echo base_url().'assets/chartjs-2.7.2/Chart.min.js' ?>"></script>
<script type="text/javascript">

    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',

        data: {
            labels: ['Sepatu','Sendal','Tas','Kemeja','Gamis','Kerudung','Jilbab'
            ],
            datasets: [{
                label: 'Category Graph',
                data: ['10','20','7','15','20','70','50'
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>