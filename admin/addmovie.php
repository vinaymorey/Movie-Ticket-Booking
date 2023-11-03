<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="css/register.css">
    <script src="js/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <div class="container">
    <center><a href="./index.html"><img src="img/logo.png" alt="" style="margin-top: 80px; width: 50%;"></a></center>
    <div class="title">Add New Movie</div>
    <div class="content">
      <form id="form" action="add_movie_insert_data.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Movie Name</span>
            <input type="text" id="name" name="moviename" placeholder="Enter your Movie name">
            <p id="nameerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Director</span>
            <input type="text" id="director" name="director" placeholder="Enter director name">
            <p id="directorerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Category</span>
            <select name="category" id="category">
                <option value="comedy">comedy</option>
                <option value="war">war</option>
                <option value="love">love</option>
                <option value="action">action</option>
            </select>
            <p id="categoryerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Language</span>
            <input type="text" id="Language" name="Language" placeholder="Enter Language">
            <p id="Languageerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Release Date</span>
            <input type="date" id="date" name="date">
            <p id="emailerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Show</span>
            <input type="time" id="time" name="time">
            <p id="emailerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Trailer link</span>
            <input type="text" id="link" name="link" placeholder="Enter Trailer link">
            <p id="linkerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Action</span>
            <select name="action" id="email">
                <option value="upcoming">Upcoming</option>
                <option value="running">Running</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" id="Description" name="Description" placeholder="Enter Description">
            <p id="Descriptionerror"></p>
          </div>
          <div class="input-box">
            <span class="details">Image uploaded (Option)</span>
            <input type="file" id="image" name="image">
            <p id="imageerror"></p>
          </div>
        </div>
        <p id="error_para" ></p>
        <div id="err"></div>
        <div class="button">
          <input type="submit" value="Register" id="submit" name="submit">
        </div>
      </form>
    </div>
  </div>
<script type="text/javascript">
    document.getElementById("date").valueAsDate = new Date();
    var date = new Date();
    var currentTime = date.toISOString().substring(11,16);
    document.getElementById('time').value = currentTime;
  function validate()
{
 var error="";
 var name = document.getElementById( "name" );
 var director = document.getElementById( "director" );
 var category = document.getElementById( "category" );
 var Language = document.getElementById( "Language" );
 var link = document.getElementById( "link" );
 var Description = document.getElementById( "Description" );
 var image = document.getElementById( "image" );
 if( name.value == "" )
 {
  error = " <font color='red'>!Requrie Name.</font> ";
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 }
 if(name.value.length <= 2) 
{
   error = " <font color='red'>!please not allow 2 and 20 chaecter</font> ";
 
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 
}
if(!isNaN(name.value)) 
{
   error = " <font color='red'>!please only charecter allowed</font> ";
 
  document.getElementById( "nameerror" ).innerHTML = error;
  return false;
 
}

 if( director.value == "")
 {
  error = " <font color='red'>!Requrie director name.</font> ";
  document.getElementById( "directorerror" ).innerHTML = error;
  return false;
 } 
 if(name.value.length <= 2) 
{
   error = " <font color='red'>!please not allow 2 and 20 chaecter</font> ";
 
  document.getElementById( "directorerror" ).innerHTML = error;
  return false;
 
} if(!isNaN(name.value)) 
{
   error = " <font color='red'>!please only charecter allowed</font> ";
 
  document.getElementById( "directorerror" ).innerHTML = error;
  return false;
 
}



if( Language.value == "" )
 {
  error = " <font color='red'>!Requrie Language.</font> ";
  document.getElementById( "Languageerror" ).innerHTML = error;
  return false;
 }
 if(Language.value.length <= 2) 
{
   error = " <font color='red'>!please not allow 2 and 20 chaecter</font> ";
 
  document.getElementById( "Languageerror" ).innerHTML = error;
  return false;
 
}
if(!isNaN(Language.value)) 
{
   error = " <font color='red'>!please only charecter allowed</font> ";
 
  document.getElementById( "Languageerror" ).innerHTML = error;
  return false;
 
}


if( link.value == "" )
 {
  error = " <font color='red'>!Requrie link.</font> ";
  document.getElementById( "linkerror" ).innerHTML = error;
  return false;
 }
 if(link.value.length <= 2) 
{
   error = " <font color='red'>!please not allow 2 and 20 chaecter</font> ";
 
  document.getElementById( "linkerror" ).innerHTML = error;
  return false;
 
}
if(!isNaN(link.value)) 
{
  error = " <font color='red'>!please only charecter allowed</font> ";
  document.getElementById( "linkerror" ).innerHTML = error;
  return false;
 
}

if( Description.value == "" )
 {
  error = " <font color='red'>!Requrie Description.</font> ";
  document.getElementById( "Descriptionerror" ).innerHTML = error;
  return false;
 }
 if(Description.value.length <= 2) 
{
   error = " <font color='red'>!value must be greater than 2</font> ";
 
  document.getElementById( "Descriptionerror" ).innerHTML = error;
  return false;
 
}
if(!isNaN(Description.value)) 
{
   error = " <font color='red'>!please only charecter allowed</font> ";
 
  document.getElementById( "Descriptionerror" ).innerHTML = error;
  return false;
 
}

if( image.value == "")
 {
  error = " <font color='red'>!Requrie Image.</font> ";
  document.getElementById( "imageerror" ).innerHTML = error;
  return false;
 } 
if(!isNaN(image.value)) 
{
   error = " <font color='red'>!Requrie Image</font> ";
 
  document.getElementById( "imageerror" ).innerHTML = error;
  return false;
 
}


 else
 {
  return true;
 }
}
</script>
</body>
</html>
