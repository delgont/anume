<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Menus
    |--------------------------------------------------------------------------
    */
    'menus' => [
        'main_menu' => 'main menu',
        'footer_menu' => 'footer menu',
        'top_bar_menu' => 'top bar menu'
    ],

    'main_menu_max_item_level' => 1,

    /*
    |--------------------------------------------------------------------------
    | Default Menu Items
    | For the post key use the post titles for your default posts in the data configuration file
    |--------------------------------------------------------------------------
    */
    'main_menu' => [
        ['label' => 'home', 'sort' => '1', 'post' => 'home'],

        ['label' => 'about us', 'sort' => '2', 'post' => 'about us'],
        ['label' => 'who we are', 'sort' => '1', 'post' => 'who we are', 'parent' => 'about us'],
        ['label' => 'quick facts', 'sort' => '2', 'post' => 'quick facts', 'parent' => 'about us'],
        ['label' => 'our staff', 'sort' => '3', 'post' => 'our team', 'parent' => 'about us'],
        ['label' => 'facilities', 'sort' => '2', 'post' => 'facilities', 'parent' => 'about us'],

        ['label' => 'academics', 'sort' => '3', 'post' => 'academics', 'slug' => 'academics'],
        ['label' => 'academic programs', 'sort' => '1', 'post' => 'academic programs', 'parent' => 'academics', 'slug' => 'academics/academic-programs'],
        ['label' => 'learning facilities', 'sort' => '2', 'post' => 'learning facilities', 'parent' => 'academics', 'slug' => 'academics/learning-facilities'],
        ['label' => 'online learning', 'sort' => '3', 'post' => 'online learning', 'parent' => 'academics', 'slug' => 'academics/online-learning'],
        ['label' => 'self asessment', 'sort' => '4', 'post' => 'self assesment', 'parent' => 'academics', 'slug' => 'academics/self-assesment'],


        ['label' => 'admissions', 'sort' => '4', 'post' => 'admissions'],
        ['label' => 'how to apply', 'sort' => '1', 'post' => 'how to apply', 'parent' => 'admissions', 'slug'=> 'admissions/how-to-apply'],
        ['label' => 'why choose us', 'sort' => '2', 'post' => 'why choose us', 'parent' => 'admissions', 'slug' => 'admissions/why-choose-us'],
        ['label' => 'frequently asked questions', 'sort' => '3', 'post' => 'frequently asked questions', 'parent' => 'admissions', 'slug' => 'admissions/frequently-asked-questions'],
        ['label' => 'important dates', 'sort' => '4', 'post' => 'important dates', 'parent' => 'admissions', 'slug' => 'admissions/important-dates'],

        ['label' => 'news & stories', 'sort' => '5', 'post' => 'news and anoucements', 'slug' => 'news-anoucements'],

        ['label' => 'campus life', 'sort' => '6', 'post' => 'campus life', 'slug' => 'campus-life'],
        ['label' => 'athletics & recreation', 'sort' => '1', 'post' => 'athletics', 'parent' => 'campus life', 'slug'=> 'campus-life/athletics'],
        ['label' => 'residence & housing', 'sort' => '1', 'post' => 'housing', 'parent' => 'campus life', 'slug'=> 'campus-life/housing'],
        ['label' => 'student goverment', 'sort' => '1', 'post' => 'student goverment', 'parent' => 'campus life', 'slug'=> 'campus-life/student-government'],

        ['label' => 'contact us', 'sort' => '7', 'post' => 'contact us']
    ],

    'footer_menu' => [
        ['label' => 'about us', 'sort' => '2', 'post' => 'about us'],
        ['label' => 'who we are', 'sort' => '1', 'post' => 'who we are', 'parent' => 'about us'],
        ['label' => 'quick facts', 'sort' => '2', 'post' => 'quick facts', 'parent' => 'about us'],
        ['label' => 'our staff', 'sort' => '3', 'post' => 'our team', 'parent' => 'about us'],
        ['label' => 'facilities', 'sort' => '2', 'post' => 'facilities', 'parent' => 'about us'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Your navbar view file - used to provide navbar items
    */
    'navbar' => 'web.includes.navbar',

    /*
    |--------------------------------------------------------------------------
    | Default Post types
    |--------------------------------------------------------------------------
    | Even though posts may be categorized futher, each post must belong to a specific type
    | Post types can also be entered manually via the cms keeping in mind that they must belong to specific pages or categories
    */
    'post_types' => [
        'news and anoucements',
        'job advertisement',
        'course',
        'testimonial',
        'faq',
        'team member',
        'facility'
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Categories -- used to categorise posts and any model that uses the Categorable trait
    |--------------------------------------------------------------------------
    */
    'categories' => [
        'important downloads', 'diploma courses', 'certificate courses', 'faqs', 'life style', 'facility', 'home slide', 'testmonial'
    ],

    'options' => [
        'aamsnm_phone' => '+256 77268 0223',
        'aamsnm_email' => 'anume.nursing@ymail.com',
        'aamsnm_address' => 'P.O BOX 07 Pallisa, Uganda',
        'aamsnm_location' => '1 KM Pallisa - Kumi Road, Kalaki Sub-County',
        'aamsnm_map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127672.19227345142!2d32.85412942158062!3d0.32021876345015765!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1779268da3babd27%3A0x9f7a3f1ada1183d!2sAlice%20Anume%20Nursing%20School!5e0!3m2!1sen!2sug!4v1647688302320!5m2!1sen!2sug',
        'aamsnm_logo' => 'img/aamsnm_logo.png',
        'aamsnm_favicon' => 'img/icons/favicon.jpg',
        'aamsnm_vision' => '<p>The school’s vision is to become a well-recognized school of excellence in nursing and midwifery, producing proficient medical personnel at both Diploma and Certificate levels.</p>',
        'aamsnm_mission' => '<p>To nurture, propagate and develop the ambition of young men and women to become proficient health service providers who will go beyond the call of the medical profession and daily duty to serve humanity</p>',
        'aamsnm_facebook' => 'www.facebook.com/aliceanume.org',
        'aamsnm_twitter' => '',
        'aamsnm_instagram' => '',
        'aamsnm_objectives' => '',
        'aamsnm_header_image' => 'img/header/header.jpg',
        'aamsnm_events_date_format' => 'F j, Y',
        
    ],

     /**
     * Extend the links in the UI 
     */
    'sidebar_extension' => [
        'web::dashboard.sidebar.links',
        'anume::dashboard.sidebar.anume'
    ],

    'templates' => [
        'web.templates.team-member-page' => ['name' => 'Team Member Page', 'preview' => 'img/templates/home-page.png', 'description' => 'Shows a single team member and other team members'],
        'web.templates.faqs-page' => ['name' => 'FAQs', 'preview' => 'img/templates/home-page.png', 'description' => 'Shows frequently asked questions'],
        'web.templates.default-page' => ['name' => 'Default Page', 'preview' => 'img/templates/home-page.png', 'description' => 'Shows page content and posts of specific type if specified'],
        'web.templates.news-page' => ['name' => 'News Page', 'preview' => 'img/templates/home-page.png', 'description' => 'Shows single news article'],
        'web.templates.news-feed-page' => ['name' => 'News Feed Page', 'preview' => 'img/templates/home-page.png', 'description' => 'Shows latest news'],
        'web.templates.courses-page' => ['name' => 'courses page', 'preview' => 'img/templates/default-page.jpg', 'description' => 'Shows courses if specified post type is course'],
        'web.templates.course-page' => ['name' => 'course page', 'preview' => 'img/templates/default-page.jpg', 'description' => 'Shows courses if specified post type is course'],
        'web.templates.ofType-page' => ['name' => 'Type Page', 'preview' => 'img/templates/ofType-page.jpg', 'description' => 'Shows page and lists the related post types'],
        'web.templates.ofCategory-page' => ['name' => 'Category Page', 'preview' => 'img/templates/ofCategory-page.jpg', 'description' => 'Shows page and lists the related post categories']
    ],

    'sections' => [
        'web.sections.intro' => ['name' => 'Intro Section', 'preview' => '', 'description' => 'Brief intro about the school'],
        'web.sections.contact-us' => ['name' => 'Contact Us Section', 'preview' => '', 'description' => 'Contact us form and contact details']
    ],

    'roles' => [
        'registrar'
    ],

    'permissions' => [
        'manage_events' => 'Create, Edit and delete events'
    ]

];