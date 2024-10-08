<?php

$quotes = ["The sea's a cruel mistress, but she has her moments.",
"Beware of dragons, for you are crunchy and taste good with ketchup.",
"May your coffee be strong and your Monday be short.",
"Not all who wander are lost, but some are just looking for the snack table.",
"The early bird gets the worm, but the second mouse gets the cheese.",
"A ship in harbor is safe, but that's not what ships are built for.",
"If you think nobody cares if you're alive, try missing a couple of payments.",
"Always remember that you are unique, just like everyone else.",
"Dance like nobody's watching, because they're probably checking their phones.",
"Life's too short to be serious all the time, so if you can't laugh at yourself, call me - I'll laugh at you.",
"The road to success is dotted with many tempting parking spaces.",
"You can't have everything. Where would you put it?",
"When in doubt, make a fool of yourself. There is a microscopically thin line between being brilliantly creative and acting like the most gigantic idiot on earth. So what the hell, leap!",
"I'm not arguing. I'm just explaining why I'm right.",
"The universe is under no obligation to make sense to you."];

$random_key = array_rand($quotes); // array_rand picks random index from array

$random_quote = $quotes[$random_key];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote of the Day</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
 <div class="container text-center mt-5">
  <div class="card">
   <div class="card-body">
    <h1>Quote of the Day</h1>
    <p><?php echo $random_quote; ?></p>  <!-- Embedding the PHP variable in HTML -->
   </div>
  </div>
 </div>
</body>
</html>