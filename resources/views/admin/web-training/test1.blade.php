<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.min.css" integrity="sha512-DcHJLWkmfnv+isBrT8M3PhKEhsHWhEgulhr8m5EuGhdAG9w+vUyjlwgR4ISLN0+s/m4ItmPsTOqPzW714dtr5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Intro Js Image Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .imgparent {
            height: 100vh;
            width: 100vw;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .imgparent img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }

        .divImage {
            background-color: red;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div class="divImage" height="<?php echo $wTassets[0]->height ?>px" width="<?php echo $wTassets[0]->width ?>px" style="top:<?php echo $wTassets[0]->longitude ?>px;position:absolute;left:<?php echo $wTassets[0]->latitude ?>px;">
    </div>
    <div class="imgparent">
        <img src="{{ asset('dist/img/edit profile.jpg') }}" alt="image" />
    </div>

    <!-- <img src="{{URL::to($wTassets[0]->image)}}" class="dyImage" alt="image" /> -->
    <!-- For testing JCROP coordinates -->
    <!-- <div style="height:64px;width:202px;background-color:red;position:absolute;top:10px;left:44px;"> -->

    <!-- </div> -->

    <!-- <div class="container">
        <div class="row">
            <div class="card" data-intro="Hello World" data-title="this is testing" style="width:400px">
                <img class="card-img-top" src="img_avatar1.png" data-intro="Hello World" data-title="this is testing" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title" data-intro="Hello World" data-title="this is testing">John Doe</h4>
                    <p class="card-text" data-intro="Hello World" data-title="this is testing">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    </div> -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.min.js" integrity="sha512-VTd65gL0pCLNPv5Bsf5LNfKbL8/odPq0bLQ4u226UNmT7SzE4xk+5ckLNMuksNTux/pDLMtxYuf0Copz8zMsSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script>
    introJs().setOptions({
        showProgress: true,
  steps: [{
    element:document.querySelector('.card'),
    title: 'Welcome',
    intro: 'Hello World! 👋'
  },
  {
    element: document.querySelector('.card-img-top'),
    title:'This is image',
    intro:'Hi Image'
  },
  {
    element: document.querySelector('.card-body'),
    intro: 'This step focuses on an element',
    title:'This is overall body of the card',
  }]
}).start();
</script> -->

</html>