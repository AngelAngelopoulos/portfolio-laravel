@extends('layout')

@section('title', 'About me')

@section('content')
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" >

      <div class="section-title">
        <h2>About</h2>
        <p>I am an enthusiastic web and software developer Jr. that studies in one of the best engineering schools in Mexico, also, I try to improve myself day by day, besides working in <a href="cibera.co">Cibera</a>, a cyber security company in San Luis Potosi, where I live. Among my greatest passions are also the Graphic Design, Film, Artificial Intelligence and even Literature.</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ asset('img/Angelo.jpg') /*https://drive.google.com/uc?export=view&amp;id=1D1YzNanQFsApEJSNUs7_6TQWnnYRpvy7*/}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Software  &amp; Web Developer.</h3>
          <p class="font-italic">
            Here are some facts about me:
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>

                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.angelalvarado.cf</li>
                <li><i class="icofont-rounded-right"></i> <strong>Study at:</strong> Universidad Autónoma de San Luis Potosi, México</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> San Luis Potosí, México</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>

                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Ingeniería en Sistemas Inteligentes, Especializado en Ciberseguridad</li>
                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> contacto@angelalvarado.cf</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available (remote only)</li>
              </ul>
            </div>
          </div>
          <p>
            I have done multiple projects related to web development and artificial intelligence, as well as courses about computer security and a little bit of graphic design. You can see them in the <a href="{{ route('projects.index') }}">Portfolio</a> section.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Skills</h2>
        <p>
I have polished the following skills throughout my student experience, as well as the projects and work I have done.
One of my strengths is PHP programming with laravel, I currently have good experience with this framework and am in the process of learning Ruby on Rails and Django.
</p>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">

          <div class="progress">
            <span class="skill">Java <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">C/C++ <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Python <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Risk & Security Analisis <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Ruby on Rails <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Laravel <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Illustrator <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Node.js <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>


        </div>

      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Skills Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Certifications &amp Courses</h2>
        <p>
          I have done multiple courses, focused on cyber-security and artificial intelligence, here are some of the titles received and I have a few more in progress, especially full stack developer
  </p>
</div>
<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('img/ISO27001.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{ asset('img/ISO27001.jpg') }}" data-gall="portfolioGallery" class="venobox" title="ISO 27001 Implementation"><i class="bx bx-plus"></i></a>
                  <a href="https://backtrackacademy.com/examen/50/certificate.pdf?key=19238c8e9d12a146a74d0c842fc91a65" title="More Details"><i class="bx bx-link"></i></a>
                </div>

              </div>
            <h5>ISO 27001 Implementation</h5>
            </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="{{ asset('img/CourseraDeep.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{ asset('img/CourseraDeep.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Deep Learning Inference with Azure ML Studio"><i class="bx bx-plus"></i></a>
                  <a href="https://www.coursera.org/account/accomplishments/records/5M8S2LN6D2RK?utm_medium=certificate&utm_source=link&utm_campaign=copybutton_certificate" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
                <h5>Deep Learning Inference with Azure ML Studio</h5>
            </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{ asset('img/CourseraTensor.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <a href="{{ asset('img/CourseraTensor.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Using TensorFlow with Amazon Sagemaker"><i class="bx bx-plus"></i></a>
                  <a href="https://www.coursera.org/account/accomplishments/records/Z6FH42ZMV8KM?utm_source=link&utm_medium=certificate&utm_content=cert_image&utm_campaign=sharing_cta&utm_product=project" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
              <h5>Using TensorFlow with Amazon Sagemaker</h5>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="{{ asset('img/C-SIA.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="{{ asset('img/C-SIA.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Agile Computer Security Certification"><i class="bx bx-plus"></i></a>
                    <a href="https://badgr.com/public/assertions/Kf--USxTRbi9uxl08_1qig" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
                <h5>Agile Computer Security Certification</h5>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <img src="{{ asset('img/Ilustrator.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                      <a href="{{ asset('img/Ilustrator.png') }}" data-gall="portfolioGallery" class="venobox" title="Graphic Vectors with Adobe Illustrator"><i class="bx bx-plus"></i></a>
                      <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                  </div>
                  <h5>Graphic Vectors with Adobe Illustrator</h5>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                      <img src="{{ asset('img/Rails.jpg') }}" class="img-fluid" alt="">
                      <div class="portfolio-links">
                        <a href="{{ asset('img/Rails.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Ruby on Rails"><i class="bx bx-plus"></i></a>
                        <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                      </div>
                    </div>
                    <h5>Ruby on Rails</h5>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                        <img src="{{ asset('img/RailsAuth.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                          <a href="{{ asset('img/RailsAuth.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Ruby on Rails Authentication"><i class="bx bx-plus"></i></a>
                          <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                      <h5>Ruby on Rails Authentication</h5>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                          <img src="{{ asset('img/ISO27001Cons.jpg') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                            <a href="{{ asset('img/ISO27001Cons.jpg') }}" data-gall="portfolioGallery" class="venobox" title="ISO 27001 Consulting & Implementation"><i class="bx bx-plus"></i></a>
                            <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                        </div>
                        <h5>ISO 27001 Consulting & Implementation</h5>
                      </div>


          </div>
</div>
</section>

@endsection
