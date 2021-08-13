<?php 
  include './php/contact.php';
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <!-- CDN Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Google Font - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>

    <div class="container">
      <div class="divider"></div>
      <div class="heading">
        <h2>Contact</h2>
      </div>

      <div class="row">
        <div class="col-lg-10 offset-1">

          <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" role="form">
            <div class="row">

              <div class="col-md-6">
                <label for="firstname" class="form-label"
                  >Prénom <span class="blue">*</span></label
                >
                <input
                  id="firstname"
                  type="text"
                  name="firstname"
                  class="form-control"
                  placeholder="Votre prénom"
                  value="<?php echo $firstname; ?>"
                />
                <p class="comments"><?php echo $firstnameError; ?></p>
              </div>

              <div class="col-md-6">
                <label for="lastname" class="form-label">Nom <span class="blue">*</span></label>
                <input
                  id="lastname"
                  type="text"
                  name="lastname"
                  class="form-control"
                  placeholder="Votre nom"
                  value="<?php echo $lastname; ?>"
                />
                <p class="comments"><?php echo $lastnameError; ?></p>
              </div>

              <div class="col-md-6">
                <label for="email" class="form-label">Email <span class="blue">*</span></label>
                <input
                  id="email"
                  type="email"
                  name="email"
                  class="form-control"
                  placeholder="Votre email"
                  value="<?php echo $email; ?>"
                />
                <p class="comments"><?php echo $emailError; ?></p>
              </div>

              <div class="col-md-6">
                <label for="phone" class="form-label">Téléphone</label>
                <input
                  id="phone"
                  type="tel"
                  name="phone"
                  class="form-control"
                  placeholder="Votre téléphone"
                  value="<?php echo $phone; ?>"
                />
                <p class="comments"><?php echo $phoneError; ?></p>
              </div>

              <div class="col-md-12">
                <label for="message" class="form-label">Message <span class="blue">*</span></label>
                <textarea
                  id="message"
                  name="message"
                  rows="6"
                  class="form-control"
                  placeholder="Votre message"
                  value="<?php echo $message; ?>"
                ></textarea>
                <p class="comments"><?php echo $messageError; ?></p>
              </div>

              <div class="col-md-12">
                <p class="blue"><strong>* Ces informations sont requises.</strong></p>
              </div>

              <div class="col-md-12">
                <input type="submit" class="btn-1" value="Envoyer" />
              </div>
            </div>

            <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none';?>">
              Votre message a bien été envoyé. Merci de m'avoir contacté !
            </p>

          </form>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
