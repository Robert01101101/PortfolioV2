var mesh,scene=new THREE.Scene,canvas=document.querySelector("#threeModel"),renderer=new THREE.WebGLRenderer({canvas:canvas,alpha:!0,antialias:!0}),tmpImage=document.getElementById("landingModelImage"),tmpSpinner=document.getElementById("spinner"),doneLoading=!1;setTimeout((function(){doneLoading||(tmpSpinner.style.display="")}),300);var loader=new THREE.GLTFLoader;function handle_load(e){mesh=e.scene.children[0],scene.add(mesh),handle_particles(),showCanvasAfterFirstRenderToPreventWhiteFlash()}function handle_particles(){var e,n=new THREE.BufferGeometry;n.copy(mesh.geometry);var t,i=new Float32Array(n.getAttribute("position").count);for(t=0;t<i.length;t++)i[t]=.05;n.setAttribute("scale",new THREE.BufferAttribute(i,1));var a=new THREE.BufferGeometry;a.setAttribute("position",new THREE.BufferAttribute(n,3)),a.setAttribute("scale",new THREE.BufferAttribute(i,10));var o=new THREE.ShaderMaterial({uniforms:{color:{value:new THREE.Color(16777215)}},vertexShader:document.getElementById("vertexshader").textContent,fragmentShader:document.getElementById("fragmentshader").textContent});(e=new THREE.Points(n,o)).scale.copy(mesh.scale),e.rotation.copy(mesh.rotation),e.position.copy(mesh.position),scene.add(e)}loader.load("/assets/models/me_v2.glb",handle_load);var camera=new THREE.PerspectiveCamera(75,window.innerWidth/window.innerHeight,.1,1e3);camera.position.z=window.innerWidth>smBreakPoint?11:15,camera.position.y=0,camera.rotation.x=-Math.PI/5;var ambientLight=new THREE.AmbientLight(16777215),light=new THREE.PointLight(9474192,1);function resizeRendererToDisplaySize(e){const n=e.domElement,t=window.devicePixelRatio,i=n.clientWidth*t|0,a=n.clientHeight*t|0,o=n.width!==i||n.height!==a;return o&&(e.setSize(i,a,!1),windowHalfX=window.innerWidth<xlBreakPoint?window.innerWidth/2:window.innerWidth/4*3,camera.position.z=window.innerWidth>smBreakPoint?11:15),o}light.position.set(-6,7,6),scene.add(ambientLight),scene.add(light),renderer.render(scene,camera);var mouseX=0,mouseY=0,windowHalfX=window.innerWidth<xlBreakPoint?window.innerWidth/2:window.innerWidth/4*3,windowHalfY=window.innerHeight/4;function onDocumentMouseMove(e){doneLoading&&(mouseX=(windowHalfX-e.clientX)/230,mouseY=(windowHalfY-e.clientY)/230)}function animate(){if(requestAnimationFrame(animate),resizeRendererToDisplaySize(renderer)){const e=renderer.domElement;camera.aspect=e.clientWidth/e.clientHeight,camera.updateProjectionMatrix()}camera&&(camera.position.x+=.015*(mouseX-camera.position.x),camera.position.y+=.015*(-mouseY-camera.position.y),camera.lookAt(scene.position)),renderer.render(scene,camera)}function showCanvasAfterFirstRenderToPreventWhiteFlash(){renderer.render(scene,camera),renderer.setClearColor(0,0);let e=0;requestAnimationFrame((function n(){e++,renderer.render(scene,camera),e<20?requestAnimationFrame(n):e<21?(canvas.style.display="",requestAnimationFrame(n)):e<22?(canvas.style.visibility="visible",requestAnimationFrame(n)):(console.log("show canvas"),tmpImage.style.display="none",tmpSpinner.style.display="none",doneLoading=!0)}))}document.addEventListener("mousemove",onDocumentMouseMove,!1),animate(),canvas.addEventListener("webglcontextlost",(function(e){e.preventDefault(),console.log("WebGL context lost!"),canvas.style.display="none",tmpImage.style.display=""}),!1),canvas.addEventListener("webglcontextrestored",(function(e){console.log("WebGL context restored!"),canvas.style.display="",tmpImage.style.display="none"}),!1);