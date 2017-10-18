<?php
  include ("lib/inc/header.php")
?>
  <div class="main_content">
    <h1 id="contact_header">Contact Me</h1>
    <form class="form" action="contact.php" method="post">
      <fieldset id="field">
          <label for="fname">Firstname: </label>
          <input class="input" type="text" name="fname" id="fname" placeholder="Ex. Chris" required>
          <label class="lname" for="lname">Lastname: </label>
          <input class="input" type="text" name="lname" id="lname" placeholder="Ex. Hamilton" required>
          <label for="phone">Phone:</label>
          <input class="input" type="tel" name="phone" id="phone" placeholder="(xxx)-xxx-xxxx" required>
          <label class="email" for="email">Email: </label>
          <input class="input" type="email" name="email" id="email" placeholder="chamilton4@gmail.com" required>
          <input id="submit_btn" type="submit" value="Submit">
      </fieldset>
    </form>
  </div>
<?php
  include ("lib/inc/footer.php");
?>
