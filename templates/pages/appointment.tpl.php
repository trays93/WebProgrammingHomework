<div class="col-12">
  <div class="card mx-auto">
    <div class="card-header">
      <h2>Make an appointment</h2>
      <p class="lead">Please enter your contact information so I can send you a message</p>
    </div>
    <form action="./?page=appointmentDetails" method="post">
      <div class="card-body">
        
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Your name" required />
        </div>

        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Your E-mail" required />
        </div>

        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" name="address" id="address" class="form-control" placeholder="Your address" />
        </div>

        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" name="phone" id="phone" class="form-control" placeholder="Your phone number" required />
        </div>
        
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea name="message" id="message" class="form-control"></textarea>
        </div>

      </div>
      <div class="card-footer">
        <input type="submit" class="btn btn-primary" />
      </div>
    </form>
  </div>
</div>
