@extends('layouts.layout')

@section('content')

<style>
    body{
        font-family: "Bahnschrift", sans-serif;
    }
    .profile{
        text-align: center;
        margin-top: 200px;
    }
    #pdiv{
        background-color: rgb(232, 240, 231);;
        margin: 0 auto;
        padding: 150px;
        text-align: center;
        font-size: 40px;
    }
    #pdivv{
        background-color: white;
        margin: 0 auto;
        padding: 120px;     
        text-align: center;
        font-size: 40px;
    }
    #divbg{
        padding: 5px;
        display: flex;
    }
    #divgallery{
        text-align: center;
        width: 300px;
        margin-left: 100px;
        transition: .3s;
    }
    #divgallery:hover{
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
    #divgallery img{
        padding: 5px;
    }
    #divtext{
        padding: 5px;
    }
    #divbgsocial{
        background-color: rgba(197, 229, 236, 0.87);
        display: flex;
    }
    #divsocial{
        text-align: center;
        width: 300px;
        margin-left: 70px;
        padding: 30px;
    }
    #divsocial img{
        padding: 0;
    }
    #divtext1{
        margin-bottom: 20px;
        text-align: start;
    }
    #divimage{
        text-align: start;
    }
    #divimage img{
        position: relative;
        top: 25px;
    }
    #divimage p{
        position: relative;
        left: 25px;
        bottom: 12px;
    }
    #psocial{
        display: flex;
        background-color: rgba(197, 229, 236, 0.87);
        padding: 30px;
        margin: 0px;
        text-align: center;
        font-size: 50px;
    }
    #pimg{
        margin-top: 70px;
        margin-left: 300px;
    }
    #footer{
        font-size: 15px;
        display: flex;
        align-items: center;
        margin-left: 20px;
        padding: 10px;
    }
    #border{
        background-color: rgb(17, 204, 204);
    }
    </style>
    
<body>
    <!--Preloader start-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--Preloader end-->

    <!--Main wrapper start-->

        <!--Content body start-->
        <div class="content-body">
            <img src="image/image.webp" style="width: 100%;" height="400px">

            <div>
                <p id="pdiv">Welcome To Mahabang Parang<br> Waterworks Cooperative</p>
            </div>
    
        <div id="divbg">
            <div id="divgallery">
                <a target="_blank" href="image/image1.png">
                    <img src="image/image1.png" width="290" height="182">
                </a>
                <div>
                    <p id="divtext">A self-contained unit of a discourse in writing with a particular point or idea.<br>
                    A paragraph consists of one or more sentences. Though not required by the syntax of any language,<br>
                    paragraphs are usually an expected part of formal writing, used to organize longer prose.
                    </p> 
                </div>
            </div>
    
            <div id="divgallery">
                <a target="_blank" href="image/image2.png">
                    <img src="image/image2.png" width="290" height="182">
                </a>
                <div>
                    <p id="divtext">A self-contained unit of a discourse in writing with a particular point or idea.<br>
                    A paragraph consists of one or more sentences. Though not required by the syntax of any language,<br>
                    paragraphs are usually an expected part of formal writing, used to organize longer prose.
                    </p> 
                </div>
            </div>
    
            <div id="divgallery">
                <a target="_blank" href="image/image3.png">
                    <img src="image/image3.png" width="290" height="182">
                </a>
                <div>
                    <p id="divtext">A self-contained unit of a discourse in writing with a particular point or idea.<br>
                    A paragraph consists of one or more sentences. Though not required by the syntax of any language,<br>
                    paragraphs are usually an expected part of formal writing, used to organize longer prose.
                    </p> 
                </div>
            </div>	
        </div>
            
        <div id="divbg">
            <div id="divgallery">
                <a target="_blank" href="image/image1.png">
                    <img src="image/image1.png" width="290" height="182">
                </a>
                <div>
                    <p id="divtext">A self-contained unit of a discourse in writing with a particular point or idea.<br>
                    A paragraph consists of one or more sentences. Though not required by the syntax of any language,<br>
                    paragraphs are usually an expected part of formal writing, used to organize longer prose.
                    </p> 
                </div>
            </div>
    
            <div id="divgallery">
                <a target="_blank" href="image/image2.png">
                    <img src="image/image2.png" width="290" height="182">
                </a>
                <div>
                    <p id="divtext">A self-contained unit of a discourse in writing with a particular point or idea.<br>
                    A paragraph consists of one or more sentences. Though not required by the syntax of any language,<br>
                    paragraphs are usually an expected part of formal writing, used to organize longer prose.
                    </p> 
                </div>
            </div>
    
            <div id="divgallery">
                <a target="_blank" href="image/image3.png">
                    <img src="image/image3.png" width="290" height="182">
                </a>
                <div>
                    <p id="divtext">A self-contained unit of a discourse in writing with a particular point or idea.<br>
                    A paragraph consists of one or more sentences. Though not required by the syntax of any language,<br>
                    paragraphs are usually an expected part of formal writing, used to organize longer prose.
                    </p> 
                </div>
            </div>	
        </div>
</body>
@endsection
