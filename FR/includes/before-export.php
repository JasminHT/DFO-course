    <?php   
    //begin recording the page for saving to HTML file
    //the closing argument is found in the "after.php" file
    ob_start(); 
  ?>


    <?php include 'includes/header.php'; ?>


 <div class="container">
  <div class="row">
  <main property="mainContentOfPage" resource="#wb-main" class="container " typeof="WebPageElement">
    <div class='row'>
      <div class="col-md-9 col-md-push-3">

        <h1 property="name" id="wb-cont" >
          Introduction à l’évaluation des stocks à Pêches et Océans Canada
        </h1>
        <div id='snap'></div>
      
        <?php include "includes/pager-export.php"; ?>
