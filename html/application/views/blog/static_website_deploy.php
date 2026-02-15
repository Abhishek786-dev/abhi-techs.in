

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Materialize - Compiled and minified CSS-->
    <link
      rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css"
    />
    <!-- Font Awesome Icon - CSS-->
    <link
      rel="stylesheet"
      href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
    />
    <title>Static Webesite Deploy</title>
    <!-- Open Graph-->
   <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Abhishek | Software Engineer" />
    <meta property="og:description" content="I want to make things that make a difference." />
    <meta property="og:url" content="abhi-tech.in" />
    <meta property="og:site_name" content="Abhishek | Software Engineer" />
    <meta property="article:publisher" content="abhi-tech.in" />
    <meta property="og:image" content="" />
    <meta name="author" content="Abhishek Kumbhare" />
    <meta name="description" content="I want to make things that make a difference." />
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-60x60.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/apple-icon-180x180.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/android-icon-192x192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/favicon-96x96.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="<?php echo base_url('static/'); ?>assets/img/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="<?php echo base_url('static/'); ?>assets/img/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta
      name="msapplication-TileImage"
      content="<?php echo base_url('static/'); ?>assets/img/favicon/ms-icon-144x144.png"
    />
    <meta name="theme-color" content="#ffffff" />
    <!--if lt IE 9script(src='//html5shim.googlecode.com/svn/trunk/html5.js')
	-->
    <meta name="robots" content="index, follow" />
  </head>
  <body><script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.27.4'><\/script>".replace("HOST", location.hostname));
//]]></script>

    
<!-- Custom Styles-->
<style>
  /* Blog Styles */
  .font-weight-bold{
    font-weight: bold !important;
  }
  body {
    color: #333;
    font-size: 16px;
  }
  a {
    color: #009688;
  }
  blockquote {
    border-left: 5px solid #795548;
    color: #795548;
    font-size: 125%;
    font-weight: 400;
    margin: 20px 0;
    padding-left: 1.5rem;
  }
  blockquote * {
    font-size: inherit;
    line-height: inherit;
  }
  .text-center {
    text-align: center;
  }
  nav {
    background: white;
    box-shadow: none;
    height: 0;
  }
  nav i {
    padding: 0 15px;
    position: relative;
    top: 5px;
  }
  main {
    background: url(<?php echo base_url('static/'); ?>assets/img/bg.png) repeat;
  }
  article {
    max-width: 85ch;
    margin: 0 auto;
    padding: 2rem;
    font-size: 100%;
    line-height: 1.6;
  }
  img {
    max-width: 100%;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.15);
  }
  @media (min-width: 30rem) {
    article {
      font-size: 120%;
    }
  }
  h1 {
    font-size: 3rem;
    font-weight: 300;
    letter-spacing: 0.2rem;
    line-height: 1;
    margin-bottom: 1rem;
    text-transform: uppercase;
  }
  @media (min-width: 30rem) {
    h1 {
      font-size: 5rem;
    }
  }
  h2 {
    font-size: 3rem;
    line-height: 1.3;
  }
  h3 {
    font-size: 2rem;
    line-height: 1.3;
  }
  hr {
    margin: 4rem 0;
  }
  ul {
    padding-left: 2em;
  }
  ul li {
    list-style-type: initial;
  }
  p a {
    text-decoration: underline;
  }
  dl {
    color: #666;
    margin-bottom: 3rem;
    margin-top: 0.5rem;
  }
  dd {
    display: inline-block;
    font-weight: 500;
    margin-left: 0;
  }
  dt {
    display: inline-block;
    margin-left: 0.5rem;
  }
  .back-to-index {
    align-content: center;
    display: flex;
    font-size: 1rem;
    letter-spacing: 0.25rem;
    padding: 2rem 3rem;
    text-transform: uppercase;
  }
  .back-to-index i {
    margin-right: 0.5rem;
  }
  dl {
    margin-top: 0.5rem;
  }
  dd {
    display: inline-block;
    font-weight: 500;
    margin-left: 0;
  }
  dt {
    display: inline-block;
    margin-left: 0.5rem;
  }
  pre {
    background-color: #222;
    color: #ccc;
    font-size: 1rem;
    
  }
  p code {
    background: #ddd;
    border: 0.25rem solid #ddd;
    border-left-width: 0.5rem;
    border-right-width: 0.5rem;
    color: #eb5757;
    font-size: 0.9em;
  }
</style>
<a class="back-to-index" href="<?php echo site_url('')?>">
  <i class="mdi-hardware-keyboard-arrow-left"></i>
  Back to blog index
