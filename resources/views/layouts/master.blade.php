<! DOCTYPE html>
<html lang ="ja">
  <head>
     <meta cherset="utf-16">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
     <title>[NPB]リアルタイム選手データベース</title>
     
       <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
    
          <style>
              html, body {
                  background-color: #fff;
                  color: #000000;
                  font-family: 'Kiwi Maru', serif;
                   
              }
              
               .content {
                  text-align: center;
                  }
              
              .title {
                  font-size: 30px;
    
              }
  
              .full-height {
                  height: 100vh;
              }
  
              .flex-center {
                  align-items: center;
                  display: flex;
                  justify-content: center;
              }
  
              .position-ref {
                  position: relative;
              }
  
              .top {
                  position: absolute;
                  right: 700px;
                  top: 300px;
              }
  
             
              .links > a {
                  color: #636b6f;
                  padding: 0 25px;
                  font-size: 30px;
                  font-weight: 600;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
              }
  
              .m-b-md {
                  margin-bottom: 200px;
                  position: relative;
                 
              }
          </style>
  </head>
  <body>
    @yield('content');
  </body>
</html>
