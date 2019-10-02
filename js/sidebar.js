
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var sidebar = document.getElementsByClassName("dropdown-container");
var i,hr;
var purl= window.location.pathname.split("/")[2];

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.add("active");
    var dropdownContent = this.nextElementSibling;
    console.log(dropdownContent);
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
  
        $(document).ready(function(){
    if($('div.sidenav  a').filter(function() {
       hr=this.href.split("/")[4];
       
        //  console.log(purl);
        //console.log(this.href.split("localhost:8000")[1]);
        
         return  hr == purl;
        
    }).length>0){
       $('div.sidenav  a').each(function(i){
           if (this.href.split("/")[4] == purl){
               this.classList.toggle("active");
               let item = this;
               console.log(item);
               $('div.dropdown-container a').each(function(i){
                   if(this==item){
                    sidebar[0].style.display="block";
                   }
               });
           }
       });
    }
   
    });