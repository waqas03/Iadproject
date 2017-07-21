<?php

/* @var $this yii\web\View */

$this->title = 'IAD PROJECT';
?>
<style >
    
.sidebar{
    list-style-type: none;
     color: white;
    text-align: center;
    padding: 50px;
    margin-left: 0px;
    margin-top: 0px;



}
 
   .sidebar_title{
       
       background: #FFF;
       color: #000;
       padding: 10px;
       font-size:33px;
       text-align: center;
   }
       .left_sidebar {
       width:250px;
       height: 400px;
       background: black;
       float: left;
       margin-left: -130px;
       margin-top: -30px;
      }
     .sidebar li{

        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;

        list-style-type: none;
        color: white;
        font-size: 20px;
        margin-left: -15px;

      }
      #head_bar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f6cf46;
  
}

li.head_bar {
    float: left;
  
}

li.head_bar a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  list-style : none;
  margin : 0px;
}

li.head_bar a:hover {
    background-color: #111;
  display : inline-block;
  font-weight: bolder;
}




.login {
  
  margin-left : 1400px;
  margin-top : -55px;
}
#form{
  
  float: right;
  line-height: 25px;
  padding-right: 5px;
  margin-top: 0.4%
  
}


.loginedit{
  background-color : #f6cf46;
  margin-bottom : -100px;
  height : 400px;
  width : 500px;
  padding : 30px;
  margin-left : 260px;
  margin-top : -30px;
  border-radius : 5%;
  
  
}
ul.dropdown {
  list-style : none;
  color: white;
    text-align: center;
    padding: 14px 12px;
    text-decoration: none;
  display : none;
  list-style : none;
  margin : 0px;
}
.head_bar li  a:hover  .dropdown   {

  display : inline-block;
  text-align : center;
}
 .dropdown li {
   
   margin : 10px;
 }
 
 
 .dropdown li a:hover {
   display: block;
 }
 .content_wrapper{
   
   width:1330px;
   height: 500px;
   background: #F96;
   position: relative;
   margin-top: -65px;
   margin-left: -163px;
 }
 #right_content {
    width: 1080px;
    height: 578px;
    background: #ffe6e6;
    float: right;
}
 #left_sidebar {
    width: 250px;
    height: 578px;
    background: black;
    float: left;
}

    .footer {
    width: 100%;
    height: 50px;
    background: #f6cf46;
    color: #FFF;
    clear: both;
    text-align: center;
    padding-top: 125px;
    height: 160px;
    /* margin-left: -189px; */}

   
   #sidebar_title{
     
     background: #FFF;
     color: #000;
     padding: 10px;
     font-size: 22px;
     text-align: center;
     
   }
   #mango{
     
     text-align: center;
     padding: 10px;
     
   }
   #mango li {
     list-style:none;
     margin: 7px;
     }
    
  #mango a {
    
    color: #FFF;
    font-size: 18px;
    text-decoration:none;
    margin: 5px;
    padding: 10px;
  }
     
   #mango a:hover {
     
     color: #F93;
     text-decoration:underline;
     font-weight: bolder;
     
     
   }




</style>
<div class="site-index" >

    <div class="jumbotron">
        
     
   

    <div class="body-content">

     
       <div class="content_wrapper">
      
    <div id="left_sidebar">

         <div id="sidebar_title"> Categories</div>
      <ul id="mango">
      <li><a href="http://localhost/basic/web/index.php?r=featured%2Findex">Featured phones</a></li>
       <li><a href="http://localhost/basic/web/index.php?r=android%2Findex"> Android phones</a></li>
        <li><a href="http://localhost/basic/web/index.php?r=windows%2Findex">Windows phones</a></li>
         <li><a href="#">4G phones</a></li>
          </ul>
      <div id="sidebar_title"> Brands</div>
       <ul id="mango">
       
       <li><a href="http://localhost/basic/web/index.php?r=nokia%2Findex">Nokia</a></li>
       <li><a href="http://localhost/basic/web/index.php?r=samsung%2Findex"> Samsung</a></li>
        <li><a href="http://localhost/basic/web/index.php?r=sony%2Findex">Sony</a></li>
         <li><a href="http://localhost/basic/web/index.php?r=iphone%2Findex">Iphone</a></li>
           <li><a href="http://localhost/basic/web/index.php?r=infinix%2Findex">Infinix</a></li>
        
      
      
      </ul>



    </div>
    <div id="right_content"> 

   <img src="s4.jpg" style="margin-top: 20px; margin-left: -100px;" />
     <a href="http://localhost/basic/web/index.php?r=iphone%2Fview&id=Apple+iphone+8" <img src="i7.jpg" style="padding-left: 60px; margin-top: 20px;" />
      <img src="i7.jpg" style="margin-right: -100px; padding-left: 50px; margin-top: 20px;" />
      <img src="3.jpg" style="padding-left: 30px; margin-right: -300px; margin-left: 120px;" />
      <img src="3.jpg" style="padding-left: 30px; margin-right: -300px; margin-left: 320px;" />
      <img src="i7.jpg" style="margin-right: -100px; padding-left: 50px; margin-top: 20px; margin-left: 340px;" />

<div class="row">
      <img src="s4.jpg" style="margin-top: 30px; margin-left: -100px;" />
      <img src="i7.jpg" style="padding-left: 60px; margin-top: 30px;" />
      <img src="i7.jpg" style="margin-right: -100px; padding-left: 50px; margin-top: 30px;" />
      <img src="3.jpg" style="padding-left: 30px; margin-right: -300px; margin-left: 120px; margin-top: 30px; " />
      <img src="3.jpg" style="padding-left: 30px; margin-right: -300px; margin-left: 320px; margin-top: 30px; " />
      <img src="i7.jpg" style="margin-right: -100px; padding-left: 50px; margin-top: 30px; margin-left: 340px;" />
       
</div>
   
   
   </div>
     
     
     </div>
   
      <!--    <div class="footer">
     <h1> &copy; 2017-By www.Mobileworld.com</h1>



     </div>    
 -->
            
           
            
      
    </div>
</div>
