<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MyWrittenBOOKS</title>
    
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    
  </head>
  <body>
    <div class="spaceWrapper"></div>
    <div id="wrapper">
      <!-- START TOP CONTENT -->
      <div id="topContent">
        <div id="logo"></div>
        <div class="search">
          <h3>Suche >></h3>
          <input type="text" name="booksearch" id="search_books"></input>
          <input type="submit" value="search" id="search_books_sumit"></input>
        </div>
        <div id="leftTopTriangle"></div>
        <div id="rightTopTriangle"></div>
        
        <div id="banner">           
          
            
        </div>
        <!-- START NAVI LEISTE -->
        <div class="navileiste">
          <ul type="none">
            <li class="navi_li">
              <a href="<?php echo url_for('home/index')?>">Home</a>
            </li>
            <li class="navi_li">
              <a href="<?php echo url_for('object/index')?>">B&uuml;cher</a>
            </li>
            <li class="navi_li">
              <a href="<?php echo url_for('news/index')?>">News</a>
            </li>
            <li class="navi_li">
              <a>Top B&uuml;cher</a>
            </li>
            <li class="navi_li">
              <a>My Place</a>
            </li>
          </ul>
          
          <ul style="float: right; margin-right: 25px;">
              <li>
                <a href="<?php echo url_for('login/index')?>" style="font-size: 14px;">Login</a>
              </li>
          </ul>
        </div>
        <!-- END NAVI LEISTE -->
      </div>  
      <!-- END TOP CONTENT -->
      
      <!-- START MAIN CONTENT -->
      <div id="mainContent">
        
        <?php echo $sf_content ?>

      </div>
      <!-- END MAIN CONTENT -->
      
      <!-- START FOOT CONTENT -->
      <div id="footContent">
        <div id="leftFooterTriangle"></div>
        <div id="rightFooterTriangle"></div>
      </div>
      <!-- END FOOT CONTENT -->
    </div>
    <div class="spaceWrapper"></div>
  </body>
</html>

