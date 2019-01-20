 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Welcome Home</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="home.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

     <script>
       function showVideo() {
         alert('showVideo called');
        return document.getElementById('videoDiv').style.property = visibility: visible;
      }
     </script>

   </head>
   <body>
     <div class="container">

       <!-- Nav Bar -->
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="https://guarded-anchorage-18964.herokuapp.com/home.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="https://guarded-anchorage-18964.herokuapp.com/assignments.php">Assignments</a>
         </ul>

       </nav>

       <div class="row">

         <div class="col-sm-4">
           <img id="me" class="img-fluid" class="rounded" class="float-left" src="me.jpg" alt="">
         </div>
         <div class="col-sm-8">
           <p>
             My name is Cade and I really like these type of courses because you really <br>
             get to see how things work under the hood. I like being able to see how websites <br>
             work and design my own. <br>
             </p>
             <p id="paraTwo">
             I also really enjoy Soccer. It amazes me what people can do with their feet and a <br>
             soccer ball. A YouTube channel called <button type="button" onclick="showVideo()">The F2</button>
             has really inspired me to <br>
             get better at the <span class="font-italic">Beautiful</span> game.
             </p>

             <!-- now I need to find a way to size it -->
             <div id="videoDiv" class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nPQYvGvJ6uo" allowfullscreen></iframe>
             </div>


         </div>


         </div>
     </div>
   </body>
 </html>
