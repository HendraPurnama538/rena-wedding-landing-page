
@php
    $phone = config('app.contact.whatsapp');
    $message = $message ?? 'Halo Rena Wedding, saya ingin bertanya mengenai layanan wedding.';
    $whatsappUrl = $phone
        ? 'https://wa.me/' . $phone . '?text=' . rawurlencode($message)
        : null;
@endphp

@if ($whatsappUrl)
    <a
        href="{{ $whatsappUrl }}"
        class="btn-wedding"
        target="_blank"
        rel="noopener noreferrer"
    >
        {{ $label ?? 'Konsultasi via WhatsApp' }}
    </a>
@else
    <span class="text-muted small">
        Hubungi kami melalui WhatsApp
    </span>
@endif
