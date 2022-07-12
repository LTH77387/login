<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pure CSS Slider</title>
    <!----CSS link----->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Just+Another+Hand');
body, html{
        width: 100%;
        height: 100%;    
        margin: 0;
        font-family: 'Just Another Hand', cursive;
        overflow-X: hidden;
    }
#i1, #i2, #i3, #i4, #i5{ display: none;}
.container{
        margin: 0 auto;
        margin-top: 50px;
        position: relative;
        width: 80%;
        height: 30%;
        padding-bottom: 38%;
      user-select: none;
        background-color: #1c1c1c;
        border: solid 10px #616161;
        border-radius:10px ; 
    }
    .container .slide_img{
        position: absolute;
        width: 100%;;
        height: 100%;
    }
    .container .slide_img img{
        width: inherit;
        height: inherit;
    }
     .prev, .next{
        width: 12%;
        height: inherit;
        position: absolute;
        top:0; 
        background-color: rgba(88, 88, 88,.2);
        color:rgba(244, 244, 244,.9);
        z-index: 99;
        transition: .45s;
        cursor: pointer;
        text-align: center;
    }
    .next{right:0;}
    .prev{left:0;}
    label span{
        position: absolute;
        font-size: 100pt;
        top: 50%;
         transform: translateY(-50%);
    }
    .prev:hover, .next:hover{
        transition: .3s;
        background-color: rgba(88, 88, 89,.8);
        color: #ffffff; 
    }
.container #nav_slide{
    width: 100%;
    bottom: 12%;
    height: 11px;
    position: absolute;
    text-align: center;
    z-index: 99;
    cursor: default;
}
#nav_slide .dots{
    top: 20px;
    width: 14px;
    height: 14px;
    margin: 0 4px;
    position: relative;
    border-radius: 100%;
    display: inline-block;
    background-color: rgba(0, 0, 0, 0.6);
    transition: .4s;
}
#nav_slide .dots:hover {
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.9);
    transition: .25s
}
.slide_img{z-index: -1;}
    #i1:checked ~ #one  ,
    #i2:checked ~ #two  ,
    #i3:checked ~ #three,
    #i4:checked ~ #four ,
    #i5:checked ~ #five 
    {z-index: 9; animation: scroll 1s ease-in-out;}
    #i1:checked  ~  #nav_slide #dot1,
    #i2:checked  ~  #nav_slide #dot2,
    #i3:checked  ~  #nav_slide #dot3,
    #i4:checked  ~  #nav_slide #dot4,
    #i5:checked  ~  #nav_slide #dot5
    { background-color: rgba(255,255,255,.9);}
@keyframes scroll{
    0%{    opacity:.4;}
    100%{opacity:1;}
}        
@media screen and (max-width: 685px){
    .container{
        border: none;
        width: 100%;
        height: 0;
        padding-bottom: 55%; 
    }    
    
    label span { font-size: 50pt; }
    
    .prev, .next{
        width: 15%;
    }    
    #nav_slide .dots{
        width: 12px;
        height: 12px;
    }
}
@media screen  and(min-width: 970px){
    .me{ display: none;}
}
    </style> 
</head>
<body>
<div class="container">
    
    <input type="radio" id="i1" name="images" checked />
    <input type="radio" id="i2" name="images" />
    <input type="radio" id="i3" name="images" />
    <input type="radio" id="i4" name="images" />
    <input type="radio" id="i5" name="images" />    
    
    <div class="slide_img" id="one">            
            
            <img src="./img/s22 ultra....jpeg">
            
                <label class="prev" for="i5"><span>&#x2039;</span></label>
                <label class="next" for="i2"><span>&#x203a;</span></label>    
        
    </div>
    
    <div class="slide_img" id="two">
        
            <img src="https://preview.ibb.co/e5OShF/cropped_800_480_111290.jpg " >
            
                <label class="prev" for="i1"><span>&#x2039;</span></label>
                <label class="next" for="i3"><span>&#x203a;</span></label>
        
    </div>
            
    <div class="slide_img" id="three">
            <img src="http://wallpaperswide.com/download/up_house-wallpaper-1280x800.jpg">    
            
                <label class="prev" for="i2"><span>&#x2039;</span></label>
                <label class="next" for="i4"><span>&#x203a;</span></label>
    </div>
    <div class="slide_img" id="four">
            <img src="http://wallpaperswide.com/download/big_hero_6_baymax-wallpaper-1152x720.jpg">    
            
                <label class="prev" for="i3"><span>&#x2039;</span></label>
                <label class="next" for="i5"><span>&#x203a;</span></label>
    </div>
    <div class="slide_img" id="five">
            <img src="https://cdn.gobankingrates.com/wp-content/uploads/2019/05/Davao-City-in-the-Phillippines-shutterstock_504042466.jpg">    
            
                <label class="prev" for="i4"><span>&#x2039;</span></label>
                <label class="next" for="i1"><span>&#x203a;</span></label>
    </div>
    <div id="nav_slide">
        <label for="i1" class="dots" id="dot1"></label>
        <label for="i2" class="dots" id="dot2"></label>
        <label for="i3" class="dots" id="dot3"></label>
        <label for="i4" class="dots" id="dot4"></label>
        <label for="i5" class="dots" id="dot5"></label>
    </div>
        
</div>
</body>
</html>