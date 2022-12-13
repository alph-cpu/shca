
<?php $__env->startSection('title','SHCA - Curriculum'); ?>
<?php $__env->startSection('content'); ?>

  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <div class="rounded">
      <main class="container clear"> 
        <!-- main body --> 
        <!-- ################################################################################################ -->
        <div class="sidebar one_quarter first"> 
          <?php 
          if(request()->id < 4){
            $class= "JSS";
          }else{
            $class="SSS";
          }
          if(request()->id1 == 1){
            $term= "First";
          }elseif(request()->id1 == 2){
            $term= "Second";
          }else{
            $term="Third";
          }
          if(request()->id == 4){
            $fm= "1";
          }elseif(request()->id == 5){
            $fm= "2";
          }elseif(request()->id == 6){
            $fm="3";
          }else{
            $fm=request()->id;
          }
          ?>
          <!-- ################################################################################################ -->
          <h6><?php echo e($class." ".$fm); ?> <?php echo e($term); ?> Term Curriculum</h6>
          <nav class="sdb_holder">
            <ul>
              <li><a href="#">Agricultural Science</a></li>
              <li><a href="#">Basic Science</a></li>
              <li><a href="#">Biology</a></li>
              <li><a href="#">Chemistry</a></li>
              <li><a href="#">Data Processing</a></li>
              <li><a href="#">English Language</a></li>
              <li><a href="#">French Language</a></li>
              <li><a href="#">Further Mathematics</a></li>
              <li><a href="#">Mathematics</a></li>
              <li><a href="#">Physics</a></li>
              <li><a href="#">Social Studies</a></li>
            </ul>
          </nav>
          <!--News here -->
          <div class="sdb_holder">
            <article>
              <h6>News Flash</h6>
              <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
              <ul>
                <li><a href="#">Lorem ipsum dolor sit</a></li>
                <li>Etiam vel sapien et</li>
                <li><a href="#">Etiam vel sapien et</a></li>
              </ul>
              <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
              <p class="more"><a href="#">Continue Reading &raquo;</a></p>
            </article>
          </div>
          <!-- ################################################################################################ --> 
        </div>
       
        <!-- ################################################################################################ -->
        <div id="content" class="two_third"> 
          <!-- ################################################################################################ -->
          <h1>Academic Curriculum for <?php echo e($class." ".$fm); ?> <br>Preamble</h1>
          <p>This is the syllabus on Data Processing as published by the NERDC. It is designed to test basic knowledge and skills acquisition in data processing.</p>
         
          <h1>Objectives of the Syllabus</h1>
          <div class="scrollable">
            <p>There will be two papers to be taken during the WAEC Examination.</p>
          </div>
          <h1>Detailed Syllabus</h1>
          <div class="scrollable">
            <table>
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Topic</th>
                  <th>Content</th>
                  <th>Notes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="#">1</a></td>
                  <td>Information Age<br>History of Computers</td>
                  <td>Computing Devices</td>
                  <td>Difference between data and information should be emphasized</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Data and Information</td>
                  <td>Computing Devices</td>
                  <td>Difference between data and information should be emphasized</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Basic Computing</td>
                  <td>Computing Devices</td>
                  <td>Difference between data and information should be emphasized</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Application of ICT in Everyday Life</td>
                  <td>Computing Devices</td>
                  <td>Difference between data and information should be emphasized</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- ################################################################################################ --> 
        </div>
        <!-- ################################################################################################ --> 
        <!-- / main body -->
        <div class="clear"></div>
      </main>
    </div>
  </div>
  <!-- ################################################################################################ --> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sacred-heart-college\resources\views//curriculum.blade.php ENDPATH**/ ?>