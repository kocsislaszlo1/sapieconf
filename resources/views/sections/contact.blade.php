<section id="contact" class="section-bg wow fadeInUp">

  <div class="container">

    <div class="section-header">
      <h2>Contact Us</h2>
      <p>Nihil officia ut sint molestiae tenetur.</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          
          <i class="ion-ios-location-outline"></i>
          <h3>Address</h3>
           <address>Szabadság tér, 1. szám Románia, Csíkszereda </address> 
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Phone Number</h3>
           <p><a href="tel:'0785855940'">0785855940</a></p>
        </div> 
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
           <p><a href="kocsislaszlo@uni.sapientia.ro">kocsislaszlo@uni.sapientia.ro</a></p>
        </div>
      </div>

    </div>

    <div class="form">
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>
      <form action="{{ route('mail') }}" method="post" role="form" class="contactForm">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
    </div>

  </div>
</section><!-- #contact -->
