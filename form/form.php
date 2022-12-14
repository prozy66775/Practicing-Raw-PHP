<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
  
    <!------ Include the above in your HEAD tag ---------->
  </head>
  <body class="bishal">
    <div class="container contact-form form2">
      <div class="contact-image">
        <img
          src="https://image.ibb.co/kUagtU/rocket_contact.png"
          alt="rocket_contact"
        />
      </div>
      <form  method="post">
        <h3>Drop Us a Message</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input
                type="text"
                name="txtName"
                class="form-control"
                placeholder="Your Name *"
                value=""
              />
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <textarea
                name="txtMsg"
                class="form-control"
                placeholder="Your Message *"
                style="width: 100%; height: 150px"
              ></textarea>
            </div>
          </div>
            <div class="form-group">
              <input
                type="text"
                name="txtPhone"
                class="form-control"
                placeholder="Your Phone Number *"
                value=""
              />
            </div>
            <div class="form-group">
              <input
                type="submit"
                name="btnSubmit"
                class="btnContact"
                value="Send Message"
              />
            </div>
          </div>

        </div>
      </form>
    </div>

       <!-- ----------------javascript ------------- -->

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  </body>
</html>
