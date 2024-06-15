<?php

require "config.php";
require "src/Partial.php";
require "src/objects/Project.php";

Partial::build('header', ["about" => TRUE]);

?>

<section class="sectionText about">
  <div>
    <img src="<?php echo $GLOBALS['d'];?>assets/img/portrait.jpg">
  </div>
  <div>
    <h1 id="About"><?php echo _("About Me"); ?></h1>
    <p>👋 <?php echo _("Hi there, I'm Robert!"); ?></p>
    <p><?php echo _("I'm a designer, and developer from Vancouver. My inexhaustible curiosity and love for digital media led me to attend Simon Fraser University (SFU), where I earned my Bachelor's Degree of Science with a major in Interactive Arts & Technology."); ?></p> 
    </p><?php echo _("I've prototyped, designed, and developed various interactive applications throughout my career, covering everything from XR to web development. These experiences have shaped me into a designer who emphasizes a user-goal-driven approach, a developer who values scalability and accessibility, and an expert in rapid prototyping."); ?></p>
    <p><?php echo _("Contact me if you would like to make cool stuff together! I'm currently looking for work."); ?></p>
  
    <div class="contact">
      <?php echo _("Say Hi:"); ?>
      <ul class="icons">
        <a href="mailto: hi@rmichels.com" target="_blank" title="E-Mail" id="emailLink"><li><i class="fa-solid fa-envelope fa-2x" id="email"></i></li></a>
        <a href="https://linkedin.com/in/robert-michels" target="_blank" title="LinkedIn"><li><i class="fab fa-linkedin-in fa-2x"></i></li></a>
      </ul>
    </div>
  
  
  </div>
  <div>
    <h2><?php echo _("Skills"); ?></h2>
    <div class="skills">
      <div>
        <h3>Design</h3>
        <ul>
          <li>UX / UI</li>
          <li>XR Design</li>
          <li>Game Design</li>
          <li>Figma</li>
          <li>Adobe CC</li>
        </ul>
      </div>
      <div>
        <h3><?php echo _("Development"); ?></h3>
        <ul>
          <li>C#</li>
          <li>HTML5</li>
          <li>CSS3</li>
          <li>Sass</li>
          <li>PHP</li>
          <li>JavaScript</li>
          <li>Java</li>
          <li>Dart</li>
          <li>Unity</li>
          <li>.NET</li>
          <li>Blazor</li>
          <li>Unity XRI</li>
          <li>MRTK3</li>
          <li>Three.js</li>
          <li>D3.js</li>
          <li>Tailwind</li>
          <li>Flutter</li>
          <li>Git</li>
          <li>Azure</li>
          <li>Firebase</li>
          <li>MySQL</li>
          <li>SQLite</li>
          <li>CI/CD</li>
        </ul>
      </div>
      <div>
        <h3><?php echo _("Other"); ?></h3>
        <ul>
          <li>Wordpress</li>
          <li>Project Management</li>
          <li>3D Modelling</li>
          <li>CAD Modelling</li>
          <li>Ardunio</li>
          <li>3D Printing</li>
          <li>Photogrammetry</li>
          <li>Geomapping</li>
          <li>Jira</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php

Partial::build('footer', ["projects" => TRUE]);

?>