</a>
<!-- Main Content-->
<main>
  <article>
    <h3>Static Website Deployment  </h3>
        <p>
            Hello Everyone, In this Blog, we gonna see, how we deploy static pages on the hosting server, 
            and also we will do mapping between the domain and hosting server.
        </p>  

    <h3>1. Domain Name </h3>

        <ul>
            <li>
                it's nothing but a simple name of business, where users/clients can easily to memorized and easily find out the website over the internet.
            </li>
            <li>
                A domain name is mapped with IP(Internal Protocol) Address otherwise it's very difficult to remember IP Address,
                that's why DNS helps there to map the domain name to an IP address.
            </li>
            <li>
                Ex: abhi-techs.in
            </li>
            <li>
                A subdomain is a portion of your domain. Ex: python.abhi-techs.in
            </li>
        </ul>

    <h3>2. Top Level Domains(TLD) </h3>
        <ul>
            <li> Each domain has attached with extension like below </li>
            <ul>
                <li> .com - registered by commercial organizations </li> 
                <li> .in  - Internet country code </li>
                <li> .org - registered and used primarily by non-profit organizations. </li>
                <li> .edu - registered and used for education purpose. </li>
            </ul>
            <li> TLD also know as domain extension. </li>
        </ul>

    <h3> 3. Deploy Static website on Ec2 Instance </h3>
        
        <ul>
            
            <li  style="list-style-type:None"> 3.1 Create EC2 instace on AWS </li>
              <blockquote> before select ec2 instance, select region according to you because price of services will change by region.</blockquote>
              <ul>
                  <li> visit aws portal console & login (https://console.aws.amazon.com/console/home) </li>
                  <li>
                      after login on aws portal then search EC2 service and click on it, then you'll see below kind of UI. 
                      <p><img src="<?php echo base_url()?>/static/blog/img/ec2/ec2_dashboad_page.PNG" alt="ec2 dashboard"></p>
                  </li>
                  <li>
                      click on Ec2 Instance then You can able to see all instaces list(running/stopped). on right corner there is button for launch new instance.
                      <p><img src="<?php echo base_url()?>/static/blog/img/ec2/ec2_create_1.PNG" alt="ec2 create"></p>
                  </li>
                  <li>
                      here, for demo purpose, I have used - ubuntu 20.04 - t2.micro free tier.
                  </li>
                  <li>
                    Next step is important for give security to instance, that is security group , so if you want use an exsting pem/ppk file then select existing key-pair name, 
                    or you can create new one. here i have created the new file that will use for connect instace,so save this file on safe place.
                    <p><img src="<?php echo base_url()?>/static/blog/img/ec2/ec2_create_6.PNG" alt="security group"></p>
                    <ul>
                      <li> pem file for openSSH (Linux OS).</li>
                      <li> ppk file putty connect(windows).</li>
                      <li> here you can setup traffic on you server. </li>
                      <li> you can allow any protocol on specific IP.</li>
                    </ul>
                  </li>
                  <li> 
                      next step is volumn(storage), if you want increase volumn(storage) for your instace , so you can setup these things(by default , it's provide 8 Gb SSD) here.
                      <p><img src="<?php echo base_url()?>/static/blog/img/ec2/ec2_create_4.PNG" alt="storage"></p>
                  </li>
                  <li> 
                      Then last step click on Launch Instance, it'll take few minute for up and running stage.
                      <p><img src="<?php echo base_url()?>/static/blog/img/ec2/ec2_create_5.PNG" alt="storage"></p>
                  </li>
                  <li>
                      if you want to see all details about instance then check instace checkbox, all details will appear.
                      <p><img src="<?php echo base_url()?>/static/blog/img/ec2/instance_2.PNG" alt="instance"></p>
                  </li>
                  <li>Next step is connect to instance, here i have used ppk file for connect(using putty),copy public dns link , 
                    you can find from detailing page of instance or you can click on connect button it'll open another page , where you can find all info which is require for connect. 
                    <p><img src="<?php echo base_url()?>/static/blog/img/ec2/ec2_connect.PNG" alt="instance"></p>
                  </li>
                  <li>
                    Then open putty paste public dns link and upload ppk file in ssh->auth->browse option and click on open button.
                    <div class="row">
                      <div class="col s12 m6">
                        <p><img src="<?php echo base_url()?>/static/blog/img/ec2/putty_1.PNG" alt="putty"></p>
                      </div>
                      <div class="col s12 m6">
                        <p><img src="<?php echo base_url()?>/static/blog/img/ec2/putty_2.PNG" alt="putty"></p>
                        </div>
                    </div>
                    
                  </li>
                  <li>
                    if you'll not able to connect then most probably issue from security group, have look on it, check ssh protocol and IP.
                  </li>
                  <li>
                    to manage HTTP/HTTPS request , we need web server here , i have used apache2, you can install apache2 server using below command.
<pre>
  <code class="language-bash">
    sudo apt update 
    sudo apt install apache2
  </code>
</pre>
                  </li>
                  <li> for make sure , apache2 service is running or not then , just hit instance IP on browser, apache2 server page will appear.
                  <img src="<?php echo base_url()?>/static/blog/img/ec2/apache2_1.PNG" alt="putty">
                  </li>
                  <li>change directory</li>
<pre>
  <code class="language-bash">
  ubuntu@ip-172-31-34-253:~$ cd /var/www/html/
  ubuntu@ip-172-31-34-253:/var/www/html$
  ubuntu@ip-172-31-34-253:/var/www/html$ sudo rm index.html
  </code>
</pre>
                  <li> clone your project in this directory, for demo purpose I'v create one directory(ex:your_domain_name) and also created index file</li>
<pre>
  <code class="language-bash">
  ubuntu@ip-172-31-34-253:/var/www/html$ sudo mkdir python.abhi-techs.in
  ubuntu@ip-172-31-34-253:/var/www/html$ cd python.abhi-techs.in/
  ubuntu@ip-172-31-34-253:/var/www/html$ sudo nano index.html
  </code>
</pre>
                  <li>
                      nano  file editor will open. where you can paste your own HTML Code or follow mine (Copy below) 
                      whichever you want to make your Display Page (index.html) for your Web Server.
                      <img src="<?php echo base_url()?>/static/blog/img/index_code.PNG" alt="putty">
                  </li>

              <li> after installed apache2, it’s necessary to create a virtual host file with the correct directives.
              Instead of modifying the default configuration file located at /etc/apache2/sites-available/000-default.conf directly, 
              let’s make a new one at /etc/apache2/sites-available/python.abhi-techs.in.conf:
              </li>
<pre>
  <code class="language-bash">
  ubuntu@ip-172-31-34-253:~$ cd /etc/apache2/sites-available/
  ubuntu@ip-172-31-34-253:/etc/apache2/sites-available$ sudo nano python.abhi-techs.in.conf
  </code>
</pre>

<pre>
  <code class="language-bash">
  <VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName python.abhi-techs.in
    ServerAlias www.python.abhi-techs.in
    DocumentRoot /var/www/html/python.abhi-techs.in
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

  </code>
</pre>
              <li> Let’s enable the file with the a2ensite tool and Disable the default site defined in 000-default.conf</li>
<pre>
  <code class="language-bash">
ubuntu@ip-172-31-34-253:/etc/apache2/sites-available$ sudo a2ensite python.abhi-techs.in.conf
Enabling site python.abhi-techs.in.
To activate the new configuration, you need to run:
  systemctl reload apache2
ubuntu@ip-172-31-34-253:/etc/apache2/sites-available$ sudo service apache2 restart
sudo a2dissite 000-default.conf
Site 000-default disabled.
To activate the new configuration, you need to run:
  systemctl reload apache2
ubuntu@ip-172-31-34-253:/etc/apache2/sites-available$ sudo service apache2 restart
  </code>
</pre>
             
        <li style="list-style-type:None"> 3.1 DNS Management </li>
        <p>
            If we want to attach the domain name to the hosting server then we need a domain server where we can setup DNS records else we could directly open the website through IP address.
        </p>
        <p>After setup ec2 configuration, here we have to update DNS records for mapping.</p>
            <ul>
                <li> If we are going to deploying webesite for domain name(ex:abhi-techs.in) so then,
                    we just need add hosting server IP Address for A (@)record like below. 
                </li>
                <li style="list-style-type:None">
                    <p><img src="<?php echo base_url()?>/static/blog/img/domain_dns.PNG" alt="mapping IP to domain"></p>
                </li>
                <li>
                    here, we have created subdomain name as "python", website should be open with www so that's why here we have creates 2 A records like below.
                    <p><img src="<?php echo base_url()?>/static/blog/img/subdomain.PNG" alt="mapping IP to subdomain"></p>
                </li>
            </ul>

            </ul>

          <li>All configuration has been completed ,so now You can just hit sudomain on browser
          <p><img src="<?php echo base_url()?>/static/blog/img/website_deploy.PNG" alt="mapping IP to subdomain"></p>
          
          </li>
        </ul>
        <blockquote>
          I hope you like this Blog about "Apache (Ubuntu Linux) Web Server deployed on AWS & mapped with subdomain ".
          Thanks for your time.
        </blockquote>
</article>
</main>



  </body>
</html>
