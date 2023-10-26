<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 <h1>CSM Computer Science</h1>

    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="gallery.html">Gallery</a></li> 
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </nav>

    <button onclick="toggleMenu()">Toggle Menu</button>

  </header>

  <script>
  function toggleMenu() {
    document.querySelector('nav').classList.toggle('open'); 
  }
  </script>
</body>
</html>