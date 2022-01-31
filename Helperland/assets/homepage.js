function login(){
    document.getElementById("popup").style.display="flex";
    // document.body.style.overflowY="hidden";
  }
  document.querySelector(".close").addEventListener("click",function(){
    document.getElementById("popup").style.display="none";
  })