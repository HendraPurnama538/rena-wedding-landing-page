@php
$attires = [
[
'title' => 'Abu Dress-Kebaya (2 in 1)',
'category' => 'Attire A',
'image' => 'Abu Dress-kebaya (2in1)Attire B.jpg',
'desc' => 'Desain 2 in 1 serbaguna dengan nuansa abu perak mewah, memadukan keanggunan dress dan kebaya.'
],
[
'title' => 'Dress Turkish Glam',
'category' => 'Attire B',
'image' => 'Dress turkishAttire b.jpg',
'desc' => 'Gaun pengantin bergaya Turkish mewah dengan payet eksklusif untuk penampilan istimewa.'
],
[
'title' => 'Olive Royal Kebaya',
'category' => 'Attire C',
'image' => 'OliveAttire c.jpg',
'desc' => 'Busana pengantin warna olive anggun dengan detail bordir halus dan siluet menawan.'
],
[
'title' => 'Sage Elegance Kebaya',
'category' => 'Attire D',
'image' => 'Sage Attire c.jpg',
'desc' => 'Sentuhan warna sage lembut nan elegan yang memberikan pesona segar di hari pernikahan.'
]
];
@endphp

<section class="section-padding attire-section" id="attire">
    <div class="container">
        <div class="section-heading" data-aos="fade-up">
            <span class="eyebrow">Koleksi Busana</span>
            <h2>Rena Attire & Gallery</h2>
            <p>
                Pilihan gaun dan kebaya pengantin istimewa, memadukan keanggunan tradisi dengan sentuhan kemewahan modern untuk hari bahagiamu.
            </p>
        </div>

        <div class="row g-4">
            @foreach ($attires as $index => $item)
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                <div class="attire-card">
                    <div class="attire-img-wrap">
                        <img src="{{ asset('images/' . $item['image']) }}"
                            alt="{{ $item['title'] }}"
                            loading="lazy">
                        <span class="attire-badge">{{ $item['category'] }}</span>
                    </div>
                    <div class="attire-body">
                        <h4>{{ $item['title'] }}</h4>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex flex-wrap justify-content-center gap-3 mt-5" data-aos="fade-up">
            <a href="https://wa.me/6285747356369?text=Halo%20Rena%20Wedding,%20saya%20ingin%20tanya%20koleksi%20fitting%20attire%20pengantin"
                target="_blank" rel="noopener noreferrer"
                class="btn btn-rena">
                Konsultasi & Fitting Attire
            </a>

            <a href="https://www.instagram.com/renawedding_attire/"
                target="_blank" rel="noopener noreferrer"
                class="btn btn-outline-rena">
                Instagram Koleksi Attire
            </a>
        </div>
    </div>
</section>