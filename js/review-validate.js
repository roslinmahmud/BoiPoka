function validate(){
    var review = document.getElementById("review");
    if(review.value.length == 0){
      review.className = "form-control";
    }
    else{
      review.className = "form-control is-valid";
    }
}

function submit(bookid, name){
  var review = document.getElementById("review");
  var reviews = document.getElementById("reviews");
  var inner = reviews.innerHTML;
  if(review.value.length == 0){
    review.className = "form-control is-invalid";
  }
  else{
    var value = review.value;
    value.split(' ').join('+');
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function(){
      if(this.readyState == 4 && this.status == 200){
        document.getElementById("review").placeholder=this.responseText;
        reviews.innerHTML=inner+'<li class="list-group-item"><h6>'+name+'</h6><p>'+review.value+'</p></li>';
        review.value = "";
      }
    }
    xmlhttp.open("GET", "review.php?review="+value+"&bookid="+bookid, true);
    xmlhttp.send();
  }
}