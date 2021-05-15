<!DOCTYPE html>
<html>
  <head>
    <title>Test</title>
    <meta charset="UTF-8" />
      <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">

    <!--- STYLES --->
    <link rel="stylesheet" href="src/assets/css/animate.css">
    <link rel="stylesheet" href="src/assets/css/bootstrap.css">
    <link rel="stylesheet" href="src/assets/css/main.css">
  </head>

  <body>
      <?php
        include 'includes/header.php';
      ?>

    <div id="app"></div>

    <div class="container">
      <div class="page-header">
        <h1 class="page-title">Success Stories</h1>
        <ol class="breadcrumb">
          <li class="active">Success Stories</li>
        </ol>
      </div>

      <div class="page-layout right-sidebar">
        <div class="primary">

          <section class="page-section main-section">

            <div class="illus page-illus featured-image">
              <a class="thumb" href="src/pages/success-story-justin.html"><img src="src/assets/img/justin.jpg" alt=""/></a>
            </div>
            <h1 class="plain-title"><a href="src/pages/success-story-justin.html">Justin&#39;s Success Story</a></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis scelerisque tortor, nec auctor lacus. Duis eget sapien nisi. Ut et rutrum ex, et laoreet erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur rhoncus, ante a posuere efficitur, mauris velit tincidunt felis, vitae tincidunt ante nibh nec ipsum. Suspendisse auctor tincidunt tortor, eget fringilla purus lobortis quis. Pellentesque hendrerit lacinia gravida...</p>            
            <br/>
            <a class="more" href="src/pages/success-story-justin.html">Read More</a>
            </p>
          </section>

          <section id="" class="page-section main-section">
            <h3 class="section-title">Other Success Stories</h3>
            <div class="post-card-list clearfix">
               <div class="post-card">
                 <a class="thumb" href="src/pages/success-story-olivia.html"><img src="src/assets/img/olivia.jpg" alt="Olivia&#39;s Success Story"/></a>
                 <h5 class="title"><a href="src/pages/success-story-olivia.html">Olivia&#39;s Success Story</a></h5>
                 <a class="more" href="src/pages/success-story-olivia.html">Read More</a>
               </div>
               <div class="post-card">
                 <a class="thumb" href="src/pages/success-story-pam.html"><img src="src/assets/img/pam.jpg" alt="Pam&#39;s Success Story"/></a>
                 <h5 class="title"><a href="src/pages/success-story-pam.html">Pam&#39;s Success Story</a></h5>
                 <a class="more" href="src/pages/success-story-pam.html">Read More</a>
               </div>
              <div class="post-card">
                  <a class="thumb" href="src/pages/success-story-dustin.html"><img src="src/assets/img/dustin.jpg" alt="Dustin&#39;s Success Story"/></a>
                  <h5 class="title"><a href="src/pages/success-story-dustin.html">Dustin&#39;s Success Story</a></h5>
                  <a class="more" href="src/pages/success-story-dustin.html">Read More</a>
              </div>
          </section>

        </div><!-- End of Primary -->
      </div>
    </div>
    <script src="src/index.js"></script>
  </body>
</html>
