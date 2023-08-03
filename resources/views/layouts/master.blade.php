<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- navigation bar -->
    <div class="navbar bg-gradient-to-r from-purple-300 to-pink-300">
      <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">Queen/King Selections</a>
      </div>
      <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
          <li><a href="leaderboard.html">Latest Results</a></li>
          <li>
            <details>
              <summary>
                View Selections
              </summary>
              <ul class="p-2 bg-base-100">
                <li><a href="preview.html">Queen Selections</a></li>
                <li><a>King Selections</a></li>
              </ul>
            </details>
          </li>
        </ul>
      </div>
    </div>


    @yield('content')



</body>
</html>
