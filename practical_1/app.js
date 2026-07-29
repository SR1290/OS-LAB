let images = [
    "./img1.jpeg",
    "./img2.jpeg",
    "./img3.jpeg",
    "./img4.jpeg"
];
 
let index =0;
let slide =document.getElementById("Slide_Show");

let changeimage = () => {
    index++;
    if(index >= images.length)
    {
        index=0;
    }
slide.src=images[index];
}
setInterval(changeimage,2000);
