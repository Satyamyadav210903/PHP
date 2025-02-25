<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page </title>


    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
    body {
      overflow-x: hidden;
      font-family: "Roboto Slab", "Helvetica Neue", Helvetica, Arial, sans-serif;
      background-color: #000;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin-top: 3%;
      transition: background 2s ease;
    }
                /* ======================== */
        /* 
    Ignore the following styles. They are not important to achieve the effect.
    I'm only using them for looks (overall page background/font styles/centering content).
*/
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000000;
            color: #fff;
            display: grid;
            place-items: center;
        }

        /* ======================== */
        

        .list {
          list-style: none;
          display: flex;
          align-items: center;
          gap: 40px;
        }
        .link {
          position: relative;
          display: inline-block;
          text-decoration: none;
          color: #fff;
          font-weight: 700;
        }

        .link::before,
        .link::after {
            content: '';
            position: absolute;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #00fffc;
            transform: scaleX(0);
            transition: transform 0.25s;
        }

        .link::before {
            top: -3px;
            transform-origin: left;
        }

        .link::after {
            bottom: -3px;
            transform-origin: right;
        }

        .link:hover::before,
        .link:hover::after,
        .active::before,
        .active::after {
            transform: scaleX(1);
        }
         

 
        .name {
          position: absolute;
          top: 70%;
          font-size: 11px;
          color: #00fffc;
          font-weight: 800;
        }



                    /* -- YouTube Link Styles -- */

            #source-link {
            top: 60px;
            }

            #source-link > i {
            color: rgb(94, 106, 210);
            }

            #yt-link {  
            top: 10px;
            }

            #yt-link > i {
            color: rgb(219, 31, 106); 

            }

            .meta-link {
            align-items: center;
            backdrop-filter: blur(3px);
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
            cursor: pointer;  
            display: inline-flex;
            gap: 5px;
            left: 10px;
            padding: 10px 20px;
            position: fixed;
            text-decoration: none;
            transition: background-color 600ms, border-color 600ms;
            z-index: 10000;
            }

            .meta-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .meta-link > i, .meta-link > span {
            height: 20px;
            line-height: 20px;
            }

            .meta-link > span {
            color: white;
            font-family: "Rubik", sans-serif;
            transition: color 600ms;
            }
            .Navigation{
            width: 100%;
            height:70px;
            top: 2px;
            flex-direction: column;
            background: linear-gradient(to right, #bca91a, #3498db);

            border: 2px solid #e6e6e6;
            transform: perspective(950px) translate3d(0px, 0px, -250px) rotateX(27deg) scale(1.1, 1.1);
            transition: 0.4s ease-in-out transform, 0.4s ease-in-out box-shadow;
            }
            .list{
                margin-left: 220px;
            }
            .link{
                margin-top: 20px;
                margin-left: 20px;
            }
            .all{
            width: 80%;
            height: ;
            top: 2px;
            flex-direction: column;
            transform: perspective(950px) translate3d(0px, 0px, -250px) rotateX(27deg) scale(1.1, 1.1);
            transition: 0.4s ease-in-out transform, 0.4s ease-in-out box-shadow;
            }
            .more{
                margin-left: 0%;
            }
        .search__input{
          height: 40px;

        }
        .search__button{
            height: 40px;
            background: linear-gradient(to right, #1abc9c, #3498db);
        }
        .search{
            margin-left: 50px;
            margin-top: 5px;
        }
        .card-group {
            max-width: 1460px;
            display: flex;
            column-gap: 16px;
            padding: 50px;
            overflow-x: hidden;
        }

        .card {
            width: 300px;
            flex: 0 0 300px;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to right, #1abc9c, #3498db);
            padding: 32px;
            box-shadow: -5px 0 16px 32px rgba(0, 0, 0, 0.25);
            position: relative;
            perspective: 1000px;
            border-radius: 20px;
            border: 4px solid #e6e6e6;
            transform: perspective(750px) translate3d(0px, 0px, -250px) rotateX(27deg) scale(0.9, 0.9);
            transition: 0.4s ease-in-out transform, 0.4s ease-in-out box-shadow;
            overflow: hidden;
            position: relative;
        }

        .card:not(:first-child) {
            margin-left: -130px;
        }

        .card:hover {
            transform: translate(-8px, -16px) rotate(3deg);
        }

        .card:hover ~ .card {
            transform: translateX(130px);
        }

        .card:hover {
            transform: translate3d(0px, 0px, -250px);
            box-shadow: 0 20px 40px -10px rgba(32, 195, 187, 0.5);
        }

        .product-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px; /* Adjust this height as needed */
            overflow: hidden;
        }

        .product-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* Keeps the image inside the container */
        }

        .product-name {
            font-weight: bold;
            margin-top: 16px;
            text-align: center;
        }

        .product-price {
            margin-top: 16px;
            text-align: center;
        }

        .product-buttons {
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            padding: 10px;
            z-index: 2;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .add-to-cart {
            background: #e4a110;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #ffffff;
            transition: transform 0.3s, opacity 0.3s;
            transform-origin: center;
            padding: 8px;
            border-radius: 50%;
        }

        .add-to-cart:hover {
            transform: scale(1.2);
            opacity: 0.8;
        }

      
    </style>
</head>
<body>
    
    <div class="Navigation">
        <h2>
        <ul class="list">
            <li><a href="#" class="link">
                Home</a></li>
            <li><a href="#" class="link  ">
                Blogs</a></li>
            <li><a href="#" class="link">
                Services</a></li>
            <li><a href="#" class="link ">
                Contact</a></li>
            <li><a href="#" class="link">
                About</a></li>
            <li class="search"><input class="search__input" id="search" type="text" name="search" placeholder="Search…">
                <button class="search__button" type="submit" name="search-submit" aria-label="Search">
                    <svg class="search__icon" viewBox="0 0 36 36" width="36px" height="30px" aria-hidden="true">
                        <g class="search__icon-g" stroke="currentcolor" stroke-linecap="round" stroke-width="4" transform="translate(6,6)">
                            <ellipse class="search__icon-ellipse" fill="none" cx="9" cy="9" rx="7" ry="7" transform="rotate(45,9,9)" />
                            <line class="search__icon-line1" x1="15" y1="15" x2="21" y2="21" />
                        </g>
                    </svg>
                </button></li>
          </ul>
        </h2>
    </div>


    <div class="all">
        <ul class="more">
            <li><a href="#" class="link">
                More  >></a></li>
          </ul>
    </div>

    
    <div class="card-group">

        <article class="card">
          <div class="product-buttons">
            <button class="add-to-cart">
            <i class="fas fa-cart-plus">
            </i></button>
          </div>
          <div class="product-image">
            <img src="book.jpg"alt="Product 1">
          </div>
          <div class="product-name">JavaScript Programming language book</div>
          <div class="product-price">
            $99.99</div>
        </article>

        <article class="card">
            <div class="product-buttons">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
            </div>
            <div class="product-image">
                <img src="shirt.jpg" alt="Product 2">
            </div>
            <div class="product-name">Red T-shirt for mens</div>
            <div class="product-price">$79.99</div>
        </article>
        <article class="card">
            <div class="product-buttons">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
            </div>
            <div class="product-image">
                <img src="shouse.jpg" alt="Product 3">
            </div>
            <div class="product-name">Mens shouse</div>
            <div class="product-price">$129.99</div>
        </article>
        <article class="card">
            <div class="product-buttons">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
            </div>
            <div class="product-image">
                <img src="watches.jpg" alt="Product 4">
            </div>
            <div class="product-name">Digital Smart Watches</div>
            <div class="product-price">$249.99</div>
        </article>
    </div>




    <div class="all">
        <ul class="more">
            <li><a href="#" class="link">
                More  >></a></li>
          </ul>
    </div>




    <div class="card-group">

        <article class="card">
          <div class="product-buttons">
            <button class="add-to-cart">
            <i class="fas fa-cart-plus">
            </i></button>
          </div>
          <div class="product-image">
            <img src="mobile.jpg"alt="Product 1">
          </div>
          <div class="product-name">Mobile Phone</div>
          <div class="product-price">
            $799.99</div>
        </article>

        <article class="card">
            <div class="product-buttons">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
            </div>
            <div class="product-image">
                <img src="dress.jpg" alt="Product 2">
            </div>
            <div class="product-name">Ladies Dress</div>
            <div class="product-price">$79.99</div>
        </article>
        <article class="card">
            <div class="product-buttons">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
            </div>
            <div class="product-image">
                <img src="laptop.jpg" alt="Product 3">
            </div>
            <div class="product-name">HP laptop i7</div>
            <div class="product-price">$1129.99</div>
        </article>
        <article class="card">
            <div class="product-buttons">
                <button class="add-to-cart"><i class="fas fa-cart-plus"></i></button>
            </div>
            <div class="product-image">
                <img src="bag.jpg" alt="Product 4">
            </div>
            <div class="product-name">School Bag</div>
            <div class="product-price">$49.99</div>
        </article>
    </div>





    <!-- Include Font Awesome JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
</body>
</html>