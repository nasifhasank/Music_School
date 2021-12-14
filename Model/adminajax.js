
    console.log("Ajax for admin");

    function load () {
      var x=new XMLHttpRequest ();
        x.onreadystatechange=function(){
         if(this. readyState=4 && this.status==200)
            {
             document. getElementById ("testt").innerHTML=this.responseText;
         }
      }
      x.open ('GET', 'courses.html' ,true);
     x. send () ;
    }