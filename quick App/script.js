 var start = new Date().getTime();
     
	 function generator() {
       	  var width = ( Math.random() * 200 ) + 100;
          var top = Math.random() * 400;
          var left = Math.random() * 400;
		  
		  if (Math.random() > 0.5) {
		  document.getElementById("shape").style.borderRadius = "50%";
		    
		  }else
		  {
		   document.getElementById("shape").style.borderRadius = "0";
		  
		  }

          document.getElementById("shape").style.top = top + "px";
          document.getElementById("shape").style.left = left + "px";
		  document.getElementById("shape").style.width = width + "px";
		  document.getElementById("shape").style.height = width + "px";
		  
		  document.getElementById("shape").style.display = "block";
	      start = new Date().getTime();
	 }
     function callingOne() {
    setTimeout(generator, Math.random() * 2000);
 } 
   callingOne();
    
 
   document.getElementById("shape").onclick = function() {
   document.getElementById("shape").style.display = "none";
   var end = new Date().getTime();
   var total = (end - start) / 1000;
   
   document.getElementById("timeTaken").innerHTML = total + "s";
     callingOne();
  }