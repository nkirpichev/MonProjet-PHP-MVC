
function changeColor(cl) {
  let testClass = document.getElementsByTagName("a");
  
  for (i = 0; i < testClass.length; i++) {
     if(testClass[i].innerHTML.toLowerCase() == cl) 
        testClass[i].classList.add("active");
     else testClass[i].classList.remove("active");
  }
}

function confirmation() {
  
  result = confirm("100"); 
  return result;
}
