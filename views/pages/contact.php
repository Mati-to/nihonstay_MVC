<main class='container section'>
  <h1>Contact</h1>

  <img src='../img/contact2.jpg' alt='Man looking at his garden' loading='lazy'>

  <h2>Fill the Contact form</h2>

  <form class='form' action='/contact' method='POST'>
    <fieldset>
      <legend>Personal Information</legend>

      <label for='name'>Name:</label>
      <input type='text' id='name' name='contact[name]' placeholder='Your name' required>

      <label for='email'>Email:</label>
      <input type='email' id='email' name='contact[email]' placeholder='Your email' required>

      <label for='phone'>Phone Number:</label>
      <input type='tel' id='phone' name='contact[phone]' placeholder='Your phone number' required>

      <label for='message'>Message:</label>
      <textarea name='contact[message]' id='' cols='30' rows='10' required></textarea>
    </fieldset>

    <fieldset>
      <legend>Information about the house</legend>

      <label for='options'>Do you want to rent a house or put your house for rent?</label>
      <select id='options' name='contact[type]' required>
        <option value='' disabled selected>--Select--</option>
        <option value='putRent'>Rent a house</option>
        <option value='getRent'>Put a house for rent</option>
      </select>

      <label for='prize'>Prize per night</label>
      <input type='number' id='prize' name='contact[prize]' placeholder='Your prize' required>
    </fieldset>

    <fieldset>
      <legend>Contact Information</legend>

      <p>How do you prefer to be contacted?</p>
      <div class='contact-form'>
        <label for='phone-contact'>Phone</label>
        <input name='contact[contact]' type='radio' value='phone' id='phone-contact' required>
        <label for='email-contact'>Email</label>
        <input name='contact[contact]' type='radio' value='email' id='email-contact' required>
      </div>

      <p>If you selected phone, please indicate a preferred date and time for us to call you:</p>
      <label for='phone'>Date:</label>
      <input type='date' id='date' name='contact[date]'>
      <label for='time'>Time:</label>
      <input type='time' id='time' name='contact[time]' min='10:00' max='18:00'>
    </fieldset>

    <input type='submit' value='Send' class='green-button'>
  </form>
</main>