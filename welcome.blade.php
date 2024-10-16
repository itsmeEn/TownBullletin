<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <style>
      html, body {
        height: 100%;
        margin: 0; 
      }

      body {
        color: #fff;
        font-family: sans-serif;
        font-size: 1.25rem;
        line-height: 150%;
      }

      h3 {
        font-size: 2rem; 
        margin: 0; 
        text-align: left;
      }

      .left-half {
        background-color: white;
        padding: 2rem; 
        display: flex;
        justify-content: center; 
        align-items: center;
      }

      .right-half {
        background-color: black;
        color: rgb(252, 250, 250);
        display: flex;
        flex-direction: column; 
        justify-content: center; 
        text-align: justify; 
        align-items: flex-start; 
        padding: 2rem;
      }
      img {
        max-width: 80%; 
        height: auto;
      }
      .btn {
        display: flex;
        justify-content: center;  
        align-items: center; 
        width: 100%;  
        margin-bottom: 1.5rem;
      }

      button {
        background-color: white;
        color: black;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 0.25rem;
        cursor: pointer;
        width: 50%; 
        text-align: center;
      }
      .Contact {
        margin-top: 1rem;
        text-align: left;
      }

      .Contact i {
        margin-right: 10px;
        font-size: 1.5rem;
        display: inline-flex;
        gap: 10px;
        flex-direction: initial;
      }

      .Contact p {
        margin-bottom: 0.5rem;
      }
     
    </style>
  </head>
  <body>
    <div class="row g-0" style="height: 100vh;"> 
      <div class="col-6 left-half"> 
        <img src="{{URL('/images/TownLogo.png')}}" alt="logo">
      </div>
      <div class="col-6 right-half"> 
        <h3>WELCOME ~</h3>
        <p>Stay informed with the latest scoop in your town. Our platform provides the latest news, upcoming events, school announcements, and a thriving community forum.</p>
        <div class="btn">
        <button type="submit">Create Account</button>
        </div>

        <div class="Contact">
          <p>Contact Us</p>
          <div class="Contact-icons">
            <i class="bi bi-envelope-at-fill"></i>
            <i class="bi bi-telephone-fill"></i>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>