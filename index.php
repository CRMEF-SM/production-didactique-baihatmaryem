
    <!DOCTYPE html> 
    <html>
      <head>
        <meta name="referrer" content="no-referrer" />
        <title>Votre tuteur en ligne </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <meta property="og:title" content="Small-Talk" />
        <meta
          property="og:description"
          content="Allow your app to engage in small talk about a variety of topics."
        />
        <meta property="og:locale" content="en" />
        <meta property="og:image" content="" />
  
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
          body {
  background-image: url(https://www.fit.ac.jp/files/bgeditor/img/3931__cGljdC1rb3VnYWt1LW12.jpg);
}
          @-moz-keyframes blink {
            0% {
              opacity: 2;
            }
            50% {
              opacity: 1;
            }
            100% {
              opacity: 1;
            }
          } /* Firefox */
          @-webkit-keyframes blink {
            0% {
              opacity: 1;
            }
            50% {
              opacity: 0;
            }
            100% {
              opacity: 1;
            }
          } /* Webkit */
          @-ms-keyframes blink {
            0% {
              opacity: 1;
            }
            50% {
              opacity: 0;
            }
            100% {
              opacity: 1;
            }
          } /* IE */
          @keyframes blink {
            0% {
              opacity: 1;
            }
            50% {
              opacity: 0;
            }
            100% {
              opacity: 1;
            }
          } /* Opera and prob css3 final iteration */
  
           
       
        
          h1 {
            font-family: "Montserrat", sans-serif;
  display: block;
  font-size:3em;
  margin-top: 0em;
  margin-bottom:0em;
  margin-left: 7em;
  margin-right: 7em;
  color : white;
   }  
   container p-5 my-5, iframe { margin-top:0em;}
   * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family:  'Roboto', sans-serif;
  }
html, body , nav {
    font-family: 'Roboto', sans-serif;
}
.navbar .navbar-brand {
    font-weight: bolder;
}
.navbar .navbar-brand span {
    font-weight: lighter;
}
.navbar .navbar-nav .current .btn-outline-primary {
    color: white;
    border-color: white;
  
}
.navbar.navbar-dark .navbar-nav.mx-auto .nav-link {
    transition: ease 0.3s; 
    color: white;
}
.navbar.navbar-dark .navbar-nav.mx-auto .nav-link:hover {
    transition: ease 0.3s;
    opacity: 0.5;
}
.icons{
    position: relative;
    width: 40px;
    height: 40px;
   /* left: 10px;
    top: 1px;*/
}
.library{
    font-style: normal;
    font-weight: 200;
    font-size: 35px;
    line-height: 10px;
    color: #ffffff;
    position: relative;
    
}
.align{
  
    font-style: normal;
    font-weight: 90;
    font-size: 23px;
    line-height: 10px;
    position: relative;
}
.animation{
  position: relative;
    animation: mymove 5s infinite;
}
@keyframes mymove {
  from {left: 0px;}
  to {left: 1800px;}
}
 
          
        </style>
      </head>
      <body>
      <div class ="animation">
      <img src ="https://cdn.kommunicate.io/kommunicate/avatar/pepper.png"  class="icons">
      </div>
  <h1 class="w3-text-white" style="text-align:center">Posez votre question à votre tuteur</h1>
</div>
        <div class="container p-1 my-1  ">     
                  <iframe   align-items= "center" width="95%" height="400"    src="https://widget.kommunicate.io/chat?appId=1b1837d4ffbff7c66a2e0b915cb4fc436"
                  allow="microphone; geolocation;">
                  
        </div> 
      </body>
    </html>
