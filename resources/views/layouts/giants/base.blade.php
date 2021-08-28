<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
       <meta charset="utf-16">  
       <meta htt-equiv="X-UA=Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       
       <meta name="csrf-token" content="{{csrf_token() }}">
       
       <script src="{{ secure_asset('js/app.js') }}"defer></script>
       
       <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap" rel="stylesheet">
       <style>
                html, body {
                    background-color: #FF9900;
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
    
                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }
               
                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 25px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }
    
                .m-b-md {
                    margin-bottom: 70px;
                }
            </style>
            
  </head>