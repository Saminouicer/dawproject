// start scroll animation
window.addEventListener('scroll', reveal);

  

function reveal() {
  var reveals =document.querySelectorAll('.reveal');
  for(var i=0; i < reveals.length; i++) {
    var windowheight=window.innerHeight;
    var revealtop= reveals[i].getBoundingClientRect().top;
    var revealpoint=30;
    if(revealtop<windowheight-revealpoint) {
      reveals[i].classList.add('active');
    }
  }
}
// end scroll animation



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
  
  if(co % 2 != 0 ) {
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
  if(co % 2 == 0) {
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
  var svg = this.document.getElementById('svgnav');

  var scrolled = window.scrollY > 100;
  if (scrolled) {
    myDiv.classList.add('scrolled');
    myDiv1.style.opacity = ".1s"; 
    svg.style.width = "35px"
    svg.style.height = "35px"
    
  } else {
    myDiv.classList.remove('scrolled');
    svg.style.width = "60px"
    svg.style.height = "60px"
  }
});




function showBreakfast(){

  document.getElementById('menu1-col1').style.display = "unset" ;
  document.getElementById('menu1-col2').style.display = "none" ;
  document.getElementById('menu1-col3').style.display = "none" ;
  

}
function showLunch(){
  
  document.getElementById('menu1-col2').style.display = "unset" ;
  document.getElementById('menu1-col1').style.display = "none" ;
  document.getElementById('menu1-col3').style.display = "none" ;
}
function showDinner(){
  document.getElementById('menu1-col3').style.display = "unset" ;
  document.getElementById('menu1-col1').style.display = "none" ;
  document.getElementById('menu1-col2').style.display = "none" ;
}

function showDesserts(){
  document.getElementById('menu1-col4').style.display = "unset" ;
  document.getElementById('menu1-col5').style.display = "none" ;
  document.getElementById('menu1-col6').style.display = "none" ;
}
function showTdesserts(){
  document.getElementById('menu1-col5').style.display = "unset" ;
  document.getElementById('menu1-col4').style.display = "none" ;
  document.getElementById('menu1-col6').style.display = "none" ;
}
function showDrinks(){
  document.getElementById('menu1-col6').style.display = "unset" ;
  document.getElementById('menu1-col5').style.display = "none" ;
  document.getElementById('menu1-col4').style.display = "none" ;
}


document.getElementById('nav2').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('menu1--').scrollIntoView({ behavior: 'smooth' });
});

document.getElementById('nav3').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('blog--').scrollIntoView({ behavior: 'smooth' });
});
document.getElementById('nav4').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('about--').scrollIntoView({ behavior: 'smooth' });
});
document.getElementById('nav5').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('footer--').scrollIntoView({ behavior: 'smooth' });
});
document.getElementById('nav6').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('reservation--').scrollIntoView({ behavior: 'smooth' });
});


