<?php
    require('../src/init.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php require(get_path('public/partials/global/head.php'));  ?> 
    <body>
        <?php 
            require(get_path('public/partials/global/header.php'));
        ?>
        <main>
            <section class="banner">
                <div>
                    <h1>Forward</h1>
                    <p>The place to connect with local mentors</p>
                    <a href="#" title="Sign Up" class="btn">Get Started</a>
                </div>
                <img src="<?php echo get_public_url('/images/hero-banner.jpg'); ?>" alt="Two women looking at a laptop screen">
            </section>
            <section class="features">
                <ul>
                    <li>
                        <img src="<?php echo get_public_url('/images/people-icon.svg'); ?>" alt="people icon">
                        <p>Browse our list of expert mentors and apply</p>
                    </li>
                    <li>
                        <img src="<?php echo get_public_url('/images/work-icon.svg'); ?>" alt="work icon">
                        <p>Post your best work on our project showcase to get feedback and connect with fellow peers and mentors</p>
                    </li>
                    <li>
                        <img src="<?php echo get_public_url('/images/question-icon.svg'); ?>" alt="Question icon">
                        <p>Don't know where to start? Take our survey to get matched with local mentors to help kickstart your journey!</p>
                    </li>
                </ul>
            </section>
            <section class="testimonials">
                <ul>
                    <li>
                        <div>
                            <img src="<?php echo get_public_url('/images/mentee-1.jpg'); ?>" alt="smiling woman">
                            <p>Rachel Garcia</p>
                        </div>
                        <p>I love mentoring because it feels amazing to see my mentees succeed. I was thrilled to be able to mentor a young coder through this mentorship program. It was an incredibly rewarding experience to be able to share my knowledge and expertise with someone who was just starting out in the field.</p>
                    </li>
                    <li>
                        <div>
                            <img src="<?php echo get_public_url('/images/mentor-1.jpg'); ?>" alt="Smiling man">
                            <p>Benjamin Moreno</p>
                        </div>
                        <p>I felt so lost during my job search, I felt like I had no one to turn to. But with Forward, I was matched with a mentor that helped me gain back my confidence and encouraged me to not feel discouraged. They also gave me honest feedback on my work, challenged me to push my boundaries, and supported me every step of the way.</p>
                    </li>
                    <li>
                        <div>
                            <img src="<?php echo get_public_url('/images/mentee-2.jpg'); ?>" alt="Smiling Man">
                            <p>Elijah Kingston</p>
                        </div>
                        <p>I learned the latest design tools and techniques, gained valuable industry insights, and built a strong portfolio that showcased my skills and experience. Thanks to my mentor's guidance and support, I was able to land my dream job as a UI/UX designer, and I haven't looked back since.</p>
                    </li>
                </ul>
            </section>
        </main>
        <?php 
            require(get_path('public/partials/global/footer.php'));
        ?>
    </body>
</html>