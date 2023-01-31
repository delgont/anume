<?php

return [

    'pages' => [
        [
            'post_title' => 'home',
            'post_featured_image' => 'img/hedaer/hedaer.jpg',
            'post_content' => ',
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in</p>
            <p>Parturient montes na erat pellentesque adipiscing commodo elit. Id diam maec</p>',
            'slug' => 'home',
            'post_type' => 'page',
            'template' => 'web.index'
        ],
        [
            'post_title' => 'contact us',
            'post_featured_image' => 'img/header/header.jpg',
            'slug' => 'contact-us',
            'post_type' => 'page',
            'template' => 'web.templates.contact-us'
        ],
        [
            'post_title' => 'our team',
            'post_featured_image' => 'img/header/header.jpg',
            'slug' => 'about-us/our-team',
            'post_type' => 'page',
            'template' => 'web.templates.team-page'
        ],
        [
            'post_title' => 'academic programs',
            'post_featured_image' => 'img/header/header.jpg',
            'slug' => 'academic-programs',
            'template' => 'web.templates.default-page',
            'post_type' => 'page'
        ],
        [
            'post_title' => 'how to apply',
            'post_featured_image' => 'img/header/header.jpg',
            'post_content' => '
            <p>Welcome and thanks for your interest in our school.</p>
            <p>Admissions to AAMSNM is a great start to your career as a medical (health) worker (professional). We offer both certificate and diploma courses in nursing and midwifery.</p>
            <p>Candidates (applicants) are admitted on either discipline when they have passed English, Mathematics, Biology, Chemistry, and Physics with at least a pass in a single seating. The selection process is always done through written and oral interviews of which average is taken and this is done for internal quality control purposes where the right students to be admitted to the institution is arrived at if he/she has scored 50% or above.</p>
            <h5>Application Procedure</h5>
            <p>To secure a place in AAMSNM starts with requesting an application form from the registrars office. To complete the entire process, there are a few steps to follow as listed below.</p>
            <ol>
            <li>Obtain an application form from the aregistrars office and fill it with relevant information.</li>
            <li>Provide proof of having completed your ordinary level education. Applicants are required to provide a copy of valid relevant academic documents, after which eligible applicants will be shortlisted for interviews.</li>
            </ol>
            <p><b>Note:</b> Application form can be download, filled with relevant information and then submitted to admissions office. The application form and relevant academic documents can also be scanned and submitted to the admissions office email address</p>',
            'slug' => 'admissions/how-to-apply',
            'post_type' => 'page',
            'template' => 'web.templates.default-page'
        ],
        [
            'post_title' => 'privacy policy',
            'post_featured_image' => 'img/header/header.jpg',
            'extract_text' => 'By accessing Alice Anume website, you are accepting the terms of use and the practices described in this privacy policy',
            'post_content' => '
            <p>Please carefully read the terms and conditions for the use of our website.</p>
            <p>By accessing Alice Anume website, you are accepting the terms of use and the practices described in this privacy policy.</p>
            <p>We respect the privacy of all our website visitors as well as those who subscribe to our newsletters or share any personal information with us through the forms within the website. We only collect personal information such as names, date of birth, email address, phone numbers etc. voluntarily. Your personal information will never be sold, leased, rented, or otherwise disclosed in any manner.</p>
            <p><b>Note:</b> Some of the links on our website will redirect you to a third-party websites; hence, we are not responsible for the privacy policy of any other website. Our privacy policy only applies to information collected while on the school website.</p>
            <h5><u>Cookies</u></h5>
            <p>We may use cookies for tracking page visits and other aggregate website statistics. These cookies do not contain any identifiable personal information and are only used to improve the functionality of our website and your experience while on our site.</p>
            <h5><u>Copyright</u></h5>
            <p>All content on the website, including but not limited to designs, text, graphics, pictures, videos, software, and other files are a sole property of AAMSNM, protected by copyright with all rights reserved.</p>
            <p>No website content may be modified, copied, distributed, reproduced, republished, or sold in any form or by any means without prior written permission from AAMSNM.</p>
            ',
            'slug' => 'about/privacy-policy',
            'post_type' => 'page',
            'template' => 'web.templates.default-page'
        ],
        [
            'post_type' => 'course',
            'post_featured_image' => 'img/header/header.jpg',
            'extract_text' => 'Duration: 2 and half years, O Level certicate completed not more than 3 years, Pass in englisg, Mathematics and Biology and Must be 18 years and above',
            'post_title' => 'certificate in nursing',
            'post_content' => '<h4>Duration: 3 Years</h4><h5>Admission Requirements</h5><p>Uganda Advanced Certificate Of Education <b>(“A-Level”)</b> in sciences with a Principal Pass in Biology & a subsidiary Pass in Chemistry</p>',
            'slug' => 'academic-programs/certificate-in-nursing'
        ],
        [
            'post_type' => 'course',
            'post_featured_image' => 'img/header/header.jpg',
            'extract_text' => 'Duration: 2 and half years, O Level certicate completed not more than 3 years, Pass in englisg, Mathematics and Biology and Must be 18 years and above',
            'post_title' => 'certificate in midwifery',
            'post_content' => '<h4>Duration: 3 Years</h4><h5>Entry Requirements</h5><p>Uganda Advanced Certificate Of Education <b>(“A-Level”)</b> in sciences with a Principal Pass in Biology & a subsidiary Pass in Chemistry</p>',
            'slug' => 'academic-programs/certificate-in-midwifery'
        ],
        [
            'post_type' => 'course',
            'post_featured_image' => 'img/header/header.jpg',
            'extract_text' => 'Duration: 1 and half years, UACE, Principal pass in Biology and subsidiary pass in Chemistry, Physics or Agriculture',
            'post_title' => 'diploma in midwifery extension',
            'post_content' => '<h4>Duration: 1 and half years</h4><h5>Entry Requirements</h5><p>Uganda Advanced Certificate Of Education <b>(“A-Level”)</b> in sciences with a Principal Pass in Biology & a subsidiary Pass in Chemistry, Physics or Agriculture</p>',
            'slug' => 'academic-programs/diploma-in-midwifery-extension'
        ],
        [
            'post_type' => 'course',
            'post_featured_image' => 'img/header/header.jpg',
            'extract_text' => 'Duration: 1 and half years, 2 years work experience as a nurse and principal pass in Biology',
            'post_title' => 'diploma in nursing extension',
            'post_content' => '<h4>Duration: 1 and half years</h4><h5>Entry Requirements</h5><p>2 years work experience as a nurse, Principal pass in Biology</p>',
            'slug' => 'academic-programs/diploma-in-nursing-extension'
        ]
    ]

];