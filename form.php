<form class="section_form" action="./auth" method="post">
  <h1 class="section_form_title">Registration</h1>
  <div class="section_form_items">
    <label class="section_form_label" for="firstName"><?= $first_name;?></label>
    <input class="section_form_input" type="text" name="firstName" placeholder="<?= $example_firstName;?>" required>
  </div>
  <div class="section_form_items">
    <label class="section_form_label" for="lastName"><?= $last_name;?></label>
    <input class="section_form_input" type="text" name="lastName" placeholder="<?= $example_lastName;?>" required>
  </div>
  <div class="section_form_items">
    <label class="section_form_label" for="email"><?= $mail;?></label>
    <input class="section_form_input" type="email" name="email" placeholder="<?= $example_mail;?>" required>
  </div>
  <div class="section_form_items">
    <label class="section_form_label" for="phone"><?= $telefon;?></label>
    <input class="section_form_input" type="phone" name="phone" placeholder="<?= $example_telefon;?>" required>
    <div class="section_form_input_flags"></div>
  </div>
  <div class="section_form_items">
    <label class="section_form_label" for="password"><?= $passw;?></label>
    <input class="section_form_input" type="password" name="password" placeholder="<?= $example_password;?>" required>
  </div>
  <div class="section_form_check">
    <input type="checkbox" name="checkbox" required>
    <label for="checkbox">
      <span class="section_form_check_span">I accept</span> <span class="openModal">rules and agree terms of service</span> </label>
  </div>
  <div class="section_form_items">
    <button type="submit" class="section_form_submit"><?= $button_form;?></button>
  </div>
</form>
