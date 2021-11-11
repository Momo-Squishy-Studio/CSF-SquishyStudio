const l=function(){const r=document.createElement("link").relList;if(r&&r.supports&&r.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))s(e);new MutationObserver(e=>{for(const t of e)if(t.type==="childList")for(const a of t.addedNodes)a.tagName==="LINK"&&a.rel==="modulepreload"&&s(a)}).observe(document,{childList:!0,subtree:!0});function u(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerpolicy&&(t.referrerPolicy=e.referrerpolicy),e.crossorigin==="use-credentials"?t.credentials="include":e.crossorigin==="anonymous"?t.credentials="omit":t.credentials="same-origin",t}function s(e){if(e.ep)return;e.ep=!0;const t=u(e);fetch(e.href,t)}};l();new Swiper(".swiper-container",{autoplay:{delay:3e3},speed:1e3,loop:!0,slidesPerView:"auto",cubeEffect:{slideShadows:!1},pagination:{el:".swiper-pagination",type:"bullets"},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});gsap.timeline({repeat:-1}).to("#plateau2",{rotate:"-20vw",duration:1,ease:"ease-out",yoyo:!0},1).to("#plateau2",{rotate:"20vw",duration:1,ease:"ease-in"},2).to("#plateau2",{rotate:"0vw",duration:1.2,ease:"ease-in"},3);gsap.timeline().to("#carousel1",{rotate:360,duration:4,ease:Linear.easeNone,repeat:-1});gsap.timeline().to("#roue",{x:"-40vw",duration:2,ease:"ease-out",yoyo:!0,repeat:-1},-1).to("#monocycle",{x:"-40vw",duration:2,ease:"ease-out",yoyo:!0,repeat:-1},-1);gsap.timeline().to("#roue",{rotate:-500,duration:2,repeat:0,ease:"ease-out",yoyo:!0,repeat:-1});gsap.timeline().to("#roue2",{x:"-40vw",duration:2,ease:"ease-out",yoyo:!0,repeat:-1},-1).to("#monocycle2",{x:"-40vw",duration:2,ease:"ease-out",yoyo:!0,repeat:-1},-1);gsap.timeline().to("#roue2",{rotate:-500,duration:2,ease:"ease-out",yoyo:!0,repeat:-1});const d=document.querySelector(".upper"),c=document.querySelector(".middle"),p=document.querySelector(".lower"),n=document.querySelector(".hamburger");
/*n.addEventListener("click",()=>{var o=document.querySelector(".hamburger-toggle");if(o.style.display=="block"){o.style.display="none";return}o.style.display="block"});const i=gsap.timeline().to(d,.1,{attr:{d:"M8,2 L2,2"},x:1,y:1,ease:Power2.easeInOut}).to(p,.1,{attr:{d:"M8,8 L2,8"},x:1,y:-1,ease:Power2.easeInOut}).to(c,.1,{attr:{d:"M2,5 L8,5"},x:1,ease:Power2.easeInOut});n.addEventListener("mouseenter",()=>i.play());n.addEventListener("mouseleave",()=>i.reverse());*/

//Fetch nouvelles Accueil
fetch("/wp-json/wp/v2/news?_embed&order=date&order=desc")
            .then(response => response.json())
            .then(data => { 
            let html = "";
            let fetchDivAccueil = document.querySelector('#fetch-api-cards-accueil')
        
         for (let i = 0; i < 3; i++) {

           let link = data[i].link;
            let title = data[i].title.rendered;
            let auteur = data[i].acf.auteur;
            let categorie = data[i].acf.categorie;
            let date = data[i].acf.date;
            let resume = data[i].acf.resume;
            let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

            html += 

            `<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
						<div class="card card1" id="card-v2">							
							<div class="card-body">
								<h2 class="card-title">${title}</h2>
								<img src="${image}" class="card-img-top"/>
								<p>${resume}</p>
								<div class="card-footer" id="card-footer-v2"><a href='${link}'><button class="hero-button">En Savoir Plus</button></a></div>
							</div>
						</div>
					</div>`;

              fetchDivAccueil.innerHTML = html;
         }
      });

//Fetch nouvelles Hub
var order = 'desc';
var orderby = document.getElementById("order-date");

orderby.addEventListener("change", function() {
     var order = this.value

fetch(`/wp-json/wp/v2/news?_embed&per_page=13&order=date&order=${order}`)
      .then(response => response.json())
      .then(data => { 
      let html2 = "";
      let fetchDivHub = document.querySelector('#fetch-api-cards-hub')
        
   for (let i = 0; i < 6; i++) {

     let link = data[i].link;
      let title = data[i].title.rendered;
      let auteur = data[i].acf.auteur;
      let categorie = data[i].acf.categorie;
      let date = data[i].acf.date;
      let resume = data[i].acf.resume;
      let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

      html2 += 

      `<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
                  <div class="card card1">							
                      <div class="card-body">
                          <h2 class="card-title">${title}</h2>
                          <img src="${image}" class="card-img-top"/>
                          <p>${resume}</p>
                          <div class="card-footer"><a href='${link}'><button class="hero-button">En Savoir Plus</button></a></div>
                      </div>
                  </div>
              </div>`;

        fetchDivHub.innerHTML = html2;
   }
});
});

let btnNews= document.querySelector('#afficher-plus-nouvelles');
btnNews.addEventListener('click', showNews);

function showNews() {
    fetch("/wp-json/wp/v2/news?_embed&per_page=13&order=date&order=desc")
      .then(response => response.json())
      .then(data => { 
      let html2 = "";
      let fetchDivHub = document.querySelector('#fetch-api-cards-hub')


   for (let i = 0; i < 12; i++) {

     let link = data[i].link;
      let title = data[i].title.rendered;
      let auteur = data[i].acf.auteur;
      let categorie = data[i].acf.categorie;
      let date = data[i].acf.date;
      let resume = data[i].acf.resume;
      let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

      html2 += 

      `<div class="col-xl-4 col-lg-6 col-sm-12 mb-4">
                  <div class="card card1">							
                      <div class="card-body">
                          <h2 class="card-title">${title}</h2>
                          <img src="${image}" class="card-img-top"/>
                          <p>${resume}</p>
                          <div class="card-footer"><a href='${link}'><button class="hero-button">En Savoir Plus</button></a></div>
                      </div>
                  </div>
              </div>`;

        fetchDivHub.innerHTML = html2;
   }
});
}

