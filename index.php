<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri()?>./bootstrap.min.css"> -->



    <?php wp_head();?>
</head>
<body>
    <!-- =======topbar=== -->
    <header class="cont">
        <div class="topbar row">
            <div class="col-lg-6 left-top">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 right-top text-end">
                <p class="d-inline-block">৬ অগ্রহায়ণ, ১৪২৯</p>
                <a href="">English</a>
            </div>
        </div>
    </header>


<!-- ========logo======== -->

    <div class="cont">
        <div class="header row">
            <div class="col-lg-5 logo">
                <?php the_custom_logo();?>
                <img src="<?=get_template_directory_uri()?> ./img/header/logo_bn.png" alt="">
            </div>
            <div class="col-lg-5 logo-search">
                <form action="">
                    <input type="text" placeholder="খুঁজুন ">
                    <button>অনুসন্ধান</button>
                </form>
                
            </div>
            <div class="col-lg-2 logo-links d-flex justify-content-end">
                <div class="ff">
                    <img src="<?=get_template_directory_uri()?> ./img/header/a2i-logo-footer.png" alt="">
                </div>
                <div class="links">
                    <p>সাথে থাকুন:</p>
                    <img src="<?=get_template_directory_uri()?> ./img/header/facebook-icon.png" alt="">
                    <img src="<?=get_template_directory_uri()?> ./img/header/gplus-icon.png" alt="">
                    <img src="<?=get_template_directory_uri()?> ./img/header/twitter-blue-icon.png" alt="">
                    <img src="<?=get_template_directory_uri()?> ./img/header/youtube-icon.png" alt="">
                </div>
            </div>
        </div>
    </div>


<!-- ====menubar=== -->
    <div class="cont">
        <div class="menubar">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">হোম</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাখাত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">বৈদেশিক বিনিয়োগ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">আইন-বিধি</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">তথ্য বাতায়ন</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাকুঞ্জ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">ফরমস</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">তথ্য বাতায়ন হ্যাকাথন</a>
                      </li>
                  </div>
                </div>
              </nav>
        </div>
    </div>

