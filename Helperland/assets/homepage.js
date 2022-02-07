function login(){
    document.getElementById("popup").style.display="flex";
    // document.body.style.overflowY="hidden";
  }

  
  document.querySelector(".close").addEventListener("click", function(){
    document.getElementById("popup").style.display="none";
  });
function forget_password(){
  document.getElementById("forgetpassword").style.display="flex";
  document.querySelector(".close1").addEventListener("click", function(){
    document.getElementById("popup").style.display="flex";
    document.getElementById("forgetpassword").style.display="none";
  });
}
