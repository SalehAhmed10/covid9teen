
<style type = "text/css">

    html{   
        scroll-behavior: smooth;
    }
    body{
        width: 100%;

    }

    *{  
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
    }

     /** nav-bar start */ 

    .nav_style{
            
            background-color: #a29bfe;
            padding-right: 5%;
            padding-left: 5%;
    }

    .nav nav-hamburger{
        border-color: transparent;
        background-color: transparent;
    }

    .navbar-toggler:focus{
        box-shadow:none;
    }

    .navbar-toggler:hover{
        color: black;
    }
    .nav_style a{ 
        color: whitesmoke;
        
    }

    .nav_style a:hover {
        color: black;
}

    ul.dropdown-menu a{
         color: black;
    }

    ul.dropdown-menu a:focus{
         background-color: grey;
    }

    .nav-link:hover {
        color: black;
}

    .nav-link:focus{
        color: whitesmoke;
    }   
   
 /** nav-bar end */   
    
 /** Corona Update  **/

    .corona_update{
        padding-top: 60px;
        padding-bottom: 60px;
        overflow: hidden;
        
       
    }

    .corona_update h3{ 
        color: #ff7675;
    }

    

    .corona_update h1{ 
        font-size: 2rem; text-align: center;
    }

    .corona_update p{ 
        text-align: center;
    }


    .corona_update_inner{
        padding: 60px 0 60px 0;
    }
    
    .corona_update_inner div{
        padding: 30px 0 30px 0;
        
    }

    .corona_update_inner div:hover{
        background-color: antiquewhite;
        
    }
    
    
 /** Corona Update  end */  

  /** About sub_section */
    
    .sub_section{
        background-color: #fbfafd;
    }

    .sub_section img{
        
        width: 100%;
        padding: auto 0 auto 0;
    }

    .sub_section p{
        text-align: justify;
        padding: 0%;
    }


    @media only screen and (max-width: 990px) {

    .sub_section img{
        margin-bottom: 50px;
    };


}

  /** About sub_section end*/


    /**** Sypmtoms */
    .symp img{
        height: 20%;
        width: 20%;
        padding: 15px 0 15px 0;

    }

    
    @media only screen and (max-width: 990px) {
     .symp img {
        height: 25%;
        width: 20%;
  }

}


/**** Symptoms */ 

/**** Prevention */

    .prev img{
        height: 40%;
        width: 40%;
        padding: 15px 0 15px 0;

    }

    @media only screen and (max-width: 760px) {
     .prev img {
        height: 25%;
        width: 20%;
  }
    .prev p{
        text-align: center;
    };
}


    @media only screen and (max-width: 770px) {
        
        .prev img {
            height: 15%;
            width: 15%;
            
    }

    }

/**** Prevention */



 /**** Foooter */

  /**** Foooter end */
</style>