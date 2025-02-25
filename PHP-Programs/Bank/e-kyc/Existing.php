<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manu Bar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        nav{
            width: 100%;
        }
        .nav{
            background-color: gray;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #content {
            width: 80%;
            margin: auto;
        }
        iframe {
            width: 100%;
            height: 600px;
            border: none;
            display: none;
        }
        .nav-links {
            width: 100%;
            list-style-type: none;
            display: flex;
            align-items: center;
        }

      .nav-links li {
          width: 100%;
          text-align: center;
          margin-right: 9%;
          cursor: pointer;
          background-color: gray;
      }
      ul{
        width: 100%;
      }

    </style>
</head>
<body>

<!-- =========== header part ============= -->

<header class="nav">
    <!-- =========== manu bar ============= -->
    <nav>
        
        <ul class="nav-links">
            <li class="li">Registration</li>
            <li class="li">Personal</li>
            <li class="li">Documentation</li>
            <li class="li">Conformation</li>
            <li class="li">Acknowledgment</li>
        </ul>
    </nav>
    </header>


    <div id="content">
        <iframe id="page1" src="Registration.html" frameborder="0"></iframe>
        <iframe id="page2" src="Personal.html" frameborder="0"></iframe>
        <iframe id="page3" src="Documentation.html" frameborder="0"></iframe>
        <iframe id="page3" src="Confirmation.html" frameborder="0"></iframe>
        <iframe id="page3" src="Ackowledgment.html" frameborder="0"></iframe>
    </div>

    <button onclick="showNextPage()">Next</button>

    <script>
        var currentPage = 1;
        var totalPages = 3;

        function showNextPage() {
            if (currentPage <= totalPages) {
                var currentFrame = document.getElementById('page' + currentPage);
                currentFrame.style.display = 'none';

                currentPage++;

                var nextFrame = document.getElementById('page' + currentPage);
                nextFrame.style.display = 'block';
            }
        }
    </script>
</body>
</html>
