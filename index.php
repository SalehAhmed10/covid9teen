<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> live covid tracker </title>
    <?php include 'includes/links.php'; ?>
    <?php include 'style/style.php';?> 
    <?php include 'style/footer.php';?> 
    

    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.min.css">

</head>
<body onload="fetch()">

<!--navbar-light bg-light-->
<nav class="navbar navbar-expand-lg sticky-top nav_style" id="homeid">
  <div class="container-fluid px-3">
    <a class="navbar-brand" href="index.php">Covid 9-Teen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span> <img src="https://img.icons8.com/material-rounded/24/ffffff/menu--v1.png"/></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 text-capitalize">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sympid">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#previd">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">Contact</a>
        </li>
   <!--
        <li class="nav-item dropdown">
            
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <<li><hr class="dropdown-divider"></li> 
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>-->
      </ul>
    </div>
  </div>
</nav>

<!-- nav end --> 

   <!-- Corna Update-->
    <section class="corona_update container container-fluid">
          <div class="mb3">
            <h3 class="text-uppercase text-center"> Covid-19 Update  </h3>
          </div>

        <div class="table-responsive mt-5">
        
            <table class="table table-bordered text-center table-striped" id="tbval">
              <tr>
                <th>Country</th>
                <th>Total Confirmed</th>
                <th>Total Recovered</th>
                <th>Total Death</th>
                <th>New Confirmed</th>
                <th>New Recovered</th>
                <th>New Deaths</th>
              </tr>
            </table>
        
        
        </div>

    </section>
    <!-- Corna Update End-->

    <!-- About-->

    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">

        <div class="section_header text-center mb-5 mt-4">
            <h1> About Covid 19 </h1>
        </div>
        
        <div class="row pt-5 mb-5 about-cont">
            <div class="col-lg-5 col-md-12 col-12">
                <img src="images/aboutcovid.jpg" alt="about-covid" class="rounded">
            </div>

            <div class="col-lg-7 col-md-12 col-12 justify-content-center about-cont">

                <h2>What is Covid-19 (Corona-Virus)</h2>

                <br>         
                <p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, perferendis pariatur repellendus placeat tempora ratione minus! Deserunt quae consectetur quas pariatur assumenda libero accusantium corrupti, quam modi rem voluptas eos.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, perferendis pariatur repellendus placeat tempora ratione minus! Deserunt quae consectetur quas pariatur assumenda libero accusantium corrupti, quam modi rem voluptas eos.</p>
            </div>
        </div>
    </div>

    <!-- About End -->

     <!-- Covid - Symptoms  -->
     <div class="container-fluid pt-5 pb-5" id="sympid">

        <div class="section_header text-center mb-5 mt-4">
            <h1> CoronaVirus-Symptoms </h1>
        </div>
        
        <div class="container">
            <div class="row symp">
                <div class="col-lg-4 col-md-4 col-6 mt-5"> 
                <figure class="text-center">
                <img src="images/cough.png" alt="" width="120" height="120">
                
                <figcaption> Cough </figcaption>
                </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-6 mt-5"> 
                <figure class="text-center">
                <img src="images/runny-nose.png" alt="" width="120" height="120">
                
                <figcaption> Runny Nose </figcaption>
                </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-6 mt-5"> 
                <figure class="text-center">
                <img src="images/fever.png" alt="" width="120" height="120">
                
                <figcaption> Fever </figcaption>
                </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-6 mt-5"> 
                <figure class="text-center">
                <img src="images/cold.png" alt="" width="120" height="120">
             
                <figcaption> Cold </figcaption>
                </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-6 mt-5"> 
                <figure class="text-center">
                <img src="images/sleep-disorder.png" alt="" width="120" height="120">
                
                <figcaption> Tiredness </figcaption>
                </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-6 mt-5"> 
                <figure class="text-center">
                <img src="images/breathing.png" alt="" width="120" height="120">
                
                <figcaption> Breathing </figcaption>
                </figure>
                </div>
            </div>  
        </div>
        </div>
    </div>
    <!-- Covid - Symptoms End  -->

    <!-- 6 Steps pre aganist covid  -->
    <div class="container-fluid pt-5 sub_section pb-5" id="previd">
        <div class="section_header text-center mb-5 mt-4">
          <h2> 6 Steps Prevention agains Corona-Virus </h2>
    </div>

        <div class="container"> 
          <div class="row prev"> 
            <div class="col-lg-4 col-md-6 col-12 mt-5"> 
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                      <figure class="text-center">
                        <img src="images/handwash.png" class="img-fluid" alt="hand-wash">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vero? </p>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt-5"> 
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                      <figure class="text-center">
                        <img src="images/man-mask.png" class="img-fluid" alt="hand-wash">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vero? </p>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt-5"> 
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                      <figure class="text-center">
                        <img src="images/man-mask.png" class="img-fluid" alt="hand-wash">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vero? </p>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt-5"> 
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                      <figure class="text-center">
                        <img src="images/stayhome.png" class="img-fluid" alt="hand-wash">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vero? </p>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt-5"> 
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                      <figure class="text-center">
                        <img src="images/stayhome.png" class="img-fluid" alt="hand-wash">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vero? </p>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mt-5"> 
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">

                      <figure class="text-center">
                        <img src="images/fever-check.png" class="img-fluid" alt="hand-wash">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vero? </p>
                    </div>
                </div>
                </div>

                

            </div>
          </div>
        </div>
    </div>  <!-- 6 Steps pre aganist covid end -->


     <!-- Contact us --
    
    <div class="container-fluid pt-5 sub_section pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
          <h1> 6 Steps Prevention agains Corona-Virus </h1>
    </div>

        <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </form>


    </div>

    -->

    <!------- Footer ---> 

    <div class="footer">
      <div class="footercr">© 2021 Copyright:
    <a href="https://salehahmed.carrd.co/" target="_blank"> Saleh Ahmed</a></div>
    </div>



    </script>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    

<script>

function fetch(){
    $.get("https://api.covid19api.com/summary",

      function (data){
          //console.log(data['Countries'].length);
          var tbval = document.getElementById('tbval');
          
          for(var i=1; i<(data['Countries'].length); i++){
              var x = tbval.insertRow();
              x.insertCell(0);

              tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

              tbval.rows[i].cells[0].style.background = '#7a4a91';

              tbval.rows[i].cells[0].style.color = '#fff';

              x.insertCell(1);

              tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];

              tbval.rows[i].cells[1].style.background = '#4bb7d8';

              x.insertCell(2);

              tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];

              tbval.rows[i].cells[2].style.backgroud = '#4bb7d8';

              
              x.insertCell(3);

              tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];

              tbval.rows[i].cells[3].style.background = '#f36323';


              x.insertCell(4);

              tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];

              tbval.rows[i].cells[4].style.background = '#4bb7d8';

              x.insertCell(5);

              tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];

              tbval.rows[i].cells[5].style.background = '#9cc850';

              x.insertCell(6);

              tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];

              tbval.rows[i].cells[6].style.background = '#f36e23';


              

          }
      }
    )
}
       
    </script>
</body>
</html>