<!-- ===hero== -->
    
    <div class="cont">
        <div class="hero row">
            <div class="col-lg-8">
                <div class="banner">
                    <img src="<?=get_template_directory_uri()?> ./img/padmabanner.jpg" alt="" class="d-block w-100">
                </div>

                <div class="slider">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="<?=get_template_directory_uri()?> ./img/slider/333_gov.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="<?=get_template_directory_uri()?> ./img/slider/Banner-1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="<?=get_template_directory_uri()?> ./img/slider/pmobanner.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>
                </div>

                <div class="tab">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">দপ্তর ভিত্তিক </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">সেবাসকল ই-সেবা</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-2">
                                    <img src="<?=get_template_directory_uri()?> ./img/tab/agriculture.png" alt="">
                                    <a href="">কৃষি </a>
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?=get_template_directory_uri()?> ./img/tab/call_center.png" alt="">
                                    <a href="">কৃষি </a>
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?=get_template_directory_uri()?> ./img/tab/agriculture.png" alt="">
                                    <a href="">কৃষি </a>
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?=get_template_directory_uri()?> ./img/tab/helpdesk.png" alt="">
                                    <a href="">কৃষি </a>
                                </div>
                                <div class="col-lg-2">
                                    <img src="<?=get_template_directory_uri()?> ./img/tab/mobile_service.png" alt="">
                                    <a href="">কৃষি </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                      </div>
                </div>

                <div class="link">
                    <h6>উদ্যোগ</h6>
                    <ul>
                        <li>
                            <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা</a>
                            <p>(২০১৬-২০২০) (১৩-০৬-২০১৬)</p>
                        </li>
                        <li>
                            <a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a>
                            <p>(১১-০৪-২০১৫)</p>
                        </li>
                        <li>
                            <a href="">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা।</a>
                            <p>(০৭-০৪-২০১৫)</p>
                        </li>
                        <li>
                            <a href="">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা</a>
                            <p>(২০১০-২০২১)। (০৭-০৪-২০১৫)</p>
                        </li>
                        <li>
                            <a href="">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা</a>
                            <p>(২০১০-২০২১)। (০৭-০৪-২০১৫)</p>
                        </li>
                    </ul>
                </div>

                <div class="left-tab">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/ebook_bangla (1).png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/forms_portal_logo (1).png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/infokosh-logo (1).png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/Konnect Logo.png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/logo_0_0.png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/services_portal_bn.png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/TP main-logo.png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/ebook_bangla (1).png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/vision_2021_bn.png" alt="" class="d-block w-100">
                        </div>
                        <div class="col-lg-4">
                            <img src="<?=get_template_directory_uri()?> ./img/l-tab/ebook_bangla (1).png" alt="" class="d-block w-100">
                        </div>
                    </div>
                </div>

                <div class="left-videos">
                    <p>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p>
                    <div class="row">
                        <div class="col-lg-4">
                            <iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4">
                            <iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4">
                            <iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="left-videos">
                    <p>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p>
                    <div class="row">
                        <div class="col-lg-4">
                            <iframe width="237" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="How to Identify and Scout for Fall Armyworm in Bangla (accent from Bangladesh)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4">
                            <iframe width="193" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg" title="বন্যার সময় কি করণীয়...?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-4">
                            <iframe width="220" height="200" src="https://www.youtube.com/embed/aI97ajpyq00" title="How to Registration on Surokkha Web (www.surokkha.gov.bd)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>





            </div>





            <div class="col-lg-4">
                <div class="sidebar">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/Bangladesh-Directory.jpg" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/bangladesh-portal--batton-bangla.png" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/discount_bn.jpg" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/Jonotar-Sorkar-banner-Bangl (1).jpg" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/mygov_bn.jpg" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/prottyon.jpg" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/Tamplate_Apps_bn (5).png" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/Tamplate_Dictonary_bn.png" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/Tamplate_DistrictBranding_b (3).png" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/Tamplate_guard_bn.png" alt="" class="d-block w-100">
                    <img src="<?=get_template_directory_uri()?> ./img/sidebar/Tamplate_govtjob_bn.png" alt="" class="d-block w-100">
                </div>

                <div class="side-video-section">
                    <h6>সকল বাতায়ন</h6>
                    <form action="">
                        <select name="" id="">
                            <option value="">ওয়েবসাইট বাছাই করুন</option>
                            <option value="">মন্ত্রণালয়</option>
                            <option value="">অধিদপ্তর </option>
                            <option value="">ঢাকা বিভাগ</option>
                            <option value="">চট্টগ্রাম বিভাগ</option>
                            <option value="">রাজশাহী বিভাগ</option>
                            <option value="">খুলনা বিভাগ</option>
                            <option value="">রংপুর বিভাগ</option>
                        </select>
                        <button>চলুন</button>

                        <div class="side-video">
                            <p style="margin-bottom: 0;">মুজিব১০০ আ্যাপ</p>
                            <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>মাস্ক পরুন সেবা নিন</p>
                            <img src="<?=get_template_directory_uri()?> ./img/mask-bd-portal (1).jpg" alt="" class="d-block w-100">

                            <h6>ডেঙ্গু প্রতিরোধে করণীয়</h6>
                            <img src="<?=get_template_directory_uri()?> ./img/dengu.jpg" alt="" class="d-block w-100">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
    <!-- ===footer=== -->
    

    <div class="cont">
        <footer>
            <div class="upper-footer">
                <img src="<?=get_template_directory_uri()?> ./img/footer/footer_top_bg.png" alt="">
            </div>

            <div class="bottom-footer row">
                <div class="col-lg-7 left-b-f">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#"></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">সাইট ম্যাপ</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                              </li>
                          </div>
                        </div>
                      </nav>
                      <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
                </div>



                <div class="col-lg-5 right-b-f text-end">
                    <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
                    <img src="<?=get_template_directory_uri()?> ./img/footer/np-logo-set.png" alt="">
                </div>
            </div>
        </footer>
    </div>
    
    <?php wp_footer();?>
    
   


    <!-- <script src="<?= get_template_directory_uri()?>./bootstrap.bundle.min.js"></script> -->
</body>
</html>