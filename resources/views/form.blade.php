@extends('layout.layout')

@section('container')
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Créér un nouveau Post</h2>
            </div>

            <div class="row" data-aos="fade-left">

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{ route('posts.save') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name">Type Projet</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="name">Catégorie</label>
                        <input type="email" class="form-control" name="category" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Client</label>
                        <input type="text" class="form-control" name="client" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Adresse Url</label>
                        <input type="text" class="form-control" name="url" id="subject" required>
                    </div>
                    <div class="my-3">
                        <div class="loading">Chargement</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Votre message a été envoyer. Merci!</div>
                    </div>
                    <div class="text-center"><button type="submit">Créér</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
</main>
@endsection
