<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <title>Feedback | BAKESBANGPOL Sumenep</title>
  <meta property="og:site_name" content="Website | BAKESBANGPOL Sumenep">
  <meta property="og:image" content="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <meta property="og:image:width" content="600">
  <meta property="og:image:height" content="315">
  <meta property="og:locale" content="id_ID">
  <meta property="og:title" content="Website | BAKESBANGPOL Sumenep">
  <meta property="og:description" content="ini deskripsi">
  <meta property="og:type" content="article">
  <meta name="msapplication-TileImage" content="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <meta name="msapplication-TileImage" content="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <meta name="msapplication-TileColor" content="#f4e4d7">
  <meta name="theme-color" content="#f4e4d7">

  <link rel="shortcut icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="apple-touch-icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="apple-touch-icon" sizes="167x167" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png">
  <link rel="icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png" sizes="32x32" />
  <link rel="icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png" />
  <link rel="mask-icon" href="https://sumenepkab.go.id/assets/theme2/img/favicon.png" color="#f4e4d7">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    :root {
      --yellow: #FFBD13;
      --blue: #4383FF;
      --green : #71bc42;
      --darkgreen : hsl(120, 65%, 39%);
      --darkgreen2 : hsl(120, 64%, 32%);
      --blue-d-1: #3278FF;
      --light: #F5F5F5;
      --grey: #AAA;
      --white: #FFF;
      --shadow: 8px 8px 30px rgba(0, 0, 0, .05);
    }

    body {
      background: var(--light);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 1rem;
      background-image: url(../sumenep.jpeg);
      background-size: cover;
      background-repeat: no-repeat;
    }

    .container{
      position: fixed;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.754);
      backdrop-filter: blur(10px);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 1rem;
    }






    .wrapper {
      background: var(--white);
      padding: 2rem;
      max-width: 576px;
      position: relative;
      width: 100%;
      border-radius: .75rem;
      box-shadow: var(--shadow);
      text-align: center;
    }

    .wrapper h3 {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .rating {
      display: flex;
      justify-content: center;
      align-items: center;
      grid-gap: .5rem;
      font-size: 2rem;
      color: var(--yellow);
      margin-bottom: 2rem;
    }

    .rating .star {
      cursor: pointer;
    }

    .rating .star.active {
      opacity: 0;
      animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
    }

    @keyframes animate {
      0% {
        opacity: 0;
        transform: scale(1);
      }

      50% {
        opacity: 1;
        transform: scale(1.2);
      }

      100% {
        opacity: 1;
        transform: scale(1);
      }
    }


    .rating .star:hover {
      transform: scale(1.1);
    }

    textarea {
      width: 100%;
      background: var(--light);
      padding: 1rem;
      border-radius: .5rem;
      border: none;
      outline: none;
      resize: none;
      margin-bottom: .5rem;
    }

    .btn-group {
      display: flex;
      grid-gap: .5rem;
      align-items: center;
    }

    .btn-group .btn {
      padding: .75rem 1rem;
      border-radius: .5rem;
      border: none;
      outline: none;
      cursor: pointer;
      font-size: .875rem;
      font-weight: 500;
    }

    .btn-group .btn.submit {
      background: var(--darkgreen);
      color: var(--white);
      position: absolute;
      right: 25px;
    }

    .btn-group .btn.submit:hover {
      background: var(--darkgreen2);
    }

    .btn-group .btn.cancel {
      background: var(--white);
      color: var(--darkgreen);
    }

    .btn-group .btn.cancel:hover {
      background: var(--light);
    }
  </style>
</head>

<body>
  
  <div class="container">
  <div class="wrapper">
    <h3>BAKESBANGPOL</h3>
    <p>Tolong berikan penilaian atas sistem kami</p>
    <form action="ratingsistem.php" method='post'>
      <div class="rating">
        <input type="number" name="rating" hidden>
        <i class='bx bx-star star' style="--i: 0;"></i>
        <i class='bx bx-star star' style="--i: 1;"></i>
        <i class='bx bx-star star' style="--i: 2;"></i>
        <i class='bx bx-star star' style="--i: 3;"></i>
        <i class='bx bx-star star' style="--i: 4;"></i>
      </div>
      <div class="btn-group">
        <button class="btn cancel">Cancel</button>
        <button type="submit" class="btn submit">Submit</button>
      </div>
    </form>
  </div>
  </div>
  <script>
    const allStar = document.querySelectorAll('.rating .star')
    const ratingValue = document.querySelector('.rating input')

    allStar.forEach((item, idx) => {
      item.addEventListener('click', function() {
        let click = 0
        ratingValue.value = idx + 1

        allStar.forEach(i => {
          i.classList.replace('bxs-star', 'bx-star')
          i.classList.remove('active')
        })
        for (let i = 0; i < allStar.length; i++) {
          if (i <= idx) {
            allStar[i].classList.replace('bx-star', 'bxs-star')
            allStar[i].classList.add('active')
          } else {
            allStar[i].style.setProperty('--i', click)
            click++
          }
        }
      })
    })
  </script>
</body>

</html>