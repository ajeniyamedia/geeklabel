<div id="pageWrapper" class="wrapper">
    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>

    <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

	<?php if(!$is_front){ ?>
		<article>
				<?php print render($page['content']); ?>
		</article>
	 <?php } ?>
   <div class="container-fluid">

    <div class="row">
      <div class="col-xs-12 section1">
        <div class="firstpageRepper">
            <div class="firstpageLogo"></div>
        </div>
          <h1 class="firstpage">Geek Label </h1>
          <div class="firstpageContent">
            <p>A team of self confessed geeks who are all about great digital design</p>
          </div>
    
      </div>
      <div class="col-xs-12 section2">
        <div class="secondpageRepper">
            <div class="secondpageLogo"></div>
        </div>
          <div class="secondpageContent">
            <p>Some agencies love <a href="">design,</a> but don't know how to build</p>
          </div>
      </div>
      <div class="col-xs-12 section3">
          <div class="secondpageRepper">
            <div class="thirdpageLogo"></div>
          </div>
          <div class="secondpageContent">
            <p>Some agencies know how to <a href="">build</a> but can't do design</p>
          </div>
      </div>
      <div class="col-xs-12 section4">
          <div class="secondpageRepper">
            <div class="forthpageLogo"></div>
          </div>
          
          <div class="secondpageContent">
            <p>We love <a href="">both</a></p>
          </div>
      </div>
      <div class="col-xs-12 section5">
        <div class="container section5Center">
          <div class="servicesRapper">

            <h1>Services</h1>
          </div>
          <div class="servicesSectionList">
            <div class="col-xs-12 col-sm-3 serviceContentSection">
                <div class="servicerContent sectionWeb"></div>
                <p>Web Development<p>
            </div>
            <div class="col-xs-12 col-sm-3 serviceContentSection">
                <div class="servicerContent sectionDesign"></div>
                <p>Design<p>
            </div>
            <div class="col-xs-12 col-sm-3 serviceContentSection">
                <div class="servicerContent sectionBranding"></div>
                <p>Branding<p>
            </div>
            <div class="col-xs-12 col-sm-3 serviceContentSection">
                <div class="servicerContent sectionResearch"></div>
                <p>UX Research<p>
            </div>
          </div>
          </div>
      </div>
      <div class="col-xs-12 section6">
        <div class="container clientHeading">
           <h1>Clients</h1>
           <div class="">
             <div class="clientsLogosList">
              <div class="col-xs-12 col-sm-4 ">
                  <div class="clientsLogosThe">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-4 ">
                  <div class="clientsLogosVegan">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-4 ">
                  <div class="clientsLogosPshe">
                  </div>
              </div>
            </div>
           </div>
        </div>
      </div>
      <div class="col-xs-12 section7">
        <div class="row contactMap">
          <h1>How to find us</h1>
          <div class="map">
          </div>
        </div>
      </div>
      <div class="col-xs-12 section8">
        <div class="container contactRapper">
          <h1>Contact</h1>
          <div class="contactForm">
            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <div class="form-group">
              <textarea class="form-control textareaControl" rows="3"></textarea>
              </div>

              <button type="submit" class="btn-custom">Send Message!</button>
            </form>
          </div>
          <p class="phoneContact"> Or phone on: 19023 2220121<p>
        </div>
      </div>
    </div>
   </div>


</div>