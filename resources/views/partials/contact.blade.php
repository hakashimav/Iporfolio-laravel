<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Localisation :</h4>
                    <p>39 Rue de kimbangu, Kinshasa, RD-Congo </p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email :</h4>
                    <p>michmav28@gmail.com</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Appel :</h4>
                    <p>+243 9733 85 722</p>
                </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15913.197878353441!2d15.307291725744893!3d-4.354819785457539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a36d32565359f%3A0xa141691b00a4617e!2sKimbangu%2C%20Kinshasa!5e0!3m2!1sfr!2scd!4v1680987848625!5m2!1sfr!2scd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="name">Votre Nom</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="name">Adresse Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Sujet</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Chargement</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Votre message a été envoyer. Merci!</div>
                </div>
                <div class="text-center"><button type="submit">Envoyer message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
