@extends('layouts.main')
@section('content')
{{-- <div class="ww-section" id="couple">
  <div class="container">
    <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Recka & Rusnia</h2>
    <div class="row text-center">
      <div class="col-md-6">
        <div class="mt-3"><img class="img-fluid" src="{{ url('assets/images/groom.jpg') }}" alt="Groom" data-aos="flip-left" data-aos-duration="1000"/>
          <p class="pt-3 text-left text-muted">Hi I am Recka,Lorem ipsum dolor sit amet consectetur adipiscing, elit nulla enim arcu dictum lobortis, ac congue non hendrerit accumsan. Ut penatibus litora platea mi mus tempus eros proin, maecenas hac eget hendrerit inceptos per tempor sodales, id varius nulla commodo augue lectus pulvinar. Etiam suscipit leo sollicitudin vivamus tempor himenaeos vitae mattis dictum posuere, tincidunt aenean litora aptent facilisis eu est gravida.</p>
          <h3 class="h2 ww-title">Recka</h3>
          <div class="ww-social-links">
            <a class="btn btn-link" href="#">
              <i class="fab fa-facebook-f" aria-hidden="true"></i>
            </a>
            <a class="btn btn-link" href="#">
              <i class="fab fa-twitter" aria-hidden="true"></i>
            </a>
            <a class="btn btn-link" href="#">
              <i class="fab fa-google-plus-g" aria-hidden="true"></i>
            </a>
            <a class="btn btn-link" href="#">
              <i class="fab fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mt-3"><img class="img-fluid" src="{{ url('assets/images/bride.jpg') }}" alt="Bride" data-aos="flip-right" data-aos-duration="1000"/>
          <p class="pt-3 text-left text-muted">Hi I am Susan,Lorem ipsum dolor sit amet consectetur adipiscing, elit nulla enim arcu dictum lobortis, ac congue non hendrerit accumsan. Ut penatibus litora platea mi mus tempus eros proin, maecenas hac eget hendrerit inceptos per tempor sodales, id varius nulla commodo augue lectus pulvinar. Etiam suscipit leo sollicitudin vivamus tempor himenaeos vitae mattis dictum posuere, tincidunt aenean litora aptent facilisis eu est gravida.</p>
          <h3 class="h2 ww-title">Rusnia</h3>
          <div class="ww-social-links">
            <a class="btn btn-link" href="#">
              <i class="fab fa-facebook-f" aria-hidden="true"></i>
            </a>
            <a class="btn btn-link" href="#">
              <i class="fab fa-twitter" aria-hidden="true"></i>
            </a>
            <a class="btn btn-link" href="#">
              <i class="fab fa-google-plus-g" aria-hidden="true"></i>
            </a>
            <a class="btn btn-link" href="#">
              <i class="fab fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="ww-section bg-light" id="events">
    <div class="container ww-wedding-event">
      <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Wedding Events</h2>
      <div class="row">
        <div class="col-md-7 col-sm-12">
          <div class="my-3">
            <div class="h4">Wedding Party</div>
            <ul>
              <li><i class="text-muted fas fa-map-marker-alt"></i><span class="pl-2 text-muted">Church End, Hendon, London, UK</span></li>
              <li class="pt-2"><i class="text-muted far fa-calendar-alt"></i><span class="pl-2 text-muted">20 Dec 2018, 9AM - 6PM</span></li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit nulla enim arcu dictum lobortis, ac congue non hendrerit accumsan. Ut penatibus litora platea mi mus tempus eros proin, maecenas hac eget hendrerit inceptos per tempor sodales, id varius nulla commodo augue lectus pulvinar. Etiam suscipit leo sollicitudin vivamus tempor himenaeos vitae mattis dictum posuere, tincidunt aenean litora aptent facilisis eu est gravida.</p>
          </div>
        </div>
        <div class="col-md-5 col-sm-12">
          <div class="my-3"><img class="img-fluid" src="{{ url('assets/images/wedding-party.jpg') }}" alt="Wedding Party" data-aos="fade-down-right" data-aos-duration="1000"/></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 col-sm-12">
          <div class="my-3">
            <div class="h4">Reception</div>
            <ul>
              <li><i class="text-muted fas fa-map-marker-alt "></i><span class="pl-2 text-muted">City Place, Hendon, London, UK</span></li>
              <li class="pt-2"><i class="text-muted far fa-calendar-alt "></i><span class="pl-2 text-muted">22 Dec 2018, 11AM - 6PM</span></li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit nulla enim arcu dictum lobortis, ac congue non hendrerit accumsan. Ut penatibus litora platea mi mus tempus eros proin, maecenas hac eget hendrerit inceptos per tempor sodales, id varius nulla commodo augue lectus pulvinar. Etiam suscipit leo sollicitudin vivamus tempor himenaeos vitae mattis dictum posuere, tincidunt aenean litora aptent facilisis eu est gravida.</p>
          </div>
        </div>
        <div class="col-md-5 col-sm-12">
          <div class="my-3"><img class="img-fluid" src="{{ url('assets/images/reception.jpg') }}" alt="Reception" data-aos="fade-up-right" data-aos-duration="1000"/></div>
        </div>
      </div>
    </div>
  </div>
  <div class="ww-section" id="people">
    <div class="container ww-couple-friends">
      <h2 class="h1 text-center pt-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Groomsmen & Bridesmaids</h2>
      <div class="carousel slide" id="ww-carouselIndicator" data-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
        <ol class="carousel-indicators">
          <li class="active" data-target="#ww-carouselIndicator" data-slide-to="0"></li>
          <li data-target="#ww-carouselIndicator" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4">
                <div class="card d-block mb-3"><img class="card-img-top" src="{{ url('assets/images/groom-men-1.jpg') }}" alt="Groom Men 1"/>
                  <div class="card-body text-center">
                    <div class="h5">Bryan Berry</div>
                    <p class="mb-0 text-muted">Best Friend</p>
                    <p class="text-muted">Groomsmen</p>
                    <div class="ww-social-links"><a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card d-block mb-3"><img class="card-img-top" src="{{ url('assets/images/groom-men-2.jpg') }}" alt="Groom Men 2"/>
                  <div class="card-body text-center">
                    <div class="h5 text-center">Kevin Johnston</div>
                    <p class="mb-0 text-muted">Room Mate</p>
                    <p class="text-muted">Groomsmen</p>
                    <div class="ww-social-links"><a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card d-block mb-3"><img class="card-img-top" src="{{ url('assets/images/groom-men-3.jpg') }}" alt="Groom Men 3"/>
                  <div class="card-body text-center">
                    <div class="h5 text-center">Arthur Wright</div>
                    <p class="mb-0 text-muted">Friend</p>
                    <p class="text-muted">Groomsmen</p>
                    <div class="ww-social-links"><a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4">
                <div class="card d-block mb-3"><img class="card-img-top" src="{{ url('assets/images/bride-maid-1.jpg') }}" alt="Bride Maid 1"/>
                  <div class="card-body text-center">
                    <div class="h5">Rachel Lawson</div>
                    <p class="mb-0 text-muted">Best Friend</p>
                    <p class="text-muted">Bridesmaids</p>
                    <div class="ww-social-links"><a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card d-block mb-3"><img class="card-img-top" src="{{ url('assets/images/bride-maid-2.jpg') }}" alt="Bride Maid 2"/>
                  <div class="card-body text-center">
                    <div class="h5 text-center">Betty George</div>
                    <p class="mb-0 text-muted">Room Mate</p>
                    <p class="text-muted">Bridesmaids</p>
                    <div class="ww-social-links"><a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card d-block mb-3"><img class="card-img-top" src="{{ url('assets/images/bride-maid-3.jpg') }}" alt="Bride Maid 3"/>
                  <div class="card-body text-center">
                    <div class="h5 text-center">Emma Snyder</div>
                    <p class="mb-0 text-muted">Friend</p>
                    <p class="text-muted">Bridesmaids</p>
                    <div class="ww-social-links"><a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a><a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ww-section bg-light" id="gallery">
    <div class="ww-photo-gallery">
      <div class="container">
        <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Photo Gallery</h2>
        <div class="col-md-12 text-center ww-category-filter mb-4"><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="all">All</a><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="vacation">Our Vacation</a><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="party">Party</a><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="ceremony">Ceremony</a><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="wedding">Wedding</a></div>
        <div class="ww-gallery" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">
          <div class="card-columns">
            <div class="card" data-groups="[&quot;vacation&quot;,&quot;ceremony&quot;]">
              <a href="{{ url('assets/images/gallery-pic-1.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                <img class="img-fluid" src="{{ url('assets/images/gallery-pic-1.jpg') }}" alt="Gallery Pic 1"/>
              </a>
            </div>
            <div class="card" data-groups="[&quot;party&quot;,&quot;wedding&quot;]">
              <a href="{{ url('assets/images/gallery-pic-2.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                <img class="img-fluid" src="{{ url('assets/images/gallery-pic-2.jpg') }}" alt="Gallery Pic 2"/>
              </a>
            </div>
            <div class="card" data-groups="[&quot;vacation&quot;]">
              <a href="{{ url('assets/images/gallery-pic-3.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                <img class="img-fluid" src="{{ url('assets/images/gallery-pic-3.jpg') }}" alt="Gallery Pic 3"/>
              </a>
            </div>
            <div class="card" data-groups="[&quot;party&quot;,&quot;vacation&quot;]">
              <a href="{{ url('assets/images/gallery-pic-4.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                <img class="img-fluid" src="{{ url('assets/images/gallery-pic-4.jpg') }}" alt="Gallery Pic 4"/>
              </a>
            </div>
            <div class="card" data-groups="[&quot;vacation&quot;]">
              <a href="{{ url('assets/images/gallery-pic-5.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                <img class="img-fluid" src="{{ url('assets/images/gallery-pic-5.jpg') }}" alt="Gallery Pic 5"/>
              </a>
            </div>
            <div class="card" data-groups="[&quot;wedding&quot;,&quot;ceremony&quot;,&quot;party&quot;]">
              <a href="{{ url('assets/images/gallery-pic-6.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                <img class="img-fluid" src="{{ url('assets/images/gallery-pic-6.jpg') }}" alt="Gallery Pic 6"/>
              </a>
            </div>
            <div class="card" data-groups="[&quot;vacation&quot;]">
              <a href="{{ url('assets/images/gallery-pic-7.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                <img class="img-fluid" src="{{ url('assets/images/gallery-pic-7.jpg') }}" alt="Gallery Pic 7"/>
              </a>
            </div>
            <div class="card" data-groups="[&quot;wedding&quot;,&quot;party&quot;]">
              <a href="{{ url('assets/images/gallery-pic-8.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                <img class="img-fluid" src="{{ url('assets/images/gallery-pic-8.jpg') }}" alt="Gallery Pic 8"/>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ww-section ww-rsvp-detail text-white" id="rsvp">
    <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
      <div class="col text-center">
        <h2 class="h1 ww-title pb-3" data-aos="zoom-in-down" data-aos-duration="1000">Join Our Party</h2>
      </div>
      <div class="row ww-rsvp-form">
        <div class="col-md-10">
          <div class="card-body">
            <form action="https://formspree.io/example@email.com" method="POST">
              <div class="row">
                <div class="col md-6 pb-3">
                  <div class="form-group">
                    <label for="name-input">Your Name*</label>
                    <input class="form-control" id="name-input" type="text" name="name" required="required"/>
                  </div>
                </div>
                <div class="col-md-6 pb-3">
                  <div class="form-group">
                    <label for="email-input">Your Email*</label>
                    <input class="form-control" id="email-input" type="email" name="_replyto" required="required"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col md-6 pb-3">
                  <div class="form-group">
                    <label for="guest-input">Number of Guests</label>
                    <select class="form-control" id="guest-input" name="guest">
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 pb-3">
                  <div class="form-group">
                    <label for="events-input">I am Attending</label>
                    <select class="form-control" id="events-input" name="events">
                      <option value="all-event">All Events</option>
                      <option value="wedding-ceremony">Wedding ceremony</option>
                      <option value="reception-party">Reception Party</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="message-input">Your Message</label>
                    <textarea class="form-control" id="message-input" name="message" rows="4"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col text-center">
                  <button class="btn btn-primary btn-submit" type="submit">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
<main class="main-content">
    <div class="container">
        <div class="page">
        <div class="row">
            <div class="col-md-9">
                <div class="slider">
                    <ul class="slides">
                        <li><a href="#"><img src="{{ url('assets_FE/dummy/car1.jpeg') }}" alt="Slide 1"></a></li>
                        <li><a href="#"><img src="{{ url('assets_FE/dummy/car2.jpeg') }}" alt="Slide 2"></a></li>
                        <li><a href="#"><img src="{{ url('assets_FE/dummy/car3.jpeg') }}" alt="Slide 3"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ url('assets_FE/dummy/car1.jpeg') }}" alt="Movie 1"></a>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ url('assets_FE/dummy/car2.jpeg') }}" alt="Movie 2"></a>
                    </div>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ url('assets_FE/dummy/car3.jpeg') }}" alt="Movie 3"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ url('assets_FE/dummy/car4.jpeg') }}" alt="Movie 4"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ url('assets_FE/dummy/car5.jpeg') }}" alt="Movie 5"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ url('assets_FE/dummy/car1.jpeg') }}" alt="Movie 6"></a>
                    </div>
                </div>
            </div> <!-- .row -->
        
            <div class="row">
                <div class="col-md-4">
                <h2 class="section-title">December premiere</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <ul class="movie-schedule">
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                </ul> <!-- .movie-schedule -->
                </div>
                <div class="col-md-4">
                    <h2 class="section-title">November premiere</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <ul class="movie-schedule">
                        <li>
                            <div class="date">16/12</div>
                            <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                        </li>
                        <li>
                            <div class="date">16/12</div>
                            <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                        </li>
                        <li>
                            <div class="date">16/12</div>
                            <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                        </li>
                        <li>
                            <div class="date">16/12</div>
                            <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                        </li>
                    </ul> <!-- .movie-schedule -->
                </div>
                <div class="col-md-4">
                    <h2 class="section-title">October premiere</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <ul class="movie-schedule">
                        <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                        </li>
                        <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                        </li>
                        <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                        </li>
                        <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                        </li>
                    </ul> <!-- .movie-schedule -->
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</main>
@endsection