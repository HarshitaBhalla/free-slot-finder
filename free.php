<html>
    <head>

    <title>FREE SLOTS FINDER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    </head>

    <body>

    <style type="text/css">

        body{       
            padding:0;
            margin:0;
        }


        .form{
            background-color:#74b8cc;
            width:auto;
            height:64%;
            display: flex;
            align-items:center;
            justify-content:center;
            font-family: 'Raleway', sans-serif;
        }

        #urname{
            margin-bottom:15px;

        }
        #uploadbtn{
            margin-top:20px;
            margin-left:42%;
        }

        #qwerty{
            margin-top:12%;
        }

        span {
            padding-left:20px; 
            display: grid;
            align-items:center;
            justify-content:center;
        }

        .tatti{
            height : 100%;
            width : 50%;
            padding-top: 8%;
            padding-left: 2%;
            padding-right: 2%;
            display: grid;
            
        }

    </style>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">    
            <p class="display-4" ><span>Free Slot Finder</span></p>
        </div>
    </div>
    
    <div class="form">

        <div class="tatti">

            <form action='upload.php' method='POST' enctype='multipart/form-data'>

            <h5><strong>Name:</strong></h5> 
            <!-- <input type="text" class="urname" name='text'><br> --> 
            <input type="text" name='text' class="form-control" id="urname" placeholder="John Smith">
            
            <input type='file' name='file' class="btn btn-light"><br>
        
            <button type='submit' name='submit' class="btn btn-light" id="uploadbtn">Upload</button>
            <!-- <button type='submit'class="uploadbtn" name='submit'>Upload</button> -->

            </form>
            
        </div>

    </div>
    </div>

    </body>
</html>