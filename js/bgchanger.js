var imageCount = 0;
var currentImage = 0;
var images = new Array();

images[0] = 'imagens/bg1.jpg';
images[1] = 'imagens/bg2.jpeg';
images[2] = 'imagens/bg3.jpg';
images[3] = 'imagens/bg4.jpg';
images[4] = 'imagens/bg5.jpg';

var preLoadImages = new Array();
for (var i = 0; i < images.length; i++)
{
   if (images[i] === "")
   break;

   preLoadImages[i] = new Image();
   preLoadImages[i].src = images[i];
   imageCount++;
}

function startSlideShow()
{
   if (document.body && imageCount > 0)
   {
   document.body.style.backgroundImage = "url("+images[currentImage]+")";    
   document.body.style.backgroundAttachment = "fixed";
   document.body.style.backgroundRepeat = "repeat";
   document.body.style.backgroundPosition = "left top";

   currentImage = currentImage + 1;
   if (currentImage > (imageCount-1))
   { 
   currentImage = 0;
   }
   setTimeout('startSlideShow()', 5000);
   }
}
