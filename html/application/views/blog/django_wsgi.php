

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
    <title>Django Deployment</title>
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
    padding-left: 1em;
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
    padding: 2rem;
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
    <h1>Django Deployment </h1>
  <p>
    In this article , we will see how to deploy a simple django application using Nginx & gunicorn 
  </p>  
<center>
  <h3>Few Things need to setup or taking care before deploying application on server like below</h3>
</center>
<span class="font-weight-bold"> SECRET_KEY </span> 
<p>
  Make sure this key used in production isn’t used anywhere else and avoid committing it to source control. This reduces the number of vectors from which an attacker may acquire the key.
</p>

<span class="font-weight-bold"> DEBUG </span> 
<p>
  In production Mode set DEBUG to false , beacause it will leaks lots of data so it's bad idea to use DEBUG veriable as true in production.
</p>

<span class="font-weight-bold"> ALLOWED_HOSTS </span> 
<p>
  Just Use specific Host , It will ignore request from incorrect host insted of forwarding to request to django. This way you’ll avoid spurious errors in your Django logs .
</p>

<span class="font-weight-bold"> Database </span> 
<p>
  take care database credential like secret key.For maximum security, make sure database servers only accept connections from your application servers.
</p>

<span class="font-weight-bold"> EMAIL_BACKEND </span> 
<p>
  By default Django send mail to on these eamil Ids like  webmaster@localhost and root@localhost , must sure if your application send any email so use different sender addresses, modify the DEFAULT_FROM_EMAIL and SERVER_EMAIL settings.
</p>

<span class="font-weight-bold"> HTTPS </span> 
<p>
  It is required because , you need to proctect a sensitive areas such as the user account because the same session cookie is used for HTTP and HTTPS. Your web server must redirect all HTTP traffic to HTTPS, and only transmit HTTPS requests to Django.
  <br/>
  <span class="font-weight-bold">
  Once you’ve set up HTTPS, enable the following settings
  </span>
</p>
<ul>
    <li> CSRF_COOKIE_SECURE : set to True</li>
    <li> SESSION_COOKIE_SECURE : set to True</li>
</ul>

<span class="font-weight-bold"> LOGGING </span> 
<p>
  setup your application in such why if any errors occurs so you will get notify by email. I have done this way.
    <pre>
      <code class="language-bash">
ADMINS = [("Abhishek", "abhishek@trigensoft.com")]
# Logger setup for production server to get errors on mail.
# if PRODUCTION :
LOGGING = {
  'version': 1,
  'disable_existing_loggers': False,
  'formatters': {
    'verbose': {
      'format': '%(levelname)s %(asctime)s %(module)s %(message)s',
    },
    'simple': {
      'format': '[%(asctime)s] %(message)s'
    },
    "detail": {
      "format": '{"level":[%(levelname)s],"logger_date":[%(asctime)s],"logger":[%(filename)s %(funcName)s %(lineno)d],"logger":[%(message)s],"exc_info":[%(stack_info)s]}'
    },
  },
  'root': {
    'level': 'DEBUG',
    'handlers': ['console'],
  },
  'handlers': {
    'mail_admins': {
      'level': 'ERROR',
      'class': 'django.utils.log.AdminEmailHandler',
      'formatter': 'simple',
      'include_html': True,
    },
    'console': {
      'level': 'DEBUG',
      'class': 'logging.StreamHandler',
      'formatter': 'simple'
    },
    'file': {
      'level': 'ERROR',
      'class': 'logging.FileHandler',
      'filename': os.path.join(BASE_DIR, "APPNAME.log"),
      'formatter': 'detail'
    },
  },
  'loggers': {       
    # Django loggers
    'django': {
      'handlers': ['file'],
      'propagate': True,
      'level': 'ERROR',
    },
    'django.request': {
      'handlers': ['mail_admins'],
      'propagate': True,
      'level': 'ERROR',
    },
  }
}
      </code>
    </pre>
</p>


<center>
  <h3>Linux : Deployment Steps on Ubuntu 18.04</h3>
</center>
<p>
    I am going to setup application on AWS(EC2).
</p>  
<ul>
<li>
     create ubuntu ec2 Instance With Elastic IP and Not forgot to setup Inbound setting.
</li>
<li>
    connect ec2 with your local machin ex(putty,gitbash).  
</li>    
<li>
    sudo apt-get update
</li>
<li>
    sudo apt-get upgrade -y
</li>
<li>
    sudo apt-get install python3-pip
</li>
<li>
    sudo pip3 install virtualenv
</li>
<li>
    virtualenv venv 
</li>

<li>
    source env/bin/activate
</li>  
<li>
    pip3 install Django
</li>  

<li>
    pip3 install gunicorn 
</li>  

<li>
    sudo apt-get install -y nginx
</li>  
 
<li>
    sudo nginx
</li>  

<li>
    pip3 install -r requirement.txt 
