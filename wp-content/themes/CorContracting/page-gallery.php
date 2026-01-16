<?php /*Template Name: Gallery */
get_header(); ?>
<section class="global-banner ">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content">
                <?php if ($sub = get_field('gallery_subheading')): ?>
                    <p class="fs-14 subheading text-gold mb-16"><?php echo esc_html($sub); ?></p>
                <?php endif; ?>

                <?php if ($heading = get_field('gallery_heading')): ?>
                    <h1 class=" text-white mb-16"><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>

                <?php if ($content = get_field('gallery_content')): ?>
                    <p class="mb-0"><?php echo get_field('gallery_content'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php while (have_posts()):
    the_post(); ?>

    <?php
    $rows = get_field('gallery_card');
    $types = [];

    if ($rows) {
        foreach ($rows as $r) {
            if (!empty($r['gallery_type'])) {
                $types[] = $r['gallery_type'];
            }
        }
        $types = array_values(array_unique($types));
    }
    ?>
    <section class="gallery navigation">
        <div class="container-fluid">
            <div class="wrapper"> <!-- FILTER TABS -->
                <ul class="nav nav-pills justify-content-center gap-2" id="galleryFilters">
                    <li class="nav-item">
                        <button class="nav-link active" type="button" data-filter="all">All</button>
                    </li>

                    <?php foreach ($types as $type): ?>
                        <li class="nav-item">
                            <button class="nav-link" type="button" data-filter="<?php echo esc_attr(sanitize_title($type)); ?>">
                                <?php echo esc_html($type); ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="gallery group-images">
        <div class="container-fluid">
            <div class="wrapper text-center">

                <div class="d-grid" id="galleryGrid">
                    <?php if ($rows): ?>
                        <?php foreach ($rows as $row):

                            $type = $row['gallery_type'];
                            $slug = sanitize_title($type);
                            $img_url = $row['gallery_image']; // URL (string)
                
                            if (!$img_url)
                                continue;
                            ?>

                            <div class="gallery-item" data-category="<?php echo esc_attr($slug); ?>">

                                <a class="gallery-card" href="#" data-image="<?php echo esc_url($img_url); ?>">
                                    <div class="sub-text">
                                        <?php echo esc_html($type); ?>
                                    </div>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($type); ?>"
                                        class="card-image" loading="lazy">

                                    <div class="overlay">
                                        <p class="fs-14 mb-0">Click to view full size</p>
                                    </div>
                                </a>

                            </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content gallery-modal-content">
            <div class="close">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-0">
                <img id="galleryModalImage" src="" alt="" class="img-fluid gallery-modal-image">
            </div>

        </div>
    </div>
</div>
<section class="cta_group">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content">
                <div class="header_content mb-32 text-center">
                    <h2 class="text-white mb-16 h3">Like What You See?</h2>
                    <p class="mb-0 text-white">Let's discuss your project.</p>
                </div>
                <div class="cta d-flex gap-3 justify-content-center">
                    <a href="#contact" class="bg-white-light h-48 fs-14">Get Free Quote</a>
                    <a href="tel:7323433709" class="bg-trans h-48 fs-14">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-phone h-4 w-4">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg> 7323433709
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    (function () {
        const filters = document.getElementById('galleryFilters');
        const grid = document.getElementById('galleryGrid');

        const modalEl = document.getElementById('galleryModal');
        const modalImg = document.getElementById('galleryModalImage');
        const btnPrev = document.getElementById('galleryPrev');
        const btnNext = document.getElementById('galleryNext');

        if (!filters || !grid || !modalEl) return;

        const tabs = [...filters.querySelectorAll('[data-filter]')];
        const items = [...grid.querySelectorAll('.gallery-item')];

        let visibleCards = [];
        let currentIndex = 0;

        /* ======================
           HASH FILTERING
        ====================== */

        function getFilter() {
            const hash = location.hash.replace('#', '').toLowerCase();
            if (!hash) return 'all';
            return tabs.some(t => t.dataset.filter === hash) ? hash : 'all';
        }

        function applyFilter(filter) {
            tabs.forEach(t => t.classList.toggle('active', t.dataset.filter === filter));

            items.forEach(item => {
                const cat = item.dataset.category;
                item.style.display = (filter === 'all' || cat === filter) ? '' : 'none';
            });
        }

        function syncFilter() {
            applyFilter(getFilter());
        }

        filters.addEventListener('click', e => {
            const btn = e.target.closest('[data-filter]');
            if (!btn) return;
            e.preventDefault();

            const f = btn.dataset.filter;
            if (f === 'all') {
                history.replaceState(null, '', location.pathname);
                syncFilter();
            } else {
                location.hash = f;
            }
        });

        window.addEventListener('hashchange', syncFilter);
        syncFilter();

        /* ======================
           MODAL LOGIC
        ====================== */

        function collectVisibleCards() {
            visibleCards = [...grid.querySelectorAll('.gallery-item')]
                .filter(i => i.style.display !== 'none')
                .map(i => i.querySelector('.gallery-card'));
        }

        function showImage(index) {
            if (!visibleCards[index]) return;
            modalImg.src = visibleCards[index].dataset.image;
            currentIndex = index;
        }

        grid.addEventListener('click', e => {
            const card = e.target.closest('.gallery-card');
            if (!card) return;
            e.preventDefault();

            collectVisibleCards();
            currentIndex = visibleCards.indexOf(card);
            showImage(currentIndex);

            bootstrap.Modal.getOrCreateInstance(modalEl).show();
        });

        btnPrev.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + visibleCards.length) % visibleCards.length;
            showImage(currentIndex);
        });

        btnNext.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % visibleCards.length;
            showImage(currentIndex);
        });

    })();
</script>

<?php get_footer(); ?>