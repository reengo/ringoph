<?php 
if (isset($_REQUEST['email'])){
    $mailcheck = spamcheck($_REQUEST['email']);
    if($mailcheck){
        //send email
        $email = $_REQUEST['email'] ;
        $subject = 'Inquiry recieved';
        $message = $email . ' wrote: ' . $_REQUEST['message'] ;
        mail("bautistarin@gmail.com", $subject,
        $message, "From:" . $email);
        echo '<div class="alert alert-success"><a class="close" data-dismiss="alert" href="#"><i class="icon-remove-circle"></i></a><strong>Thank You '. $email .'</strong>, your message was sent.</div>' ;
    }else{
        echo '<div class="alert alert-error fade"><a class="close" data-dismiss="alert" href="#"><i class="icon-remove-circle"></i></a><strong>Tsktsk</strong>, something went wrong... Can you please try again?</div>' ;
    }
}

function spamcheck($field){
    //filter_var() sanitizes the e-mail
    //address using FILTER_SANITIZE_EMAIL
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() validates the e-mail
    //address using FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return TRUE;
    }else{
        return FALSE;
    }
}

include_once('header.php');

?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav" >
            
            <ul class="nav nav-list">
              <li class="nav-header profile">
                <img class="img-polaroid" src="assets/img/ringo-instagram.jpg">
                <div><author><small>Ringo Bautista</small></author></div>
              </li>
              <li class="nav-header">Current Location</li>
              <li>
                <address>
                  3588 Kaunlaran St., Karangalan Village<br>
                  Pasig City, Philippines<br>
                  <i class="icon-phone"></i>(+63) 998-993-6359<br>
                  <i class="icon-skype"></i>rin.go
                </address>
                 
                <address>
                  <strong>Ringo Bautista</strong><br>
                  <a href="mailto:me@ringo.ph?subject=inquiry:ringo.ph/resume">me[at]ringo.ph</a>
                </address>
              </li>
              <li class="nav-header">Navigation</li>
              <li class="active"><a href="#">Profile</a></li>
              <li><a href="#skills">Skills</a></li>
              <li><a href="#experience">Experience</a></li>
              <li><a href="#exp-source"><small><i class="icon-chevron-right"></i>Sourcefit / Coapp</a></small></li>
              <li><a href="#exp-pragma"><small><i class="icon-chevron-right"></i>Pragmanila / Stök Media</a></small></li>
              <li><a href="#exp-wgp"><small><i class="icon-chevron-right"></i>Microsourcing / WGP</a></small></li>
              <li><a href="#exp-ipay"><small><i class="icon-chevron-right"></i>i-Payment Solutions</a></small></li>
              <li><a href="#exp-ivertise"><small><i class="icon-chevron-right"></i>Ivertise</a></small></li>
              <li><a href="#exp-thinc"><small><i class="icon-chevron-right"></i>Thinc Multimedia</a></small></li>
              <li><a href="#exp-satnews"><small><i class="icon-chevron-right"></i>Satnews Publishers</a></small></li>
              <li><a href="#certs">Awards, Training and Certifications</a></li>
              <li><a href="#education">Education</a></li>
              <li><a href="#langs">Languages</a></li>
              <li><a href="#folio">Portfolio</a></li>
              <hr >
              <li class="nav-header">Date of Birth:</li>
              <li>June 20, 1981</li>
              <li class="nav-header">Place of Birth:</li>
              <li>Quezon City, Philippines.</li>
              <li class="nav-header">Nationality:</li>
              <li>Filipino</li>
              <li class="nav-header">Civil Status:</li>
              <li> Single</li>
              <hr />
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span10">
          <div class="hero-unit">
            <h1>Ringo Bautista</h1>
            <h2>Senior Front End Web Developer</h2>
            <p>With more than 10 years of experience in the industry, I have developed countless professional grade websites and applications with my own unique creativity and passion. These experiences have developed my problem solving skills, immediately pinpointing solutions not only on front end issues, but also on the entire user experience. </p>
            <p>
                <a href="mailto:me@ringo.ph?subject=inquiry:ringo.ph/resume" class="btn btn-primary btn-large"><i class="icon-envelope-alt"></i> Contact Me</a>
                <a target="_blank" href="../cv/RingoBautistaCV061115.pdf" class="btn btn btn-large"><i class="icon-download-alt"></i> Download CV</a>
            </p>
          </div>

          <div id="skills" class="row-fluid">
            <h2 class="span12">Skills</h2>
          </div>
          
          <div class="row-fluid">
            <div class="span8">
              <h4>Professional Traits</h4>
              <p><strong>Professional Traits:</strong></p>
              <p>Versatile and well experienced web developer, creative and enthusiastic, exceptional technical analytic skills, experienced people developer, self-reliant and highly resourceful, has a formidable passion for learning.</p>
            
              <p><strong>Application Proficiency:</strong></p>
              <p>Adobe Creative Suite CS5/6, Flash Builder 4, FlexUnit, FlashDevelop 4, Sublime Text3, MS Project 2003, Fruity Loops XXL, Eclipse ADT, Corel Painter IX, Jira, Gliffy, Oracle Virtual Box, Mac OSX Terminal, SVN, Git. </P>
            
              <p><strong>Programming Languages, Libraries and Frameworks:</strong></p>
              <p>JavaScript, jQuery, KnockoutJS, Grunt/Gulp, EmberJS, Ember Appkit/CLI, Blade (Laravel), Mustache/Handlebars, Jekyll (Markdown), RequireJS, CreateJS, BackboneJS, KnockoutJS, NPM, Bower, AS3, AS2, HTML5, XHTML, CSS3, Twitter Bootstrap 3+/2.3, LESS, Foundation 5/3, XML, MXML, Flex 4 SDK, Objective-C/Swift, Spritekit, Android SDK, AIR for Android, PHP 5, ZEND, MySQL, Laravel 4.2, Magento, SugarCRM, Wordpress, Silverstripe.</p>
            </div><!--/span-->
            
            <div class="span4">
              <h4>Scalable flash game development</h4>
              <p>Learn how I create games using Flash CS5 on this brief case study of Fru-Tea Slots</p>
              <p><a class="btn" target="_blank" href="http://www.ringo.ph">Visit the Case study &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->

          <div id="experience" class="row-fluid">
            <h2 class="span12">Experience</h2>
          </div>

          <div class="row-fluid">
            <div class="span8">
              <h4 id="exp-source">Senior Front End Developer</h4>
              <p><strong>Sourcefit Philippines / The Coapperative<br />
                September 8, 2014 – PRESENT</strong>
              </p>

              <p>Contributions:</p>
              <ul class="check-list">
                <li>Front End architect for a traffic heavy guides, directory and classified ads website for British Expats around the world.</li>
                <li>Introduced MVVM pattern for software development.</li>
                <li>Used modern front-end development methodologies and architecture to develop a framework for web applications.</li>
                <li>Introduced streamlined collaborative development for multiple in-house and remote developers through git and Github.</li>
                <li>Worked on multiple issue tracking applications such as Jira, Teamworks, Github, Trackduck, Trello and many others simultaneously.</li>
                <li>Develops Modular Javascript code for reusability and scalability.</li>
                <li>Developed a real-time interactive chat client through Javascript and Socket.io</li>
              </ul>

              <hr />

              <h4 id="exp-pragma">Senior Front End Developer</h4>
              <p><strong>Pragmanila Solutions Incorporated / Stök Media AB<br />
                July 15, 2013 – September 2, 2014</strong>
              </p>

              <p>Contributions:</p>
              <ul class="check-list">
                <li>Worked on Magento design and theme creation/customization.</li>
                <li>Worked on single page scrolling websites with parallax effects</li> 
                <li>Designed logos, icons, print assets and websites focused on responsive design and mobile devices layout</li>
                <li>Created storyboards, prototypes and process flow diagrams for user experience design</li>
                <li>Primarily worked on transforming old websites into fully responsive and mobile device compatible websites</li>
                <li>Converted Designs to fully responsive websites built on Bootstrap, LESS and CSS3</li>  
                <li>Worked on Ember based projects using EmberAppKit</li>
                <li>Spearheaded the standardizing of front end development using modern methods</li>
                <li>Invited to Speak in Local University About Responsive Design and Game Development Using JS</li>
                <li>Developed and maintained Facebook integrated apps.</li>
              </ul>

              <hr />

              <h4 id="exp-wgp">Senior Front End Developer</h4>
              <p><strong>Microsourcing Philippines Inc. / Web Guide Partner<br />
                Sept 2, 2010 – July 13, 2013</strong>
              </p>

              <p>Contributions:</p>
              <ul class="check-list">
                <li> Worked on Facebook integrations and social plugins for application development</li>
                <li> Worked on website gamification for top rank casino sites.</li> 
                <li>Started mobile development by porting in-house flash based apps to HTML5</li>
                <li>Led a team of front-end web developers promoting new standards and coding conventions to streamline front-end work processes.</li>  
                <li>Evolved application development by introducing HTML5 apps.</li>
                <li>Created games and apps for Link Development from concept to release.</li>
                <li>Developed an in-house game and widget development framework.</li>
                <li>Introduced dynamic widget styling using cross-domain capable assets on Flash and Flex applications.</li>
                <li>Maintained highly active, SEO driven widgets and applications for online gambling, casino, poker, plastic surgery, mortgage loan and web hosting sites.</li>
                <li>Developed a widget admin system capable of managing all existing widgets on production and be able to customize dynamic skins without the need of IDEs</li>
                <li>Mixed front end and backend developer for CRM and production support tools.</li>
                <li>Awarded as People Developer in 2011.</li>
              </ul>

              <hr />

              <h4 id="exp-ipay">Senior Technical Project Manager</h4>
              <p><strong>i-Payment Solutions Incorporated<br />
                Sept 17, 2007 – August 31, 2010</strong>
              </p>

              <p>Contributions:</p>
              <ul class="check-list">
                <li>Spearheaded the design, conceptualization and system architecture of an online bookmaker gaming portal built mainly in ActionScript3.</li>
                <li>Overall technical project management of a diverse global team in developing online gaming and wagering bookmaker systems.</li>
                <li>Supervised 3rd party integration of gaming operators and content providers for sports, racing, financial, lottery, poker and casino betting.</li>
                <li>Supervised Integration of payment solutions to gaming companies.</li>
                <li>Managed the issuance and release of API Documentations, certifications and merchant accreditation.</li>
                <li>Managed the development of a comprehensive and robust local prepaid card processor</li>
                <li>Conceptualized, designed and developed a breakthrough QA Testing Information System.</li>
                <li>Managed the development of a flexible and fully customizable cooperative and microfinance accounting system</li>
                <li>Spearheaded internal audit initiatives to ensure quality and information security among all applications from development to staging and then to production environments.</li>
                <li>Authored and lead the implementation of company-wide software development life cycle policies and procedures.</li>
                <li>Lead an internal audit committee on quality assessment and global security standards compliance review.</li>
              </ul>

              <hr />

              <h4 id="exp-ivertise">Senior Graphics and Web Designer</h4>
              <p><strong>Ivertise Web and Marketing Technologies Inc.<br />
                April 17, 2006 – September 17, 2007</strong>
              </p>

              <p>Contributions:</p>
              <ul class="check-list">
              
                <li>Introduced Podcasting and other xml driven content integration on flash.</li>
                <li>Managed the development of a breakthrough system for medical transcription services. </li>
                <li>Provided Front end development breakthrough by introducing table-less CSS web design.</li>
                <li>Managed projects relating to bariatric medical website development and in-house customizable content management system built on ruby on rails.</li>
                <li>Led the development of the top priority projects and high profile websites.</li>
                <li>Managed multiple E-commerce websites for foreign and local clients.</li>

              </ul>

              <hr />

              <h4 id="exp-thinc">Graphic Illustrator and Web Designer</h4>
              <p><strong>Thinc Multimedia Marketing Communications Inc.<br />
                February 2005 – January 2006</strong>
              </p>

              <p>Contributions:</p>
              <ul class="check-list">
                <li>Introduced flash animations and interactive movie clips on web development. </li>
                <li>Designed, developed and maintained websites ranging from industries on satellite and telecom news, religion, education and leisure. </li>
                <li>Provided graphics and illustrations for online publications, corporate profiles, letterheads and email signatures.</li>
              </ul>

              <hr />

              <h4 id="exp-satnews">Editorial Assistant</h4>
              <p><strong>Satnews Publishers Inc.<br />
                February 2005 – January 2006</strong>
              </p>

              <p>Contributions:</p>
              <ul class="check-list">
                <li>Provided illustrations and graphical representations of materials used on satellite industry book publications.</li>
                <li>Edited satellite and telecommunications related news daily, weekly and monthly.  </li>
                <li>Managed a 3 year news archive from the satellite technology industry.</li>
              </ul>

            </div><!--/span-->
            
            <div class="span4">
              <h4>Stuff I write about</h4>
              <p>I also blog about a lot of things under the sun, checkout my blog and learn more about the things I fancy with.</p>
              <p><a class="btn" target="_blank" href="http://www.reengo.com">Visit My Blog &raquo;</a></p>
            </div><!--/span-->
            
          </div><!--/row-->

          <div id="certs" class="row-fluid">
            <h2 class="span12">Accomplishments, Trainings and Certifications</h2>
          </div>
          
          <div class="row-fluid">
            <div class="span12">
                <ul class="trophy-list">
                    <li>Bulacan State University Speaker - Feb 2014</li> 
                    <li>Company Loyalty Awardee – December 2012</li> 
                    <li>Application Interface and Game Development Workshops – November 2012.</li>
                    <li>Form, Function &amp; Class Web Design Conference Certification – Sept 2011.</li>
                    <li>Acknowledged as People Developer for Q1 – April 2011.</li>
                    <li>Certified Internal Auditor for ISO 9001 and ISO 27001 – September 2009.</li>
                    <li>Completed Training and Seminars on MS Project and Project Management – March 2008</li>
                </ul>

            </div><!--/span-->
          </div><!--/row-->

          <div id="certs" class="row-fluid">
            <h2 class="span12">Education</h2>
          </div>
          
          <div class="row-fluid">
            <div class="span8">
              <h4>BS Information Technology</h4>
              <p><strong>Our Lady of Fatima University</strong></p>
              <p>2005-2006</p>

              <h4>High School</h4>
              <p><strong>San Sebastian College Recolletos / Quezon City Academy</strong></p>
              <p>1994-1999</p>

            </div><!--/span-->
            
            <div class="span4">
              <h4>SEO Link Tracker</h4>
              <p>Online tool for scraping a page for links and their structure. Built in PHP and styled purely with CSS3</p>
              <p><a class="btn" target="_blank" href="http://www.reengo.com/rgb/linktracker_v0_7/">View Demo Site &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->

          <div id="certs" class="row-fluid">
            <h2 class="span12">Portfolio</h2>
          </div>
          
          <div class="row-fluid">
            <div class="span12">
              <h4>Please visit <a target="_blank" href="http://www.ringo.ph">http://www.ringo.ph</a> for an online portfolio.</h4>
            </div><!--/span-->
          </div><!--/row-->

          <div id="certs" class="row-fluid">
            <h2 class="span12">Contact Me</h2>
          </div>
          
          <div class="row-fluid">
            <p>Need to ask me something quick? please do so with the form below. or email me directly at <a href="mailto:me@ringo.ph?subject=inquiry:ringo.ph/resume">me@ringo.ph</a></p>
            <form method="post" class="span8 form-horizontal">
              <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                  <input class="span8" type="email" id="inputEmail" placeholder="Email" name="email" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputPassword">Your Message</label>
                <div class="controls">
                  <textarea class="span8" name="message" placeholder="Got something in mind you want to ask? please do let me know"></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
              </div>
            </form>
          </div><!--/row-->

        </div><!--/span-->
      </div><!--/row-->

      <hr>

    </div><!--/.fluid-container-->
<?php include_once('footer.php'); ?>