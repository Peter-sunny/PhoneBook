function name() {
   $.ajax({
    type: "POST",
    url: "./display_name.php",
    data: {},
    success: function(response){
      $("#list-style").html(response)
    }
  })
 }

 name();
 // back
 $("#back").on("click",function(e){
  name();
  $("#form").show();
  $("#createdajax").hide();
    $("#update").css("display","none");
   $("#delete").css("display","none");
    $("#update-area").hide();

 })
// addnew
  $("#addnew").on("click",function(e){
    $("#form").show();
    $("#createdajax").hide();
    $("#update").css("display","none");
   $("#delete").css("display","none");
    $("#update-area").hide();

  })

  // entering data

  $("#submit").on("click",function(e){
    console.log("hello");
    var name=$("#name").val();
    var phone=$("#phone").val();
    var email=$("#email").val();
    var address=$("#address").val();
    $("#form").hide();
    $("#createdajax").show();
    $("#addnew").css("display","flex");
     $("#update-area").hide();


    $.ajax({
      type: 'POST',
      url: './inserting-data.php',
      data: {name,phone,email,address},
      success: function(response) {
        $("#createdajax").html(response); 
         name();        
      }
    });
     name();
  });

// display clicked content

$("#list-adj").on("click",".display_name",function(e){

  new_id = (e.target.getAttribute("u_id"));
  $("#form").hide()
  $("#update").css("display","flex");
  $("#delete").css("display","flex");
  $("#addnew").css("display","flex");
  $("#createdajax").show();
   $("#update-area").hide();

  $.ajax({
    type: 'POST',
    url: './userdetail.php',
    data: {id:e.target.getAttribute("u_id")},
    success: function(response){
      $("#createdajax").html(response);
    }

  });

});

 // deleteing

 $("#delete").on("click",function(e){
   new_id = $("#id_input").val();
   $("#form").show();
   $("#update").css("display","none");
   $("#delete").css("display","none");
    $("#update-area").hide();
   
   $.ajax({
    type: 'POST',
    url: './delete.php',
    data: {id:new_id},
    success: function(response){
      $("#createdajax").html(response);
      name();
    }

  });
 });
 $("#update").on("click",function(e){
  new_id = $("#id_input").val();
  $("#update").css("display","none");
  $("#delete").css("display","none");
  $("#form").hide();
  $("#createdajax").hide();
    $("#update-area").show(); 

  $.ajax({
    type: 'POST',
    url: './update-filling.php',
    data: {id:new_id},


    success: function (response) {

     $("#update-area").html(response);
     name();

     


   }
 });
});
 $("#update-area").on("click", "#update-save-btn", function(e){

  var updateid = (e.target.getAttribute("updateid"));
  var name=$("#update_name").val();
  var phone=$("#update_phone").val();
  var email=$("#update_email").val();
  var address=$("#update_address").val();
    $("#update-area").hide();
    $("#createdajax").show();



  $.ajax({
   type: 'POST',
   url: './update.php',
   data: {updateid:updateid, name:name, phone:phone, email:email, address:address},
   success: function (response) {
     $("#createdajax").html(response);
    name();
           // body...

         }
       })
})
 
// search
$("#search-btn").on("click",function(e){
  var search = $("#search").val();
  
  $.ajax({
    type: 'POST',
    url: 'search.php',
    data: {search:search},
    success: function (response) {
      $("#list").html(response);
    }
  })
})




