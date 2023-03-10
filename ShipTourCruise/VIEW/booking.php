   <?php require(view.'include/header.php') ?>

   <body>
       <?php require(view.'include/navbar.php') ?>
      




       <!-- end nav -->

       <div id="carouselExampleIndicators" class="carousel carousel-fade slide" data-bs-ride="carousel">
           <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                   aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                   aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                   aria-label="Slide 3"></button>
           </div>
           <div class="carousel-inner">
               <div class="carousel-item active">
                   <img src="https://images.pexels.com/photos/3601425/pexels-photo-3601425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                       class="d-block img-cover" alt="...">
                   <div class="carousel-caption d-none d-md-block">
                       <h5>First slide label</h5>
                       <p>Some representative placeholder content for the first slide.</p>
                   </div>
               </div>
               <div class="carousel-item">
                   <img src="https://images.pexels.com/photos/1430672/pexels-photo-1430672.jpeg"
                       class="d-block img-cover" alt="...">
                   <div class="carousel-caption d-none d-md-block">
                       <h5>Second slide label</h5>
                       <p>Some representative placeholder content for the second slide.</p>
                   </div>
               </div>
               <div class="carousel-item">
                   <img src="https://images.pexels.com/photos/3601425/pexels-photo-3601425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                       class="d-block img-cover" alt="...">
                   <div class="carousel-caption d-none d-md-block">
                       <h5>Third slide label</h5>
                       <p>Some representative placeholder content for the third slide.</p>
                   </div>
               </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
               data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
           </button>
       </div>
       <!-- CAROUSELS END -->
       <!-- nav search -->


       <div class="search-form">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <form id="search-form" method="POST" action="<?php url('booking/index/1') ?>">
                           <div class="row w-100">
                               <div class="col-lg-2">
                                   <h4>Sort Deals By:</h4>
                               </div>
                               
                               <div class="col-lg-2">
                                   <fieldset>

                                       <select name="port" class="form-select" aria-label="Default select example"
                                           id="chooseLocation" onchange="this.form.click()">
                                           <option selected></option>
                                           <?php foreach( $ports as $row ) :?>
                                           <option value="<?php echo $row['Country'] ?>"><?php echo $row['Country'] ?>
                                           </option>
                                           <?php endforeach ?>
                                       </select>

                                   </fieldset>
                               </div>
                               <div class="col-lg-2">
                               
                                   <fieldset>
                                       <select name="ship"  class="form-select" 
                                           id="choosePrice" onchange="this.form.click()">
                                           <option selected=""></option>
                                           <?php foreach( $ships as $row ) :?>
                                           <option><?php echo $row['name'] ?></option>
                                           <?php endforeach ?>
                                       </select>
                                   </fieldset>
                               </div>

                               <div class="col-lg-3">
                                   <input name="date" type="month"  class="form-control">
                               </div>
                              
                               <div class="col-lg-2">
                                   <fieldset>
                                       <button type="submit" name="submit" class="border-button">Search Results</button>
                                   </fieldset>
                               </div>
                           </div>
                           
                       </form>
                   </div>
               </div>
           </div>
       </div>


       <!-- nav search -->
           
      <section class="container mt-lg-3">

                 
               <?php foreach ($cruises as $row): ?>

           

                   <div  data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="row mb-2 p-2 bg-white border  rounded cards_pg">
                       <div class="col-md-3 mt-1" style="height:204px;">
                           <img class="img-fluid h-100 w-100 img-responsive ";
                               src="<?php url('Public/IMAGE2/'.$row['image']) ?>">
                       </div>
                       <div class="col-md-6 mt-1">
                           <div class="card-body ">
                               <h2 class="card-title"><?php echo $row['name'] ?></h2>
                               <div class="d-flex flex-row">
                                   <div class="ratings  mr-2"><i class="fa fa-star text-warning"></i><i
                                           class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i
                                           class="fa fa-star"></i></div><span>123</span>
                               </div>
                               <p class="card-text text-truncate"><?php echo $row['description'] ?></p>

                               <p><i> Start From*</i></p>
                               <div class="d-flex gap-4">
                               <p><?= $row['date_departure'] ?></p>
                                   <div class="d-flex">
                                       <i class="fa-solid fa-location-dot text-danger"></i>
                                       <p><?php echo $row['port_departeure'] ?></p>
                                   </div>

                                   <div class="d-flex ">
                                       <i class="fa-solid fa-ship text-danger"></i>
                                       <p><?php echo strtoupper($row['shipname'])?></p>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                           <div class="d-flex flex-row align-items-center">
                               <h4 class="mr-1">PERSON/<?php echo $row['price'] ?>$</h4>
                           </div>
                           <h6 class="text-success">Free shipping</h6>
                           <div class="d-flex flex-column mt-4">

                               <a class="btn btn-primary btn mt-2" href="<?php url('reservation/index/'.$row['id_c'])?>" type="button">Reserv Now</a>
                           </div>
                       </div>
                   </div>
               
                   <?php endforeach ?>

                   <div class="pagination_rounded">
                        <ul>
                            <li>
                                <a href="<?php url('booking/index/'.$i-1) ?>" class="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> Prev </a>
                            </li>
                            <?php for( $i = 1 ; $i <= $total_pages ; $i++ ) : ?>
                            <li>
                                <a href="<?php url('booking/index/'.$i) ?>"><?= $i ?></a>
                            </li>
							 <?php endfor ?>

                            <li><a href="<?php url('booking/index/'.$i+1) ?>" class="next"> Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>

       </section>
       <a href="" class="position-relative">
        <img class="reload" src="<?php url('Public/IMAGE2/reload.svg') ?>" alt="">
</a>
       
       <!-- ---------------------- -->
       <?php require(view.'include/footer.php') ?>



    
      <style>
      .reload{
        width: 58px;
        position: fixed;
        left: 95%;
        top: 500px;
        cursor: pointer;
        border-radius:50%; 
        animation-name: ;
         animation: reloadAnim 2s forwards ;
        
        
          }

          @keyframes reloadAnim {
            0%{
                transform: rotate(16deg);
            }
            50%{
                transform: rotate(45deg);
            } 
            100%{
                transform: rotate(100deg);
            }        
        
        }

      </style>
      

     