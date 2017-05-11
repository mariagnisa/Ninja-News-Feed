<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ninja News Feed</title>
  <link rel="stylesheet" type="text/css" href="ninja.css">
  <meta name="viewport" content="width=device-width"/>
</head>

<body>
  <?php

  $user= [
    ['fullName'=> 'Maria Gustafsson', 'userId'=> '1'],
    ['fullName'=> 'Tarja Larsson', 'userId'=> '2'],
    ['fullName'=> 'Elin Karlsson', 'userId'=> '3'],
    ['fullName'=> 'Alex Nilsson', 'userId'=> '4'],
    ['fullName'=> 'Gustav Svensson', 'userId'=> '5']
  ];

  //A post is connected to a certain user based on the userId, which is the author of the post.
  $post=[
    ['title'=> 'Dagens visa', 'textContent'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius mi eget libero vehicula viverra. Nam mauris neque, mollis vel enim sit amet, commodo gravida ipsum. Morbi eget dignissim felis, eu molestie nisi. Duis sodales leo non imperdiet molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris tincidunt, est sed laoreet pretium, lorem diam fermentum metus, ut ornare elit nisl id justo. Maecenas mattis sapien dolor, sit amet dignissim est tristique quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium turpis neque, eget imperdiet magna mattis ac. Etiam nec ex dolor. Proin et arcu rhoncus est laoreet aliquam eget id enim.',
    'author'=> '1', 'date'=> '2016/10/05', 'like'=> 8],
    ['title'=> 'Dagens vers', 'textContent'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius mi eget libero vehicula viverra. Nam mauris neque, mollis vel enim sit amet, commodo gravida ipsum. Morbi eget dignissim felis, eu molestie nisi. Duis sodales leo non imperdiet molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris tincidunt, est sed laoreet pretium, lorem diam fermentum metus, ut ornare elit nisl id justo. Maecenas mattis sapien dolor, sit amet dignissim est tristique quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium turpis neque, eget imperdiet magna mattis ac. Etiam nec ex dolor. Proin et arcu rhoncus est laoreet aliquam eget id enim.', '
    author'=> '1', 'date'=> '2016/04/05', 'like'=> 75],
    ['title'=> 'Tankar', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '1', 'date'=> '2016/08/05', 'like'=> 58],
    ['title'=> 'Dagar', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '1', 'date'=> '2016/06/05', 'like'=> 35],
    ['title'=> 'Dagens poesi', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '1', 'date'=> '2016/07/05', 'like'=> 258],
    ['title'=> 'PHPs grundpelare', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '2', 'date'=> '2016/05/05', 'like'=> 587],
    ['title'=> 'Nästa lösning', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '2', 'date'=> '2016/01/05', 'like'=> 354],
    ['title'=> 'Middagsplaner', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '2', 'date'=> '2016/02/05', 'like'=> 34],
    ['title'=> 'Undran', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '2', 'date'=> '2016/03/05', 'like'=> 38],
    ['title'=> 'Förfrågan', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '2', 'date'=> '2016/02/15', 'like'=> 345],
    ['title'=> 'Vadan detta?', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '3', 'date'=> '2016/10/02', 'like'=> 35],
    ['title'=> 'Hurså?', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '3', 'date'=> '2016/05/06', 'like'=> 96],
    ['title'=> 'Stylingstips?', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '3', 'date'=> '2016/04/12', 'like'=> 34],
    ['title'=> 'Dagens ord', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '3', 'date'=> '2016/02/20', 'like'=> 58],
    ['title'=> 'Mumin', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '4', 'date'=> '2016/08/30', 'like'=> 74],
    ['title'=> 'Diverse tankar', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '4', 'date'=> '2016/07/02', 'like'=> 369],
    ['title'=> 'Varför', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '4', 'date'=> '2016/03/06', 'like'=> 78],
    ['title'=> 'Javascript kväll', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '4', 'date'=> '2016/05/16', 'like'=> 94],
    ['title'=> 'CSS tips', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '4', 'date'=> '2016/04/07', 'like'=> 37],
    ['title'=> 'Html tips', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '5', 'date'=> '2016/09/17', 'like'=> 48],
    ['title'=> 'Quiz planer?', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '5', 'date'=> '2016/08/09', 'like'=> 25],
    ['title'=> 'Veganskt?', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '5', 'date'=> '2015/11/15', 'like'=> 36],
    ['title'=> 'Nyhetstips', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '5', 'date'=> '2016/08/25', 'like'=> 14],
    ['title'=> 'Husplaner', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '5', 'date'=> '2016/10/10', 'like'=> 85],
    ['title'=> 'Katter', 'textContent'=> 'Cras luctus, nisi consectetur tincidunt maximus, lacus velit semper ipsum, eget gravida turpis velit non elit. Fusce gravida dignissim erat, ut ullamcorper diam aliquet id. Donec dapibus, diam sit amet euismod tempus, massa ante pretium sapien, eu volutpat massa dui vel magna. Duis rutrum imperdiet dolor nec sollicitudin. Praesent vehicula rhoncus suscipit. Pellentesque finibus ut metus id iaculis. Nam tempor turpis non velit ultrices, at tincidunt mi porta. Sed gravida purus ut sapien placerat hendrerit. Pellentesque id fringilla tellus. Donec vitae neque et nunc vestibulum molestie.',
    'author'=> '5', 'date'=> '2016/02/16', 'like'=> 14]
  ];

  //If a user push submit, a new post is created and can be pushed into the $post since $post is already declared.
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $title= $_POST['title'];
      $author= '1';
      $textContent= $_POST['textContent'];
      $date= date("Y/m/d");

    //A new post is created and pushed to the array $post.
    $newPost = ['title'=> $title, 'textContent'=> $textContent,
    'author'=> $author, 'date'=> $date, 'like'=> 0];

      array_push($post, $newPost);
  }

  //Sort by date
  function sortDate($a, $b)
  {
      return $b['date'] <=> $a['date'];
  }
  usort($post, 'sortDate');


  ?>

  <div class="header">
    <h1> Ninja News Feed </h1>
  </div>

  <div id="login">
    <form action="ninja.php" method="post">
      <input type="text" name="name" placeholder="Användarnamn"><br>
      <input type="password" name="password" placeholder="Lösenord">
      <input type="submit" value="Logga in">
    </form>
  </div>

  <div class="wrapper">
    <div class="form">
      <form action="ninja.php" method="post" id="newPost"/>
      <input type="text" name="title" placeholder="Titel" /><br>
      <textarea wrap="physical" placeholder="Skriv dina tankar här" name="textContent"></textarea>
      <input type="submit" name='submit'value="Post"/>
    </form>
  </div>

  <!--Go through $post and print each posts -->
  <?php for ($i=0; $i < sizeOf($post); $i++) {
      ?>
    <div class="post">
      <section class="section">
        <article class="article">
          <h2> <?= $post[$i]['title']?>  </h2>
          <div class="author-wrapper">
            <!--Go through $user and finds the author of the post and print the name and gets the image based on userId.-->
            <?php
            for ($y=0; $y < sizeOf($user); $y++) {
                $author = $user[$y];
                if ($post[$i]['author'] == $author['userId']) {
                    echo '<img src="avatar/avatar_' . $author['userId'] . '.jpg" alt="avatar" />';
                    echo '<div class="name-wrapper"><p>' . $author['fullName'] . '</p></div>';
                }
            } ?>
          </div>
          <p> <?= $post[$i]['textContent']?> </p>
          <p>Publicerat: <?= $post[$i]['date']?> </p>
          <p> <?= $post[$i]['like']?> <em> personer har gillat artikeln.</em></p>
        </article>
      </section>
    </div>
    <?php 
  } ?>


  </div>
</body>
</head>
</html>
