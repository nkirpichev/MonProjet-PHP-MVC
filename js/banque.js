
function ChangeColor(cl) {
  let testClass = document.getElementsByTagName("a");
  
  for (i = 0; i < testClass.length; i++) {console.log(testClass[i]);
     if(testClass[i].innerHTML.toLowerCase() == cl.toLowerCase()) testClass[i].classList.add("active");
     else testClass[i].classList.remove("active");
     
}
  
  //.style.color = "red";
}
