<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($categorias as $categoria)
        <url>
            <loc>https://www.alacermas.com/es/categoria/{{ $categoria->slug }}</loc>
            <xhtml:link
                rel="alternate"
                hreflang="ca"
                href="https://www.alacermas.com/ca/categoria/{{ $categoria->slug }}"
            />
            <xhtml:link
                rel="alternate"
                hreflang="en"
                href="https://www.alacermas.com/en/categoria/{{ $categoria->slug }}"
            />
            <xhtml:link
                rel="alternate"
                hreflang="fr"
                href="https://www.alacermas.com/fr/categoria/{{ $categoria->slug }}"
            />
            <lastmod>{{ $startOfMonth }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>