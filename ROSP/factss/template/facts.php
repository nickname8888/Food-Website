<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="../../../css/blood.css">
    <title>Recipes</title>

    <style>
        .f_heading{
            border: 0px solid black;
            position: relative;
            text-align: center;
            background-color: grey;
            color: white;
            font-size: 25px;
            height: 50px;
            padding-top: 5px;
            font-weight: bold;
            font-family: inherit;
        }
        .f_list1{
            border: 0px solid black;
            height: 591px;
            width: 22%;
            float: left;
            background-color: #ccfff3;
        }

        .factsB1{
        border:solid  black 1px;
        width: 100%;
        height: 73.87px; 
        text-align: center;
        padding-top: 20px;
        border-top: none;
        border-right:solid red 3px;
        }
        .factsB1 a{
            border: 0px solid red;
            text-decoration: none;
            font-size: 17px;
            padding: 27px 50px 27px 27px;
            color: black;   
        }
        .factsB2{
        border:solid  black 1px;
        width: 100%;
        height: 73.87px; 
        text-align: center;
        padding-top: 20px;
        }
        .factsB2 a{
            border: 0px solid red;
            text-decoration: none;
            font-size: 17px;
            padding: 10px 50px 20px 20px;
            color: black;
        }

        .factsB3{
        border:solid  black 1px;
        width: 100%;
        height: 73.87px; 
        text-align: center;
        padding-top: 20px;
        }
        .factsB3 a{
            border: 0px solid red;
            text-decoration: none;
            font-size: 17px;
            padding: 20px 10px 25px 10px;
            color: black;
        }

        .factsB4{
        border:solid  black 1px;
        width: 100%;
        height: 73.87px; 
        text-align: center;
        padding-top: 20px;
        }
        .factsB4 a{
            border: 0px solid red;
            text-decoration: none;
            font-size: 17px;
            padding: 22px 27px 27px 27px;
            color: black;
        }

        .factsB5{
        border:solid  black 1px;
        width: 100%;
        height: 73.87px; 
        text-align: center;
        padding-top: 20px;
        }
        .factsB5 a{
            border: 0px solid red;
            text-decoration: none;
            font-size: 17px;
            padding: 27px 50px 27px 27px;
            color: black;
        }

        .factsB6{
        border:solid  black 1px;
        width: 100%;
        height: 73.87px; 
        text-align: center;
        padding-top: 20px;
        }
        .factsB6 a{
            border: 0px solid red;
            text-decoration: none;
            font-size: 17px;
            padding: 27px 50px 27px 27px;
            color: black;
        }

        .factsB7{
        border:solid  black 1px;
        width: 100%;
        height: 73.87px; 
        text-align: center;
        padding-top: 20px;
        }
        .factsB7 a{
            border: 0px solid red;
            text-decoration: none;
            font-size: 17px;
            padding: 27px 50px 27px 27px;
            color: black;
        }

        .factsB8{
        border:solid  black 1px;
        width: 100%;
        height: 73.87px; 
        text-align: center;
        padding-top: 20px;
        border-bottom: none;
        }
        .factsB8 a{
            border: 0px solid red;
            text-decoration: none;
            font-size: 17px;
            padding: 27px 50px 27px 27px;
            color: black;
        }

        .f_list2{
            border: 0px solid black;
            height: 591px;
            width: 78%;
            float: right;
            background-color: white;
        }

        .redmark{
            margin-left: 10px;
            margin-top: 10px;
            color: red;
            font-size: 18px;
        }
        .content{
            /* border: 1px solid black; */
            height: 500px;
            /* padding: 5px; */
            padding: 30px;
        }
        .highlight{
        border:solid  black 0px;
        /* width: 322.5px; */
        width: 100%;
        padding:13px;
        border-bottom: solid black 2px;
        background-color: rgb(230 230 230);;
        border-right:solid red 4px;
    }
    .highlight:hover{
        /* font-size: 20px; */
        text-decoration: underline;
        background-color: rgb(230, 230, 230);
        /* border-right:solid red 4px; */
    }
    .hme{
        width: 100%;
        display: flex;
        position: absolute;
    }
    .hme p{
        margin-left: auto;
        margin-right: 0;
    }
    .hme p a{
        text-decoration: none;
        font-family: 'Courier New', Courier, monospace;
        font-size: 1.5em;
        font-weight: 500;
        color: black;
    }
    .hme p a:hover{
        text-decoration: underline;
        
    }
    </style>
</head>
<body>
    <div class="f_heading">
        <p>Recipes</p>
    </div>
    <div class="hme">
        <p><a href="../index.html">HOME</a></p>
    </div>
    <div class="f_list1">

        <div class="factsB1
        <?php if ($cont == "facts1")
                {echo "highlight";}?>">
            <a href="/Food-Website/ROSP/factss/fact1.php#section" >Paneer Fried Rice Recipe</a>
        </div>

        <div class="factsB2 
        <?php if ($cont == "facts2")
                {echo "highlight";}?>">
            <a href="/Food-Website/ROSP/factss/fact2.php#section" >Chili Cheese Noodles</a>
        </div>
        
        <div class="factsB3
        <?php if ($cont == "facts3")
                {echo "highlight";}?>">
            <a href="/Food-Website/ROSP/factss/fact3.php#section" >Banana Coconut Smoothie</a>
        </div>
        
        <div class="factsB4
        <?php if ($cont == "facts4")
                {echo "highlight";}?>">
            <a href="/Food-Website/ROSP/factss/fact4.php#section" >Purple Margarita</a>
        </div>
        
        <div class="factsB5
        <?php if ($cont == "facts5")
                {echo "highlight";}?>">
            <a href="/Food-Website/ROSP/factss/fact5.php#section" >Bread Pizza</a>
        </div>
        
        <div class="factsB6
        <?php if ($cont == "facts6")
                {echo "highlight";}?>">
            <a href="/Food-Website/ROSP/factss/fact6.php#section" >Coconut Truffles</a>
        </div>
        
        <div class="factsB7
        <?php if ($cont == "facts7")
                {echo "highlight";}?>">
            <a href="/Food-Website/ROSP/factss/fact7.php#section" >Tomato Sandwich</a>
        </div>
    
        <div class="factsB8
        <?php if ($cont == "facts8")
                {echo "highlight";}?>">
            <a href="/Food-Website/ROSP/factss/fact8.php#section" >Cripsy Corn</a>
        </div>
    </div>
    <div class="f_list2">
        <div class="redmark">
            <p>Pamper your Taste buds by Subscribing to us</p>
        </div>
        
        <div class="content">
             <?php 
            // function content(){
            //  include 'fact1.php';} 
              echo $content ?>
        </div>
    </div>
</body>
</html>