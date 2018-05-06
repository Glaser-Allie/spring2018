<!DOCTYPE html>
<!-- My site home page -->
<html lang="en-us">
  <head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>

  <body>
    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
    </header>
    
    <main>
        <section id="feature">
            <article id="rotator">
          <h2>New on Galveston Sandbox</h2>
          <figure>
            <img src="/images/newparks/adoue.jpg" id="mainImage" alt="Adoue Park's Smaller Playground">
            <figcaption id="mainImageCaption">Adoue Park's smaller playground</figcaption>
          </figure>
        </article>
        
       <h2 id="spotlt-title">Highlights & Quick Links</h2>
         
      <section id="spotlt">
        <div id="ttl-map">
           <article id="map">
           <h3>Find a Playground Near You!</h3>
           <iframe src="https://www.google.com/maps/d/u/0/embed?mid=zxOTwhots2bc.kuU6mci-o0LI" width="320" height="240"></iframe>
           </article>
        </div>

        <div id="links">
          <article id="newest">
            <h4>Newest Reviews</h4>
            <img src="newest_btn.png" alt="Button link to newest reviews">
          </article>
            
          <article id="report">
            <h4>Report an Issue</h4>
            <img src="report_btn.png" alt="Button link to report an issue">
          </article>
        </div>     
      </section>
      </section>
    </main>
    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
    </footer>
    <script src="rotator/rotator.js"></script>
  </body>
</html>
