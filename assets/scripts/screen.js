async function report() {
    let screenshot = await makeScreenshot(); // png dataUrl
    let img = q(".screen");
    img.src = screenshot; 
    
    let c = q(".bug-container");
    c.classList.remove('hide')
        
    let box = await getBox();    
    c.classList.add('hide');

    send(screenshot,box); // sed post request  with bug image, region and description
    alert('To see POST requset with image go to: chrome console > network tab');
}

// ----- Helper functions

let q = s => document.querySelector(s); // query selector helper
window.report = report; // bind report be visible in fiddle html

async function  makeScreenshot(selector="body") 
{
  return new Promise((resolve, reject) => {  
    let node = document.querySelector(selector);
    
    html2canvas(node, { onrendered: (canvas) => {
        let pngUrl = canvas.toDataURL();      
        resolve(pngUrl);
    }});  
  });
}

async function getBox(box) {
  return new Promise((resolve, reject) => {
     let b = q(".bug");
     let r = q(".region");
     let scr = q(".screen");
     let send = q(".send");
     let start=0;
     let sx,sy,ex,ey=-1;
     r.style.width=0;
     r.style.height=0;
     
     let drawBox= () => {
         r.style.left   = (ex > 0 ? sx : sx+ex ) +'px'; 
         r.style.top    = (ey > 0 ? sy : sy+ey) +'px';
         r.style.width  = Math.abs(ex) +'px';
         r.style.height = Math.abs(ey) +'px'; 
     }
     
     
     
     //console.log({b,r, scr});
     b.addEventListener("click", e=>{
       if(start==0) {
         sx=e.pageX;
         sy=e.pageY;
         ex=0;
         ey=0;
         drawBox();
       }
       start=(start+1)%3;  		
     });
     
     b.addEventListener("mousemove", e=>{
       //console.log(e)
       if(start==1) {
           ex=e.pageX-sx;
           ey=e.pageY-sy
           drawBox(); 
       }
     });
     
     send.addEventListener("click", e=>{
       start=0;
       let a=100/75 //zoom out img 75%       
       resolve({
          x:Math.floor(((ex > 0 ? sx : sx+ex )-scr.offsetLeft)*a),
          y:Math.floor(((ey > 0 ? sy : sy+ey )-b.offsetTop)*a),
          width:Math.floor(Math.abs(ex)*a),
          height:Math.floor(Math.abs(ex)*a),
          desc: q('.bug-desc').value
          });
          
     });
  });
}

function send(image,box) {

    let formData = new FormData();
    let req = new XMLHttpRequest();
    
    formData.append("box", JSON.stringify(box)); 
    formData.append("screenshot", image);     
    
    req.open("POST", '/upload/screenshot');
    req.send(formData);
}