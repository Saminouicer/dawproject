

var co = 1 ; 
setInterval(
    function(){
        document.getElementById('radio' + co).checked = true ; 
        co ++ ; 
        if (co > 3){
            co = 1 ; 
        }
    }, 5000
); 

var co =1; 
function menu(){
  
  if(co % 2 != 0 && window.innerWidth <= 845) {
    document.getElementById("nav1").style.display = "flex" ;
    document.getElementById("nav2").style.display = "flex" ; 
    document.getElementById("nav3").style.display = "flex" ;
    document.getElementById("nav4").style.display = "flex" ;
    document.getElementById("nav5").style.display = "flex" ;
    document.getElementById("nav6").style.display = "flex" ;
    co++ ; 
    setTimeout(() => {
      document.getElementById("nav--bar--inside").style.opacity = 1;
    }, 100);
    setTimeout(() => {
      document.getElementById("nav1").style.opacity = 1;
      document.getElementById("nav2").style.opacity = 1;
      document.getElementById("nav3").style.opacity = 1;
      document.getElementById("nav4").style.opacity = 1;
      document.getElementById("nav5").style.opacity = 1;
      document.getElementById("nav6").style.opacity = 1;
    }, 300);
    return ; 
  }
  if(co % 2 == 0 && window.innerWidth <= 845) {
    co++ ; 
    setTimeout(() => {
      document.getElementById("nav--bar--inside").style.opacity = 0;
    }, 300);
    setTimeout(() => {
      document.getElementById("nav1").style.opacity = 0;
      document.getElementById("nav2").style.opacity = 0;
      document.getElementById("nav3").style.opacity = 0;
      document.getElementById("nav4").style.opacity = 0;
      document.getElementById("nav5").style.opacity = 0;
      document.getElementById("nav6").style.opacity = 0;
    }, 100);
    return ; 
  }
  
}

window.addEventListener('scroll', function() {
  var myDiv = document.getElementById('navbar');
  var myDiv1 = document.getElementById('nav--bar--inside');
  var myDiv2 = document.getElementById('nav2');
  var myDiv3 = document.getElementById('nav3');
  var myDiv4 = document.getElementById('nav4');
  var myDiv5 = document.getElementById('nav5');
  var myDiv6 = document.getElementById('nav6');
  var svg = this.document.getElementById('svgnav')

  var scrolled = window.scrollY > 100;
  if (scrolled) {
    myDiv.classList.add('scrolled');
    myDiv1.style.translate = ".3s";
    svg.style.display = "none" ; 
  } else {
    myDiv.classList.remove('scrolled');
    svg.style.display = "unset" ; 
  }
});