</li>  
 
<li>
    gunicorn --bind 0.0.0.0:8000 project_name:application
</li> 
 
<li>  
    sudo apt-get install -y supervisor (for manage your projects)
</li>  
<li>  
   cd /etc/supervisor/conf.d
</li>
<li>
  create script file for connect to your application (sudo touch gunicorn.conf)

    <pre>
      <code class="language-bash">
[program:gunicorn]
directory=/home/ubuntu/project_path
command=/home/ubuntu/virtual_env/bin/gunicorn --workers 3 --timeout=120 --bind unix:/home/ubuntu/project_path/app.sock project.wsgi:application
autostart=true
autorestart=true
stderr_logfile=/var/log/gunicorn/gunicorn.err.log
stdout_logfile=/var/log/gunicorn/gunicorn.out.log

[group:guni]
programs:gunicorn
      </code>
    </pre>
    <p>
      Here,
      <ul>
        <li>
          directory : path of project
        </li>
        <li>  
          --worker  : at time no of worker work for application.
        </li>
        <li>
          --timeout : each proccess take max time to complete execution.
        </li>
        <li>
          autostart / autorestart : you don't need to start your project after system shutdown/restart.
        </li>
        <li>
        logfilre : in production you can't access logs on terminal so , you can find all access/error logs in file
      </li>
      </span> 

    </p>
</li>

<li>
  creat folder sudo mkdir /var/log/gunicorn
</li>
<li>
  sudo supervisorctl reread && sudo supervisorctl update && sudo supervisorctl status
</li>
<li>
  cd /etc/nginx/sites-available
</li>
<li> 
    create nginx file : sudo touch nginx.conf
    <pre>
      <code class="language-bash">
server {
        listen 80 ;
        server_name  18.189.93.191;
        return 301 https://$server_name$request_uri;
}
server{
    listen 80;
    
    ssl on;
    ssl_certificate     /etc/nginx/ssl/server.crt; 
    ssl_certificate_key /etc/nginx/ssl/server_private.key;
   
    server_name  18.189.93.191 abhi-techs.in www.abhi-tech.in;
     
    client_body_buffer_size     10M;
    client_max_body_size        10M;

    location /{
        include proxy_params;
        proxy_pass http://unix:/home/ubuntu/project_path/app.sock;
  proxy_intercept_errors on;
    }

    location /static/{
        autoindex off;
        alias /home/ubuntu/project_path/static/;
    }
    location /client/static/{
        autoindex off;
  alias /home/ubuntu/project_path/client/static/;
    }
    location /staticfiles/{
        autoindex off;
        alias /home/ubuntu/project_path/staticfiles/admin/;
    }
    location /media/{
        autoindex off;
        alias /home/ubuntu/project_path/media/;
    }
    location = /500.gif {
        root /var/www/html/;
    }
    location = /404.gif {
        root /var/www/html/;
    }

    error_page 404 /404.html;
    location  /404.html {
         root /var/www/html/;
   internal;
   allow all;
    }
   
    error_page 500 /500.html;
    location  /500.html {
  root /var/www/html/;
  internal;
  allow all;
    } 
}


      </code>
    </pre>
</li>
<li>
  sudo nginx -t 
</li>
<li>
  sudo ln django.conf /etc/nginx/sites-enabled/
</li>
<li>
  sudo nginx -t
</li>
<li>
  Restart Server :
  <ul>
    <li>
      sudo service supervisord reload && sudo supervisorctl reread &&  sudo supervisorctl update && sudo supervisorctl update && sudo supervisorctl status
    </li>
  </ul> 
</li>
<li>
  Restart gunicorn & nginx 
  <ul>
    <li>
      sudo supervisorctl restart guni:gunicorn
    </li>
    <li>
      sudo service nginx restart
    </li>
  </ul>

</li>

</ul> 
<center>
  <h3>How To Secure Nginx with Let's Encrypt on Ubuntu 18.04</h3>
</center>
<p>
    Lets's Encrypt provide certificates for specific time periode. let's see steps to install certificates
</p>
<ul>
  <li>
    sudo snap install --classic certbot
  </li>
  <li>
    sudo ln -s /snap/bin/certbot /usr/bin/certbot
  </li>
  <li>
    sudo nano /etc/nginx/sites-available/nginx.conf
  </li>
  <li>
    check nginx setting right or not  ans reload nginx using following command.<br/>
    sudo nginx -t && sudo systemctl reload nginx
  </li>
  <li>
    Obtaining an SSL Certificate 
    <br/>
    sudo certbot --nginx -d abhi-techs.in -d www.abhi-techs.in
  </li>
  <li>
    Verifying Certbot Auto-Renewal<br/>
    sudo certbot renew --dry-run
  </li>
  <li>
    Now , Just Reload webpage , You will redirect to https
  </li>
</ul>

</article>
</main>
  </body>
</html>
