<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>To Do List</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <section class="list">
    <div class="header">
      <h1>To Do List</h1>
    </div>
    <ul class="items">
      <li>
        <span class="item">Read You Don't Know JavaScript - Book 3</span>
        <a href="#" class="done-btn">Mark as done</a>
      </li>
      <li><span class="item done">Study algorithms</span></li>
      <li><span class="item"></span>Listen to Code Newbie podcast</li>
      <li><span class="item">Check job postings</span></li>
      <li><span class="item">Write Medium article</span></li>
      <li><span class="item">Do research - Jest testing</span></li>
    </ul>

    <form class="item-add" action="add.php" method="post">
			<input type="text" class="input" name="name" placeholder="Type a new item here." autocomplete="off" required>
			<input type="submit" value="Add" class="submit-btn">
		</form>
  </section>

  <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyD1WAux9rYcAmOOPEnH2PklZuvn88Y8TQY",
      authDomain: "todo-list-919bc.firebaseapp.com",
      databaseURL: "https://todo-list-919bc.firebaseio.com",
      projectId: "todo-list-919bc",
      storageBucket: "",
      messagingSenderId: "164381019654"
    };
    firebase.initializeApp(config);
  </script>

  <?php
  ?>

</body>

</html>