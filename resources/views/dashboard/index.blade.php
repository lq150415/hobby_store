@extends('layouts.dashboard')
@section('title')
 Inicio
@endsection
@section('content')
  <section style="background: url('assets/img/photogrid.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
    <div class="container">
      <!-- Carousel Start-->
      <div class="home-carousel">
        <div class="dark-mask mask-primary"></div>
        <div class="container">
          <div class="homepage owl-carousel">
            <div class="item">
              <div class="row">
                <div class="col-md-5 text-right">
                  <h1>DIECAST</h1>
                  <p>Business. Corporate. Agency.<br>Portfolio. Blog. E-commerce.</p>
                </div>
                <div class="col-md-7"><img src="{{url('assets/img/template-homepage.png')}}" alt="" class="img-fluid"></div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-7 text-center"><img src="{{url('assets/img/template-mac.png')}}" alt="" class="img-fluid"></div>
                <div class="col-md-5">
                  <h2>MODELISMO</h2>
                  <ul class="list-unstyled">
                    <li>Sliders and carousels</li>
                    <li>4 Header variations</li>
                    <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                    <li>+ 11 extra pages showing template features</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-5 text-right">
                  <h1>ARTE VINTAGE</h1>
                  <ul class="list-unstyled">
                    <li>Clean and elegant design</li>
                    <li>Full width and boxed mode</li>
                    <li>Easily readable Roboto font and awesome icons</li>
                    <li>7 preprepared colour variations</li>
                  </ul>
                </div>
                <div class="col-md-7"><img src="{{url('assets/img/template-easy-customize.png')}}" alt="" class="img-fluid"></div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-7"><img src="{{url('assets/img/template-easy-code.png')}}" alt="" class="img-fluid"></div>
                <div class="col-md-5">
                  <h1>3D METAL ASSEMBLY</h1>
                  <ul class="list-unstyled">
                    <li>7 preprepared colour variations.</li>
                    <li>Easily to change fonts</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel End-->
    </div>
  </section>
  <section class="bar background-white">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="box-simple">
            <div class="icon-outlined"><a href="{{route('dashboard.modelism')}}">
              <i class="fa fa-desktop"></i></a></div>
            <h3 class="h4">MODELISMO</h3>
            <p></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="box-simple">
            <div class="icon-outlined"><a href="{{route('dashboard.diecast')}}"><i class="fa fa-print"></i></a></div>
            <h3 class="h4">DIECAST</h3>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="box-simple">
            <div class="icon-outlined"><a href="{{route('dashboard.vintage')}}"><i class="fa fa-lightbulb-o"></i></a></div>
            <h3 class="h4">ARTE VINTAGE</h3>
            <p></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="box-simple">
            <div class="icon-outlined"><a href="{{route('dashboard.metal')}}"><i class="fa fa-envelope-o"></i></a></div>
            <h3 class="h4">3D METAL ASSEMBLY</h3>
            <p></p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bar background-pentagon no-mb text-md-center">
    <div class="container">
      <div class="heading text-center">
        <h2>Productos populares</h2>
      </div>
      <!-- Carousel Start-->
      <ul class="owl-carousel testimonials list-unstyled equal-height">
        <li class="item">
          <div class="testimonial d-flex flex-wrap">
            <div class="text">
              <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
            </div>
            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
              <div class="icon"><i class="fa fa-quote-left"></i></div>
              <div class="testimonial-info d-flex">
                <div class="title">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
                <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="testimonial d-flex flex-wrap">
            <div class="text">
              <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
            </div>
            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
              <div class="icon"><i class="fa fa-quote-left"></i></div>
              <div class="testimonial-info d-flex">
                <div class="title">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
                <div class="avatar"><img alt="" src="img/person-2.jpg" class="img-fluid"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="testimonial d-flex flex-wrap">
            <div class="text">
              <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
              <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
            </div>
            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
              <div class="icon"><i class="fa fa-quote-left"></i></div>
              <div class="testimonial-info d-flex">
                <div class="title">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
                <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="testimonial d-flex flex-wrap">
            <div class="text">
              <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
            </div>
            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
              <div class="icon"><i class="fa fa-quote-left"></i></div>
              <div class="testimonial-info d-flex">
                <div class="title">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
                <div class="avatar"><img alt="" src="img/person-4.jpg" class="img-fluid"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="testimonial d-flex flex-wrap">
            <div class="text">
              <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
            </div>
            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
              <div class="icon"><i class="fa fa-quote-left"></i></div>
              <div class="testimonial-info d-flex">
                <div class="title">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
                <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <!-- Carousel End-->
    </div>
  </section>
  <section  class="bar no-mb color-white text-center bg-fixed relative-positioned">
    <div class="dark-mask"></div>
    <div class="container">
      <div class="icon icon-outlined icon-lg"><i class="fa fa-file-code-o"></i></div>
      <h3 class="text-uppercase">¿No puedes encontrar lo que buscas?</h3>
      <p class="lead">Envianos una sugerencia por un mensaje privado y te responderemos cuanto antes.</p>
      <p class="text-center"><a target="_blank" href="https://api.whatsapp.com/send?phone=59160522919&text=¡Hola!%20Quiero sugerir este producto '' al listado actual de la empresa." class="btn btn-template-outlined-white btn-lg"><i class="fa fa-whatsapp" aria-hidden="true"></i> Enviar mensaje</a></p>
    </div>
  </section>
  <section class="bar bg-gray">
    <div class="container">
      <div class="heading text-center">
        <h2>Nuestras marcas</h2>
      </div>
      <ul class="list-unstyled owl-carousel customers no-mb">
        <li class="item"><img src="assets/img/customer-1.png" alt="" class="img-fluid"></li>
        <li class="item"><img src="assets/img/customer-2.png" alt="" class="img-fluid"></li>
        <li class="item"><img src="assets/img/customer-3.png" alt="" class="img-fluid"></li>
        <li class="item"><img src="assets/img/customer-4.png" alt="" class="img-fluid"></li>
        <li class="item"><img src="assets/img/customer-5.png" alt="" class="img-fluid"></li>
        <li class="item"><img src="assets/img/customer-6.png" alt="" class="img-fluid"></li>
      </ul>
    </div>
  </section>
  <!-- GET IT-->

  <!-- FOOTER -->
  <footer class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h4 class="h6">Acerca de nosotros</h4>
          <p>Somos una empresa dedicada al modelismo y coleccionismo</p>
          <hr>
          <h4 class="h6">Unete a nosotros y recibe un catalago electronico periodicamente</h4>
          <form>
            <div class="input-group">
              <input type="text" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
              </div>
            </div>
          </form>
          <hr class="d-block d-lg-none">
        </div>
        <div class="col-lg-5">
          <h4 class="h6">Redes Sociales</h4>
          <ul class="list-unstyled footer-blog-list">
            <li class="d-flex align-items-center">
              <div class="image"><i class="fa fa-facebook" aria-hidden="true"></i></div>
              <div class="text">
                <h5 class="mb-0"> <a href="post.html">FACEBOOK</a></h5>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="image"><i class="fa fa-instagram" aria-hidden="true"></i></div>
              <div class="text">
                <h5 class="mb-0"> <a href="post.html">INSTAGRAM</a></h5>
              </div>
            </li>
            <li class="d-flex align-items-center">
              <div class="image"><i class="fa fa-twitter" aria-hidden="true"></i></div>
              <div class="text">
                <h5 class="mb-0"> <a href="post.html">TWITTER</a></h5>
              </div>
            </li>
          </ul>
          <hr class="d-block d-lg-none">
        </div>
        <div class="col-lg-4">
          <h4 class="h6">Contactos</h4>
          <p class="text-uppercase"><strong>HobbyBlue</strong><br>Calle Nery <br>Zona 16 de Julio <br>#3929 <br>El Alto - La Paz<br><strong>Bolivia</strong></p><a href="contact.html" class="btn btn-template-main">Ir al mapa</a>
          <hr class="d-block d-lg-none">
        </div>

      </div>
    </div>
    <div class="copyrights">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center-md">
            <p>&copy; 2018. HobbyBlue. Todos los derechos reservados</p>
          </div>
          <div class="col-lg-8 text-right text-center-md">
            <p>Diseñado y adaptado por Codev </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection
