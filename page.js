setTimeout(() => {
  var j=0;
const change = () => {
    if(j==0)
    {
      var n=document.getElementById("floating-window").length;
      for(var i=0;i<n;++i)
      {
        
      document.getElementById("floating-window")[i].style.display = "none";

       
      }
    }
    
    j=1;
  };

change();
alert('hello');


var n=document.querySelectorAll(".floatcard").length;
for(var i=0;i<n;++i)
{
  document.querySelectorAll(".floatcard")[i].addEventListener("click",function()
  {
    var index=document.querySelectorAll(".floatcard")[i].querySelector("h5");
    document.getElementById(index).style.display = "block";
  $(".content-div").css("opacity","0.3");

  });
}

var m=document.getElementsByClassName("close-button").length;
for(var i=0;i<n;++i)
{
  document.getElementsByClassName("close-button")[i].addEventListener("click",function()
  {
    var floatid=this.classList[2];
    document.getElementById(floatid).style.display = "none";
    $(".content-div").css("opacity","1");
  }) 
}}, 5000);