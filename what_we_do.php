<?php 
  /* PAGE SPECIFIC INFORMATION */
  $page_title = "Our Products | Custom Embroidery in Dutchess County, NY | Embroidery Designs";
  $page = basename($_SERVER['PHP_SELF']); //Get the current page name 
  
  $meta_description = "Some examples of the custom embroidery, imprinting, decals and banners that we've done for customers in Dutchess County, Poughkeepsie and the Hudson Valley.";
  
  $meta_keywords = "Custom Embroidery, Dutchess County, Poughkeepsie, Hat Embroidery, Imprinting, Banners, Decals, Signs"; 
?>

<?php include 'includes/header.php'; ?>

  <!-- CONTENT HERE -->
  <div class="container content">
    <fieldset>
      <legend>Embroidery</legend>
      <div class="col-md-4">
        <img src="images/embroidery.jpg" class="img-responsive" alt="An example of Embroidery Designs' embroidery work">
      </div>
      <div class="col-md-8">
        <p>Our embroidery services include:</p>
          <ul>
            <li>Applique</li>
            <li>Designs and logos</li>
            <li>Monograms</li>
            <li>Names</li>
            <li>Puff (3D) lettering and designs</li>
            <li>Shadow lettering</li>
          </ul>
          <p>We do embroidery on a variety of items including aprons, bibs, polo shirts, sweatshirts, hoodies, sweaters, performance wear, caps, horse apparel, towels, blankets, bags, canvas items, motorcycle seats, and leather.</p>
      </div>
    </fieldset>
    
    <fieldset>
      <legend>Imprinting</legend>
      <div class="col-md-4">
        <img src="images/imprinting.png" class="img-responsive" alt="An example of Embroidery Designs' imprinting work">
      </div>
      <div class="col-md-7">
        <p>We imprint T-shirts, sweatshirts, hoodies, performance wear, jackets, and bags.</p>
      </div>
    </fieldset>
    
    <fieldset>
      <legend>Printing</legend>
      <div class="col-md-4">
        <img src="images/printing.jpg" class="img-responsive" alt="An example of Embroidery Designs' printing work">
      </div>
      <div class="col-md-7">
        <p>We print and laminate (as necessary for extended wear and protection) banners, signs, magnetic signs, decals, vehicle graphics, and wall graphics.</p>
      </div>
    </fieldset>
  </div><!-- /.container -->
  
<?php include 'includes/footer.php'; ?>