

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
    <title>Linux Crontab</title>
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
    <h1>Linux Crontab </h1>
  <p>
    Linux Crontab command used for run Job(task,process,script etc...) on specific time.You can call it as job scheduler. 
    It's default feature.Each user on your system can have a personal crontab.
  </p>  
<center>
  <h3>Linux GNU Crontab Commands</h3>
</center>
<span class="font-weight-bold"> crontab -e </span> 
<p>
  1 - Using this command you can set a Multiple job. and When you using this command at first time , It will ask you to choose editor like below
</p>
<pre>
  <code class="language-bash">
  root@abhishek:~# crontab -e
  no crontab for root - using an empty one

  Select an editor.  To change later, run 'select-editor'.
    1. /bin/nano        <---- easiest
    2. /usr/bin/vim.tiny
    3. /usr/bin/code
    4. /bin/ed

  Choose 1-4 [1]: 
  </code>
</pre>

<center>
  <h3>Linux Crontab Format</h3>
</center>
<p>Run task in particolur time , It's Base on Formate that is given below.</p>

<pre>
  <code class="language-bash">
  Field    Description    Allowed Value
  MIN      Minute field    0 to 59
  HOUR     Hour field      0 to 23
  DOM      Day of Month    1-31
  MON      Month field     1-12
  DOW      Day Of Week     0-6
  </code>
</pre>
<span class="font-weight-bold">Examples</span> 
<ul>
<li>
    If you want to run any specific Job on <span class="font-weight-bold">every minute</span>  , Then You can use following formate.
    <pre>
      <code class="language-bash">
      * * * * * /home/abhishek/projects/job.sh
      </code>
    </pre>
</li>
<li>
    If You want to run Job On <span class="font-weight-bold">Every Day Midnight </span>.
    <pre>
      <code class="language-bash">
      0 0 * * * /home/abhishek/projects/job.sh
      </code>
    </pre>
</li>
<li>
    If you want to <span class="font-weight-bold"> Run Url </span> in crontab , here is command
    <pre>
      <code class="language-bash">
      30 08 10 06 * wget https://abhi-tech.in/
      </code>
    </pre>
    <ul>
    <li>30 – 30th Minute</li>
    <li>08 – 08 AM</li>
    <li>06 – 6th Month (June)</li>
    <li>* – Every day of the week</li>
    </ul>
</li>

<li>
    <span class="font-weight-bold"> Python Script Run in virtual environment </span> 
    <pre>
      <code class="language-bash">
      SHELL=/bin/bash  
      * 0/6 * * * source /home/abhishek/myenv/bin/activate &&  /home/abhishek/myenv/bin/python3.8  /path/to/your-script.py 
      </code>
    </pre>
    <p>1. If you want to get all log or error on your script. Here you go</p>
    <pre>
      <code class="language-bash">
      * 0/6 * * * source /home/abhishek/myenv/bin/activate &&  /home/abhishek/myenv/bin/python3.8  /path/to/your-script.py  >> /home/abhishek/crontab.log
      </code>
    </pre>
</li>
<li>
  <span class="font-weight-bold"> To schedule a job for certain range of time </span> 
    <pre>
      <code class="language-bash">
      00 09-18 * * * /home/abhishek/projects/check-db-status
      </code>
    </pre>
</li>
<li>
<span class="font-weight-bold"> Cron special keywords and its meaning </span> 
    <pre>
      <code class="language-bash">
      Keyword    Equivalent
      @yearly    0 0 1 1 *
      @daily     0 0 * * *
      @hourly    0 * * * *
      @reboot    Run at startup.
      </code>
    </pre>
    <span>Examples</span>
    <pre>
      <code class="language-bash">
      #To schedule a job for first minute of every year using @yearly
      @yearly /home/abhishek/bin/python.sh

      #To schedule a Cron job beginning of every month using @monthly
      @daily     @yearly /home/abhishek/bin/python.sh

      #To schedule a background job every day using @daily
      @daily     @yearly /home/abhishek/bin/python.sh
      
      #To execute a linux command after every reboot using @reboot
      @reboot   /etc/init.d/httpd restart
      </code>
    </pre>
</li>
</ul>

<span class="font-weight-bold"> crontab -l </span> 
<p>
  1 - this command will show you all Jobs list, which is you allready set.
</p>
<pre>
  <code class="language-bash">
  root@ip-172-31-30-161:/home/ubuntu# crontab -l
# Edit this file to introduce tasks to be run by cron.
# 
# Each task to run has to be defined through a single line
# indicating with different fields when the task will be run
# and what command to run for the task
# 
# To define the time you can provide concrete values for
# minute (m), hour (h), day of month (dom), month (mon),
# and day of week (dow) or use '*' in these fields (for 'any').# 
# Notice that tasks will be started based on the cron's system
# daemon's notion of time and timezones.
# 
# Output of the crontab jobs (including errors) is sent through
# email to the user the crontab file belongs to (unless redirected).
# 
# For example, you can run a backup of all your user accounts
# at 5 a.m every week with:
# 0 5 * * 1 tar -zcf /var/backups/home.tgz /home/
# 
# For more information see the manual pages of crontab(5) and cron(8)
# 
# m h  dom mon dow   command

SHELL=/bin/bash
0 */6 * * *  cd /home/ubuntu/techenv/ &&  source bin/activate  &&  bin/python3.6 /home/ubuntu/database_backup_script/database_script/backup_script.py > /home/ubuntu/cronjob.log 2>&1 | logger -t mycmd

#0 13 * * *  cd /home/ubuntu/hedo_env/ &&  source bin/activate &&  bin/python3 /home/ubuntu/hedo/hedo_streaming/manage.py cronjob_everyday6  >> /home/ubuntu/hedo_crontab.log

* * * * *   curl https://abhi-tech.in

  </code>
</pre>

<span class="font-weight-bold"> crontab -r </span> 
<p>
  Remove your crontab file
</p>

<span class="font-weight-bold"> crontab -v </span> 
<p>
  Display the last time you edited your crontab file.
</p>

</article>
</main>



  </body>
</html>
