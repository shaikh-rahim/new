<!DOCTYPE html>
<!-- Created By CodingNepal -->
<head>
   <meta charset="utf-8">
   <title>Navbar</title>
   <link rel="stylesheet" href="style.css">
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   <link rel="stylesheet" href="header.css"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <nav>
      <ul>
         <li class="logo">Saksham 2022</li>
         <li class="items"><a href="http://localhost/new/navbar/homepage.php">Home</a></li>
         <li class="items"><a href="http://localhost/new/navbar/teacher.php">Teacher</a></li>
         <li class="items"><a href="http://localhost/new/navbar/event.php">Student</a></li>
      </ul>
   </nav>
   <script>
      $(document).ready(function(){
        $('.btn').click(function(){
          $('.items').toggleClass("show");
          $('ul li').toggleClass("hide");
        });
      });
   </script>
</body>
</html>