<?php

require "src/Partial.php";
require "src/objects/Project.php";

Partial::build('header');

$project = Project::buildProjectFromSlug('futureEarth');

Partial::build('projectPageLanding', 
  ["project" => $project, 
  "description" => "A narrative-driven 2D platformer, which revolves around unit 241, an AI-equipped droid that gains conciousness. Using a range of available body mods, unit 241 has to fight enemies, solve puzzles, and escape the building.",
  "primaryLink" => "https://sidequestvr.com/my-app/2597",
  "primaryLinkText" => "TODO: SideQuest",
  "secondaryLink" => "https://404teamnotfound444314077.wordpress.com/",
  "secondaryLinkText" => "Development Blog"]);

Partial::build('projectPageMeta', ["project" => $project]);

?>


<div id="projContent"> <!--___________ Proj Content ____________-->

  <!----- Content / Text ----->
  <section class="sectionText">
    <h2>The Task</h2>
    <p>Future Earth was created as an exercise in designing and developing immersive environments.</p>
    <p>With the concept design, we aimed to create a VR adventure game that encourages sustainable behaviors in players. This is achieved by placing the player in a dystopian futuristic environment, and giving them the power to radically transform it for the better through gameplay.</p>
  </section>

  <!----- Content / Media ----->
  <section class="sectionMedia">
    <div class="mediaSquare">
      <figure>
        <img src="assets/img/futureearth/3.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/4.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/5.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/6.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/7.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/8.jpg">
      </figure>
    </div>
  </section>

  <!----- Content / Text ----->
  <section class="sectionText">
    <h2>The Result</h2>
    <h3>Story</h3>
    <p>Set in a dystopian future, you are the first human to walk planet earth in a long time.</p>
    <p>Your mission objective is to plant and sustain 100 trees. Whether or not humanity will attempt to return to earth hinges upon your success.</p>
    <p>But that isn't an easy feat. Climate change and unsustainable human habits have created a toxic wasteland. And to make things worse, robots left behind to clean up, have fried in the sun and turned dangerous over time. Fight these bots, collect technical components, build sustainable technology and become the one to save the world!</p>
    <h3>Success</h3>
    <p>Our project won best overall project, best interaction design, project for impact and best VR/AR in our class.</p>
  </section>

  <!----- Content / Media ----->
  <section class="sectionMedia">
    <div class="mediaSquare">
      <figure>
        <img src="assets/img/futureearth/9.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/10.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/11.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/12.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/13.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/14.jpg">
      </figure>
    </div>
  </section>

  <!----- Content / Text ----->
  <section class="sectionText">
    <h2>Process</h2>
    <p>The project was developed in 4 months by a team of 4. I was the project manager, as well as one of the VR / game designers & developers.</p>
    <p>After deciding to create a project for impact with the theme of sustainability, we started to create a game. Our goal was to create a VR game that’s appealing to players without interest in sustainability, in order to reach a broader audience.</p>
    <p>As the PM, I split the concept design into a list of core and bonus features. The core design featured a small game, where players fight rogue robots, collect their parts, and build water filtering technology which helps trees to grow. This core prototype was implemented within the first three months.</p>
    <p>After a round of usertesting, we proceed to implement updated features in response to our testing results. These included measures to better communicate the narrative, such as a major update to the level design, and the implementation of an aesthetic change as the player plants more trees. We also had time to implement some of our bonus features, which were mostly aesthetic improvements such as the addition of VFX, better models, and multiple collectible parts.</p>
  </section>

  <!----- Content / Media ----->
  <section class="sectionMedia">
    <div class="mediaSquare">
      <figure>
        <img src="assets/img/futureearth/15.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/16.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/17.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/18.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/19.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/20.jpg">
      </figure>
      \<figure>
        <img src="assets/img/futureearth/hud1.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/hud2.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/hud3.jpg">
      </figure>
      <figure>
        <img src="assets/img/futureearth/hud4.jpg">
      </figure>
    </div>
  </section>
  
</div>
    

<?php

  Partial::build('footer');

?>