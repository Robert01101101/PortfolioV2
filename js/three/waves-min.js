function waves(){var e,t,n,i,o,r,a=160,d=180,s=40,l=0;window.innerWidth,window.innerHeight;function c(e){if(null==e)return;const n=e.animatedScroll;t.position.y=docHeight-n+100;var i=mapVal(n,0,docHeight,.13,.38);i<.13&&(i=.13),o.material.uniforms.color={type:"c",value:{r:i,g:i,b:i}}}function w(){window.innerWidth/2,window.innerHeight/2,t.aspect=window.innerWidth/window.innerHeight,t.updateProjectionMatrix(),i.setSize(window.innerWidth,window.innerHeight),calcDocHeight(),console.log("resize")}function u(){calcDocHeight(),c()}!function(){(e=document.createElement("div")).classList.add("waves"),document.body.appendChild(e),(t=new THREE.PerspectiveCamera(120,window.innerWidth/window.innerHeight,1,1e4)).position.z=3500,t.position.y=10*(docHeight-200-window.scrollY),n=new THREE.Scene;for(var l=d*s,u=new Float32Array(3*l),v=new Float32Array(l),m=0,f=0,h=0;h<d;h++)for(var g=0;g<s;g++)u[m]=h*a-d*a/2,u[m+1]=0,u[m+2]=g*a-s*a/2,v[f]=1,m+=3,f++;var p=new THREE.BufferGeometry;p.setAttribute("position",new THREE.BufferAttribute(u,3)),p.setAttribute("scale",new THREE.BufferAttribute(v,1));var y=new THREE.ShaderMaterial({uniforms:{color:{value:new THREE.Color(6710886)}},vertexShader:document.getElementById("vertexshader").textContent,fragmentShader:document.getElementById("fragmentshader").textContent});o=new THREE.Points(p,y),n.add(o),i=new THREE.WebGLRenderer({antialias:!0,alpha:!0}),(r=i.domElement).style.visibility="hidden",r.classList.add("wavesCanvas"),i.setPixelRatio(window.devicePixelRatio),i.setSize(window.innerWidth,window.innerHeight),e.appendChild(r),window.addEventListener("load",(()=>{window.lenis&&window.lenis.on("scroll",(e=>{c(e)}))})),window.addEventListener("resize",w,!1)}(),c(),u(),setTimeout(u,500),document.DOMContentLoaded=()=>{if("interactive"===document.readyState)for(let e=0;e<16;e++)setTimeout(u,50+Math.pow(4,e/2+1)/10);"undefined"!=typeof initProjectTiles&&initProjectTiles()},function e(){requestAnimationFrame(e),function(){for(var e=o.geometry.attributes.position.array,r=o.geometry.attributes.scale.array,a=0,c=0,w=0;w<d;w++)for(var u=0;u<s;u++)e[a+1]=200*Math.sin(.3*(w+l))+100*Math.sin(.5*(u+l)),r[c]=8*(Math.sin(.3*(w+l))+1)+1*(Math.sin(.5*(u+l))+1),a+=3,c++;o.geometry.attributes.position.needsUpdate=!0,o.geometry.attributes.scale.needsUpdate=!0,i.render(n,t),l+=.02}()}(),function(){i.render(n,t),i.setClearColor(0,0);let e=0;requestAnimationFrame((function o(){i.render(n,t),e++<15?requestAnimationFrame(o):r.style.visibility="visible"}))}(),r.addEventListener("webglcontextlost",(function(e){e.preventDefault(),console.log("WebGL context lost!"),r.style.display="none"}),!1),r.addEventListener("webglcontextrestored",(function(e){console.log("WebGL context restored!"),r.style.display=""}),!1)}function isLowPoweredDeviceWaves(){if((navigator.hardwareConcurrency||2)<=2)return!0;const e=navigator.userAgent.toLowerCase();return!!/mobile|android|iphone|ipod/.test(e)}isLowPoweredDeviceWaves()?console.warn("Low-powered device detected. Aborting model load."):waves();