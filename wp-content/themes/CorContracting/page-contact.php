<?php /*Template Name: Contact */
get_header(); ?>
<section class="global-banner ">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="header_content m-auto text-center">
                <?php if ($sub = get_field('subheading')): ?>
                    <p class="fs-14 subheading text-gold mb-16"><?php echo esc_html($sub); ?></p>
                <?php endif; ?>

                <?php if ($heading = get_field('heading')): ?>
                    <h1 class=" text-white mb-16"><?php echo esc_html($heading); ?></h1>
                <?php endif; ?>

                <?php if ($content = get_field('content')): ?>
                    <p class="mb-0"><?php echo get_field('content'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact bg-graylight">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="d-flex">
                <div class="form_details">
                    <div class="form-container mb-32">
                        <h3>Request Your Free Quote</h3>
                        <p class="mb-24 text-muted-foreground fs-16">Tell us about your project and we'll get back to
                            you within 30 minutes.</p>
                        <?php
                        echo do_shortcode('[contact-form-7 id="b62d7ab" title="Main Contact Form"]');
                        ?>
                        <p class="fs-12 text-muted-foreground text-center">We respect your privacy. Your information is
                            never shared.</p>
                    </div>
                    <div class="form_card_container">
                        <div class="form_card">
                            <p class="mb-0 text-foreground fs-12 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-shield h-6 w-6 text-cta mb-2">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                                NJ License #13VH12260000
                            </p>
                        </div>
                        <div class="form_card">
                            <p class="mb-0 text-foreground fs-12 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-award h-6 w-6 text-cta mb-2">
                                    <path
                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                    </path>
                                    <circle cx="12" cy="8" r="6"></circle>
                                </svg>
                                Schluter Systems Certified
                            </p>
                        </div>
                        <div class="form_card">
                            <p class="mb-0 text-foreground fs-12 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-credit-card h-6 w-6 text-cta mb-2">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg>
                                $0 Down Financing
                            </p>
                        </div>
                        <div class="form_card">
                            <p class="mb-0 text-foreground fs-12 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-star h-6 w-6 text-cta mb-2">
                                    <path
                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                    </path>
                                </svg>
                                4.9/5 Google Rating (50+ Reviews)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header_content">
                    <h2 class="fs-20 text-foreground mb-24">Contact information</h2>
                    <div class="contact-detail mb-32">
                        <a class="contact-item b-blue" href="tel;l:7323433709">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-phone h-6 w-6 text-white">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <p class="text-foreground"><span class="fs-14">Call Now</span><span class="fs-20"
                                    style="color: #fff;"><b>(732)
                                        343-3709</b></span></p>
                        </a>
                        <div class="contact-item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin h-6 w-6 text-cta">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <p class="text-foreground"><span class="fs-14">214 S 9th Ave</span><span
                                    class="fs-14">Highland
                                    Park, NJ
                                    08904</span>
                            </p>
                        </div>
                        <a class="contact-item" href="mailto:Corey@Cor-Contracting.com">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-mail h-6 w-6 text-cta">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>
                            </div>
                            <p class="text-foreground"><span class="fs-14">Corey@Cor-Contracting.com</span><span
                                    class="fs-14">We reply within 1
                                    hour</span></p>
                        </a>
                        <div class="contact-item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-clock h-6 w-6 text-cta">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <p class="text-foreground"><span class="fs-14">Business Hours</span><span
                                    class="fs-14">Mon-Fri: 8
                                    AM – 6:30
                                    PM<br>Sat:
                                    8 AM – 2 PM<br>Sunday: Closed</span></p>
                        </div>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.5!2d-74.4274!3d40.4965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7d0a0a0a0a0%3A0x0!2s214%20S%209th%20Ave%2C%20Highland%20Park%2C%20NJ%2008904!5e0!3m2!1sen!2sus!4v1702000000000!5m2!1sen!2sus"
                        width="100%" height="200" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" title="CorContracting Location - Highland Park, NJ"
                        style="border: 0px;"></iframe>
                    <div class="text-center view-all"><a class="text-cta fs-14"
                            href="<?php echo $redirect_url; ?>/areas-served/">View All Service Areas →</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>