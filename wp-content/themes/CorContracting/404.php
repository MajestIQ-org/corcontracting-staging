<?php get_header(); ?>

<section class="redirection">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="content text-center">
                <h1 class="text-gold mb-32">404</h1>
                <h2 class="text-foreground mb-16">Page Not Found</h2>
                <p class="text-muted-foreground mb-32">Sorry, we couldn't find the page you're looking for. It may have
                    been moved or no longer exists.</p>

                <div class="looking-something mb-32">
                    <p class="mb-16 fs-16 d-flex text-muted-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                        <span>Looking for something specific?</span>
                    </p>
                    <p class="mb-0 text-muted-foreground fs-14"> Try visiting our <a class="text-gold"
                            href="<?php echo $redirect_url; ?>/services">Services
                            page</a> or use the links below to find what you need.</p>
                </div>

                <div class="popular-pages mb-40">
                    <p class="text-foreground mb-16">Popular Pages</p>
                    <div class="popular-cta">
                        <a href="<?php echo $redirect_url; ?>/kitchen-remodeling">
                            Kitchen Remodeling
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="<?php echo $redirect_url; ?>/bathroom-remodeling">
                            Bathroom Remodeling
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="<?php echo $redirect_url; ?>/services">
                            Our Services
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="<?php echo $redirect_url; ?>/contact">
                            Get a Free Quote
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>

                        <a href="<?php echo $redirect_url; ?>/contact">
                            Contact Us
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right h-3 w-3">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="cta_group mb-40">
                    <a href="<?php echo $redirect_url; ?>/" class="bg-gold fs-14">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                            <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                            </path>
                        </svg>
                        Back to Home
                    </a>

                    <a href="<?php echo $redirect_url; ?>/contact" class="bg-blue-line h-48">Contact Us</a>
                </div>

                <div class="contact-call">
                    <p class="text-muted-foreground fs-16 mb-2">Need help? Give us a call:</p>
                    <a href="tel:7323433709" aria-label="Call CorContracting" class="text-gold fs-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <b>(732) 343-3709</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>