<?php
$d1 = new DateTime();
$d2 = new DateTime('1996-12-18');

$age = $d2->diff($d1)->y;
?>

<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">Once upon a time...</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 text-center">
                <img class="about-photo" src="{{ asset("img/about/sander-grandia.png") }}"/>
            </div>
            <div class="col-lg-7 col-lg-offset-0 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 about-text">
                <p>
                    ...there was a <?=$age?> years old man from The Netherlands who was determined to undo the world of all bugs. 🪲
                </p>
                <p>
                    He graduated with honors from the 🎓 HBO bachelor software engineering from the Avans University in 2018.
                    During his education, he focused on web and mobile development. Also, he did a minor in 'Meaningful Data Design'.
                </p>
                <p>
                    He has experience with 🔊 audio-video hardware and production of large business meetings.
                    He assisted with developing and testing new innovative set-ups to improve the collaboration at the Dutch administration of justice.
                </p>
                <p>
                    Now, he's working as a 🧩 senior PHP Backend Developer at Bluebird Day. He fights all bugs found in e-commerce platforms like Magento 2, Shopware 6 and Drupal 10, and implements new custom features.
                    Also, he specializes in integration platforms which connect platforms, like SAP, Pimcore and others, to the e-commerce solution.
                </p>
                <p>
                    As the team-lead, helping 🤝 others developing themselves is what brings him joy.
                </p>
                <p>
                    His other interests are 🚵 mountain biking through the mud, 🎸 playing guitar, 🏔 Scandinavia's nature and 🇯🇵🚗 JDM cars.
                </p>
            </div>
        </div>
    </div>
</section>
