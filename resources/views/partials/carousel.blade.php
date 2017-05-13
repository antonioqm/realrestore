  {{-- Carrossel --}}
        <div class="col-md-9 col-sm-8 col-md-offset-0">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
             
              <!-- Wrapper for slides -->
              <div class="carousel-inner carousel-inner-rc" role="listbox">
                <div class="item active">
                  {{-- <img src="{{ asset('img/banner/banner-1.jpg') }}" alt="Chania"> --}}
                  <div style="background: url(../img/banner/banner-1.jpg) no-repeat center center;" class="container-img-corousel-rc">
                    
                  </div>
                  <div class="carousel-caption carousel-caption-rc">
                    <h3>Do que você precisa?</h3>
                    <p></p>
                  </div>
                </div>

                <div class="item">
                  {{-- <img src="{{ asset('img/banner/banner-2.jpg') }}" alt="Chania"> --}}
                  <div style="background: url(../img/banner/banner-2.jpg) no-repeat center center;" class="container-img-corousel-rc" class="container-img-corousel-rc"></div>
                  <div class="carousel-caption carousel-caption-rc">
                    <h3>É Saúde? A Real Convênios tem!</h3>
                    {{-- <p>The atmosphere in Chania has a touch of Florence and Venice.</p> --}}
                  </div>
                </div>

                <div class="item">
                  {{-- <img src="{{ asset('img/banner/banner-3.jpg') }}" alt="Flower"> --}}
                  <div style="background: url(../img/banner/banner-3.jpg) no-repeat center center;" class="container-img-corousel-rc" class="container-img-corousel-rc"></div>
                  <div class="carousel-caption carousel-caption-rc">
                    <h3>Faça hoje, Use hoje!</h3>
                    {{-- <p>Beatiful flowers in Kolymbari, Crete.</p> --}}
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <div class="carousel-container-control">
                    <!-- Indicators -->
                  {{-- <ol class="carousel-indicators carousel-indicators-rc">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol> --}}
                  <a class="left carousel-control corousel-control-rc" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    {{-- <span class="sr-only">Previous</span> --}}
                  </a>
                  <a class="right carousel-control corousel-control-rc" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    {{-- <span class="sr-only">Next</span> --}}
                  </a>
              </div>

            </div>
    </div>