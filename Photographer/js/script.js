
 // --------------------------- прилипающее меню -------------------------------------

$(document).ready(function(){
    const $menu = $("#menu");
    $(window).scroll(function(){
        if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
            $menu.fadeOut('fast',function(){
                $(this).removeClass("default").addClass("change").fadeIn('fast');
            });
        }
        else if($(this).scrollTop() <= 100 && $menu.hasClass("change")) {
            $menu.fadeOut('fast',function(){
                $(this).removeClass("change").addClass("default").fadeIn('fast');
            });
        }
    });
});


 // --------------------------- small gallery -------------------------------------

 const galleryItem = document.getElementsByClassName("gallery-items");
 const lightBoxContainer = document.createElement("div");
 const lightBoxContent = document.createElement("div");
 const lightBoxImg = document.createElement("img");
 const lightBoxPrev = document.createElement("div");
 const lightBoxNext = document.createElement("div");

 lightBoxContainer.classList.add("lightbox");
 lightBoxContent.classList.add("lightbox-content");
 lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
 lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

 lightBoxContainer.appendChild(lightBoxContent);
 lightBoxContent.appendChild(lightBoxImg);
 lightBoxContent.appendChild(lightBoxPrev);
 lightBoxContent.appendChild(lightBoxNext);

 document.body.appendChild(lightBoxContainer);

 let index = 1;

 function showLightBox(n) {
     if (n > galleryItem.length) {
         index = 1;
     } else if (n < 1) {
         index = galleryItem.length;
     }
     let imageLocation = galleryItem[index-1].children[0].getAttribute("src");
     lightBoxImg.setAttribute("src", imageLocation);
 }

 function currentImage() {
     lightBoxContainer.style.display = "block";

     let imageIndex = parseInt(this.getAttribute("data-index"));
     showLightBox(index = imageIndex);
 }
 for (let i = 0; i < galleryItem.length; i++) {
     galleryItem[i].addEventListener("click", currentImage);
 }

 function slideImage(n) {
     showLightBox(index += n);
 }
 function prevImage() {
     slideImage(-1);
 }
 function nextImage() {
     slideImage(1);
 }
 lightBoxPrev.addEventListener("click", prevImage);
 lightBoxNext.addEventListener("click", nextImage);

 function closeLightBox() {
     if (this === event.target) {
         lightBoxContainer.style.display = "none";
     }
 }
 lightBoxContainer.addEventListener("click", closeLightBox);



 // sound when hover on photo
 let playBtn = document.getElementById('photoSound'),
     resetBtn = document.getElementById('reset'),
     heartbeat = document.getElementById('heartbeat')
 audios = document.querySelectorAll('audio');
 console.log(audios);


 playBtn.addEventListener('mouseover', function() {
     [].forEach.call(audios, function(audio) {
         // do whatever
         audio.play();
     });
 }, false);

 playBtn.addEventListener('mouseleave', function() {
     heartbeat.pause();
     heartbeat.currentTime = 0;
 }, false);

 resetBtn.addEventListener('mouseover', function() {
     heartbeat.play();
 }, false);

 resetBtn.addEventListener('mouseleave', function() {
     heartbeat.pause();
     heartbeat.currentTime = 0;
 }, false);