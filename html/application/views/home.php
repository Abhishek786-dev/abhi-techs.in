<!DOCTYPE html>
<html lang="en">
  
  <?php 
    $this->load->view('layout/header');
  ?>
  
  <body>
    
    <link rel="stylesheet" href="<?php echo base_url('static/'); ?>assets/css/style.css" />
    <?php 
      $this->load->view('layout/menu');
    ?>
    <main>

      <section id="intro" class="section scrollspy full-height">
        <div class="overlay"></div>
        <div class="container">
          <!-- <h2>
            I want to <span class="teal">make things</span><br />that
            <span class="underline">make a difference</span>.
          </h2> -->
        </div>
      </section>

      <?php 
        $this->load->view('sections/about');
        $this->load->view('sections/experiance');
        $this->load->view('sections/projects');
        $this->load->view('sections/skills');
        $this->load->view('sections/certification');
        $this->load->view('sections/education');
        $this->load->view('sections/contact');
        $this->load->view('sections/blogs');
      ?>
    </main>

    <?php 
      $this->load->view('layout/footer');
    ?>
    
  </body>
</html>
