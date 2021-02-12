<?php

require "src/Partial.php";
require "src/objects/Project.php";

Partial::build('header');

$project = Project::buildProjectFromSlug('amae');

Partial::build('projectPageLanding', 
  ["project" => $project, 
  "description" => "Amae is a utility app for busy parents. Amae helps parents to manage their time, learn about parenting and get help easily and quickly.",
  "primaryLink" => "amae.rmichels.com",
  "primaryLinkText" => "View Product Website",
  "secondaryLink" => "https://www.figma.com/proto/MTkTlvyHoJziDU2ZnpaCSs/334_Stage5_v2?node-id=2%3A2849&viewport=422%2C1134%2C0.19956186413764954&scaling=contain",
  "secondaryLinkText" => "Try Interactive Mockup"]);

Partial::build('projectPageMeta', ["project" => $project]);

?>


<div id="projContent"> <!--___________ Proj Content ____________-->

  <!----- Content / Text ----->
  <section class="sectionText">
    <h2>Placeholder Content</h2>
    <p>This area is currently in development.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis lacinia eros, id scelerisque tortor finibus nec. Etiam ut rhoncus dui, vitae mollis mi. Nulla elementum volutpat erat, scelerisque porttitor nisi consectetur ut. Vivamus fermentum nunc eget tortor vehicula aliquet. Sed tristique pharetra quam vitae mollis. Aliquam sed feugiat mauris. Suspendisse pulvinar diam et ligula lacinia vestibulum. Aenean lacinia diam nec eros egestas, quis fermentum magna vehicula. Praesent consectetur, risus et dictum convallis, leo odio placerat elit, egestas vestibulum eros sem quis ligula. In hac habitasse platea dictumst.</p>
    <h2>Placeholder Process</h2>
    <p>Pellentesque rhoncus vestibulum est non pharetra. Praesent auctor arcu ac eleifend dignissim. Integer et egestas nisi. Aenean eu urna gravida, lobortis metus et, cursus enim. Etiam ac sem quis sem aliquet dignissim. Etiam sapien ex, maximus a sem sed, dignissim aliquet arcu. Donec porta placerat velit, non sollicitudin dui euismod a. Sed quis lorem venenatis, ultricies augue id, gravida mi. Mauris sed pellentesque est, et commodo felis.</p>
    <p>Proin molestie a mi vel laoreet. Praesent sed commodo mauris, at malesuada leo. Nullam condimentum fermentum sem. Nullam enim libero, mattis in neque nec, consectetur dictum sem. Sed porta venenatis diam, ut maximus dui tristique rhoncus.</p>
  </section>

  
</div>

<?php

  Partial::build('footer');

?>