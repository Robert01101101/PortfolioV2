var activeFilters=new Array,andActive=!1;document.querySelectorAll(".filterBtn").forEach((e=>{var t=!1;const i=e.dataset.js;e.addEventListener("click",(o=>{if(e.classList.toggle("filterBtn--selected"),t=!t)activeFilters.push(i);else{const e=activeFilters.indexOf(i);e>-1&&activeFilters.splice(e,1)}console.log(activeFilters.length),document.dispatchEvent(new CustomEvent("updateProject",{bubbles:!0,detail:{slug:()=>i,toggle:()=>t}})),setTimeout((()=>{sortProjects()}),10),window.locoScroll.update()}))}));const projRows=document.querySelectorAll(".projRow"),hiddenDiv=document.getElementById("projectTileHidden"),visibleDiv=document.getElementById("projectTileVisible");var counter=0;projRows.forEach((e=>{const t=e.dataset.js.split(",");var i=counter;e.setAttribute("data-tile",i),counter++,addEventListener("updateProject",(function(i){var o=!1,s=!1;activeFilters.length>0?activeFilters.forEach((e=>{t.includes(e)?o=!0:andActive&&(s=!0)})):o=!0,s&&(o=!1),o?(e.classList.contains("projRow--hidden")&&e.classList.remove("projRow--hidden"),visibleDiv.appendChild(e)):(e.classList.contains("projRow--hidden")||e.classList.add("projRow--hidden"),hiddenDiv.appendChild(e))}))}));const projectCount=document.getElementById("projectCount");function sortProjects(){var e=visibleDiv.childNodes,t=[];for(var i in e)1==e[i].nodeType&&t.push(e[i]);for(projectCount.innerHTML=t.length,t.sort((function(e,t){return e.dataset.tile==t.dataset.tile?0:e.dataset.tile>t.dataset.tile?1:-1})),i=0;i<t.length;++i)visibleDiv.appendChild(t[i])}