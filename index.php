<?php
  $firstname = $name = $email = $phone = $message = "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = verifyInput($_POST["firstname"]);
    $lastname = verifyInput($_POST["lastname"]);
    $email = verifyInput($_POST["email"]);
    $phone = verifyInput($_POST["phone"]);
    $message = verifyInput($_POST["message"]);
  }

  function verifyInput($var)
  {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);

    return $var;
  }

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contactez-moi !</title>
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
                <label for="firstname"
                  >Prénom <span class="blue">*</span></label
                >
                <input
                  id="firstname"
                  type="text"
                  name="firstname"
                  class="form-control"
                  placeholder="Votre prénom"
                  value="<?php echo $firstname ?>"
                />
                <p class="comments">Message d'erreur</p>
              </div>

              <div class="col-md-6">
                <label for="lastname">Nom <span class="blue">*</span></label>
                <input
                  id="lastname"
                  type="text"
                  name="lastname"
                  class="form-control"
                  placeholder="Votre nom"
                  value="<?php echo $lastname ?>"
                />
                <p class="comments">Message d'erreur</p>
              </div>

              <div class="col-md-6">
                <label for="email">Email <span class="blue">*</span></label>
                <input
                  id="email"
                  type="text"
                  name="email"
                  class="form-control"
                  placeholder="Votre email"
                  value="<?php echo $email ?>"
                />
                <p class="comments">Message d'erreur</p>
              </div>

              <div class="col-md-6">
                <label for="phone">Téléphone</label>
                <input
                  id="phone"
                  type="text"
                  name="phone"
                  class="form-control"
                  placeholder="Votre téléphone"
                  value="<?php echo $phone ?>"
                />
                <p class="comments">Message d'erreur</p>
              </div>

              <div class="col-md-12">
                <label for="message">Message <span class="blue">*</span></label>
                <textarea
                  id="message"
                  name="message"
                  rows="6"
                  class="form-control"
                  placeholder="Votre message"
                  value="<?php echo $message ?>"
                ></textarea>
                <p class="comments">Message d'erreur</p>
              </div>

              <div class="col-md-12">
                <p>
                  <small
                    ><span class="blue"
                      >* Ces informations sont requises.</span
                    ></small
                  >
                </p>
              </div>

              <div class="col-md-12">
                <input type="text" class="btn-1" value="Envoyer" />
              </div>
            </div>

            <p class="thank-you">
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
