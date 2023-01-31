<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>phonebook</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="custom.css">
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>




	<!-- head -->

	
   <div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6"><div id="head">Phone Book</div></div>
     <div class="col-md-3"><button class="btn btn-primary" id="back">BACK</button></div>
   </div>
  <!-- FORM -->
  <div class="row ">

    <!-- left -->
    <div class="col-md-6" >
      <div id="left">
        <div id="searchbox">
          <div class="row">
            <div class="col-md-10">
              <input type="search" class="form-control" id="search" placeholder="Enter name" name="search" placeholder="search">
            </div>
            <div class="col-md-2">
              <button class="btn btn-primary" id="search-btn">SEARCH</button>
            </div> 


          </div>

        </div>
        <div id="list-adj">
          <div id="list" >

            <div id="list-style" >



            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- right -->
    <div class="col-md-6">
      <div id="right">
        <div id="addnew"><button class="btn btn-primary" >Add New</button></div>
        <div class="container mt-3">
         <div id="form"  >
          <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Adress:</label>
            <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
          </div>

          <button  id="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>

        <div id="createdajax">

        </div>
        <div id="update-area" ></div>
        <div class="row">
          <div class="col-md-2"><button  id="update" class="btn btn-primary">Update</button></div>
          <div class="col-md-6"><button  id="delete" class="btn btn-primary">delete</button></div>
        </div>
        
        

      </div>
    </div>
  </div>

</body>
</html>
<script type="text/javascript" src="./mainjs.js">


</script>