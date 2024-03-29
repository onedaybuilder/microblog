<?php session_start();?>
<?php include_once 'includes/db.php';?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Fonts Lora and open sans -->
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500,600,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <link rel= "stylesheet" href="css/fontawesome.min.css"/>
  <title>Microblog</title>
</head>
<body>
  <div class="top-section">
    <header>
      <div class="brand">
        <h1></h1>
        <ul class="menu">
          <li><a href="index.php">home</a></li>
          <li><a href="about.php">contact</a></li>
        </ul>
      </div>

    </header>

    <div class="title">
      <div class="title-content">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing.</h1>
        <p class="title-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Excepturi vitae ab expedita repudiandae officia, impedit consequatur, distinctio
          nisi soluta inventore dolor quos, esse numquam temporibus nostrum facilis earum.
        </p>
      </div>
      <a href="about.php" id="img"><img src="./img/pp.jpeg" alt=""></a>
    </div>
  </div>

  <?php 
   // mysqli_query($conn,'SELECT * FROM blogposts ORDER BY id DESC');
    $sql = "SELECT * FROM blogposts ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "
        <div class = lower-section>
        <a href='article.php?id=".$row['id']."' class='blog'>
        <h3> ". $row["subject"]. "</h3>
        <p>" . $row["content"]. "</p>
        <div class='details'>
          <p class='author'>Written by :". $row["author"]. "</p>
          <span class='date'>". date("F d"). "</span>
        </div>
        </a>
        </div>
        ";
      }
    }
  ?>

  <!--<div class="lower-section">
    <a href="article.html" class="blog">
      <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, nulla.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Laborum hic maiores fuga, necessitatibus dolore a tenetur doloribus nobis
        consectetur exercitationem veniam dolor, voluptatum neque numquam. </p>
      <div class="details">
        <p class="author">Written by : Daniel Shoo</p>
        <span class="date">May 19</span>
      </div>
      </a>
    </div>-->

  </div>

  <div class="email">
    <p>Never miss a post</p>
    <form class="" action="index.html" method="post">
      <input type="text" name="" placeholder="Your email">
      <button type="submit" id="bbtn">send</button>
    </form>
  </div>

  <footer>
    &copy microblog 2019
  </footer>

</body>
</html>
