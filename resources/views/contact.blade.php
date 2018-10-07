@extends('base')

@section('title','Contact')

@section('content')
	
    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span4">
            <aside>
              <div class="widget">
                <h4 class="rheading">Get in touch with us<span></span></h4>
                <ul>
                  <li><label><strong>Phone : </strong></label>
                    <p>
                      +79090614589
                    </p>
                  </li>
                  <li><label><strong>Email : </strong></label>
                    <p>
                      Unisaa207@gmail.com
                    </p>
                  </li>
                  <li><label><strong>Adress : </strong></label>
                    <p>
                      7-Ya Podlesnaya Ulitsa, <br />
                      97, Октябрьский, <br />Udmurtskaja Respublika,<br />
                       Russia, 426069 
                    </p>
                  </li>
                </ul>
              </div>
              <div class="widget">
                <h4 class="rheading">Find us on social networks<span></span></h4>
                <ul class="social-links">
                  <li><a href="#" title="Twitter"><i class="icon-square icon-32 icon-twitter"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="icon-square icon-32 icon-facebook"></i></a></li>
                  <li><a href="#" title="Google plus"><i class="icon-square icon-32 icon-google-plus"></i></a></li>
                  <li><a href="#" title="Linkedin"><i class="icon-square icon-32 icon-linkedin"></i></a></li>
                  <li><a href="#" title="Pinterest"><i class="icon-square icon-32 icon-pinterest"></i></a></li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="span8">
            <div id="google-map" data-latitude="56.86957719999999" data-longitude="53.17713530000003"></div>

            <div class="spacer30">
            </div>

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage">              
            </div>
            <form action="{{ url('/contact') }}" method="post" role="form" class="contactForm">
              
            	@csrf
              <div class="row">
                <div class="span4 form-group">
                  <input type="text" name="name" class="input-block-level" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="name" />
                  <div class="validation"></div>
                </div>

                <div class="span4 form-group">
                  <input type="email" class="input-block-level" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" autocomplete="email" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <input type="text" class="input-block-level" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span8 form-group">
                  <textarea class="input-block-level" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <div class="text-center">
                    <button class="btn btn-theme" type="submit">Send a message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('scripts')
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAMXcMvgJSBm-b-KQKtZSNz--50XIB_4Q"></script>
	@parent
  	<!-- Contact Form JavaScript File -->
	<script src="/contactform/contactform.js"></script>
  <script type="text/javascript">
    // Select the node that will be observed for mutations
    var targetNode = document.getElementById('errormessage');

    // Options for the observer (which mutations to observe)
    var config = { attributes: true, childList: true, subtree: true };

    // Callback function to execute when mutations are observed
    var callback = function() 
    {
        if (document.getElementById("errormessage").childElementCount == 0)
        {
            $("#errormessage").removeClass("show");
        }        
    };

    // Create an observer instance linked to the callback function
    var observer = new MutationObserver(callback);

    // Start observing the target node for configured mutations
    observer.observe(targetNode, config);

    // Later, you can stop observing
    //observer.disconnect();
  </script>
@stop