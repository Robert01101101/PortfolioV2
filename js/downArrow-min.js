var downArrow=document.getElementById("downArrow");function updateArrow(o){(o.y||window.scrollY)>.6*window.innerHeight?downArrow.classList.add("hide"):downArrow.classList.remove("hide")}window.addEventListener("load",(()=>{window.locoScroll&&downArrow&&window.locoScroll.on("scroll",(o=>{updateArrow(o.scroll)}))}));