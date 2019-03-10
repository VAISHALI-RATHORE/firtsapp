

<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  </head>

  <body style=" padding-top: 56px;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
       
        <!-- Post Content Column -->
        <div class="col-lg-8">
      
         
         <input type="hidden" name="id" value="<?php echo  $article['data_article']->id; ?>" id="article_id">
          <!-- Title -->
          <h1 class="mt-4"><?php echo $article['data_article']->title; ?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?php echo $article['data_article']->name; ?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo  $article['data_article']->dos; ?></p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead"> <?php echo  $article['data_article']->short; ?></p>

          <p> <?php echo  $article['data_article']->description; ?>.</p>
          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
             <!--  <?php  $var= isset( $article['data_article']->id)?base_url("home/insert/".$article['data_article']->id):base_url("home/post_data");
              ?> -->
              <!-- <?php echo $var ?> -->
             <form method="POST" action="">
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="comment" id="comment"></textarea>
                </div>
                
                <button class="btn btn-primary" name="submit_comment" id="submit_comment"  >Submit</></button>
           
            </div>
          </div>

          <!-- Single Comment -->
           <?php  foreach ($comment['data_comment'] as $comment): ?>
          <div class="media mb-4">
           <?php echo $comment->comment; ?> 
          </div>
         <?php endforeach; ?>
         
      </form>
        </div>
        
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
         <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="post.php">Politics</a>
                    </li>
                    <li>
                      <a href="film.php">Film-industry</a>
                    </li>
                    <li>
                      <a href="#">Education</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="management.php">Management</a>
                    </li>
                    <li>
                      <a href="#">Economy</a>
                    </li>
                    <li>
                      <a href="#">Other</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
        $("#submit_comment").click(function(){
        
        var comment = $('#comment').val();
        

        var article_id = $('#article_id').val();

        $.ajax({
            url: "<?php echo base_url('home/insert'); ?>",
            type : 'POST',
            data: {
                comment: comment,
                article_id : article_id,
                
            },

            success : function(res) {
              alert("success");
            }
         
        });
    } ); 
 });


</script>
</html>
