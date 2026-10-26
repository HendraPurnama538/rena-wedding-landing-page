@php
$catalogs = [
[
'title' => 'Makeup Package',
'image' => 'makeup-package.jpg',
],
[
'title' => 'Makeup & Attire Package',
'image' => 'makeup-attire.jpg',
],
[
'title' => 'Syarat & Ketentuan Wedding',
'image' => 'syarat-wedding.jpg',
],
[
'title' => 'Wedding Package Bronze',
'image' => 'paket-wedding.jpg',
],
[
'title' => 'Makeup Pricelist',
'image' => 'pricelist-makeup.jpg',
],
[
'title' => 'Prawedding Package',
'image' => 'prewedding.jpg',
],
[
'title' => 'Siraman Package',
'image' => 'siraman.jpg',
],
[
'title' => 'Syarat Private Class',
'image' => 'syarat-private.jpg',
],
[
'title' => 'Private Makeup',
'image' => 'private-makeup.jpg',
],
];
@endphp

<section class="section-padding catalog-section" id="katalog">
    <div class="container">
        <div class="section-heading" data-aos="fade-up">
            <span class="eyebrow">Katalog resmi</span>
            <h2>Jelajahi Katalog Kami</h2>
            <p>
                Lihat rincian paket, fasilitas, harga, dan ketentuan
                melalui katalog Rena Wedding Service.
            </p>
        </div>

        <div class="row g-4">
            @foreach ($catalogs as $index => $catalog)
            <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="{{ ($index % 3 + 1) * 100 }}">
                <div class="catalog-item-wrapper">
                    <button
                        type="button"
                        class="border-0 bg-transparent p-0 w-100"
                        data-catalog-image="{{ asset('images/' . $catalog['image']) }}"
                        data-catalog-title="{{ $catalog['title'] }}"
                        data-bs-toggle="modal"
                        data-bs-target="#catalogModal"
                        aria-label="Perbesar {{ $catalog['title'] }}">
                        <img
                            src="{{ asset('images/' . $catalog['image']) }}"
                            alt="{{ $catalog['title'] }}"
                            class="catalog-image"
                            loading="lazy">
                    </button>

                    <p class="catalog-title">
                        {{ $catalog['title'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Modal untuk memperbesar gambar --}}
<div class="modal fade" id="catalogModal" tabindex="-1"
    aria-labelledby="catalogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content; margin: auto;">
        <div class="modal-content mx-auto"
            style="background: var(--cream); border-radius: 18px; border: 1px solid #ead8c9; box-shadow: 0 15px 40px rgba(0,0,0,0.25); overflow: hidden;">
            <div class="modal-header border-0 pb-2 pt-3 px-3 px-sm-4 d-flex justify-content-between align-items-center">
                <h5 class="modal-title fs-5 mb-0" id="catalogModalLabel" style="font-weight: 600; color: var(--brown);">
                    Katalog Rena Wedding
                </h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>

            <div class="modal-body text-center p-2 p-sm-3 pt-0">
                <img id="catalogModalImage"
                    src=""
                    alt=""
                    class="img-fluid rounded-3"
                    style="max-height: 82vh; width: auto; max-width: min(90vw, 560px); object-fit: contain; display: block; margin: 0 auto; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.querySelectorAll('[data-catalog-image]').forEach(function(button) {
        button.addEventListener('click', function() {
            const image = document.getElementById('catalogModalImage');

            image.src = button.dataset.catalogImage;
            image.alt = button.dataset.catalogTitle;

            document.getElementById('catalogModalLabel').textContent =
                button.dataset.catalogTitle;
        });
    });
</script>
@endpush