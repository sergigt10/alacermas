<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($statics as $static)
        <url>
            <loc>https://www.alacermas.com/es/{{ $static }}</loc>
            <xhtml:link
                rel="alternate"
                hreflang="ca"
                href="https://www.alacermas.com/ca/{{ $static }}"
            />
            <xhtml:link
                rel="alternate"
                hreflang="en"
                href="https://www.alacermas.com/en/{{ $static }}"
            />
            <xhtml:link
                rel="alternate"
                hreflang="fr"
                href="https://www.alacermas.com/fr/{{ $static }}"
            />
            <lastmod>{{ $startOfMonth }}</lastmod>
            <changefreq>yearly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>