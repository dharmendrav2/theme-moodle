<script type="text/javascript" src="<?php
                                    global $PAGE; if($PAGE->pagelayout !== 'frontpage')
                                        echo $CFG->wwwroot.'/theme/trending/javascript/jquery.min.js';
                                    ?>"></script>
<script type="text/javascript">
 
function myDiv(content){
	if(content == "true"){
		var currentBranch = $('.current_branch').html();
		var cname = $('.active_tree_node').text();
		$('.current_branch').removeClass('contains_branch');
		$('.current_branch').removeClass('depth_3');
		$('#page-course-view-topics .depth_3').remove();
		$('#page-course-view-topics .type_course.depth_2').hide();
		$('#page-course-view-topics .type_system.depth_2 > p').hide();
		//$('.top-page-header, .internalbanner, #page-wrapper #page-footer, .social, .top-page-header .navbar, .top-header').css('display','none');
		$('#page-course-view-topics .block_navigation .block_tree .depth_1>.tree_item.branch').hide();
		$('#page-course-view-topics .block_navigation .block_tree p.hasicon').hide();
		$('#page-course-view-topics .type_course .depth_2').hide();
		
		$('.top-page-header').hide();
        $('.top-header').hide();
        $('.internalbanner').hide();
        $('.social').hide();
        $('#page-footer').hide();
	}
	
	if(content == "false"){
		$('.top-page-header').show();
        $('.top-header').show();
        $('.internalbanner').show();
        $('.social').show();
        $('#page-footer').show();
	}
}
</script>

<?php if(isset($_SESSION['content'])){
	$content = $_SESSION['content'];
	
	if($content == 'true'){
		 echo '<script type="text/javascript">
                 myDiv("true");
            </script>';
	}
	if($content == 'false'){
		 echo '<script type="text/javascript">
                 myDiv("false");
            </script>';
	}
}  ?>

<script type="text/javascript">
   var categorytagline = "<?= $categorytagline ?>";
   var allcoursestagline = "<?= $allcoursestagline ?>";
   var enrolledcoursestagline = "<?= $enrolledcoursestagline ?>";
    var sitenewstagline = "<?= $sitenewstagline ?>";
    var internalbannertagline = "<?= $internalbannertagline ?>";
   
   
   /* Search Courses */
      $(document).ready(function() {
          
        /*=====
        ======= For Main Calendar Section Start============
       ============*/
         if($("body#page-calendar-view .controls .calendar-controls")){
        $("body#page-calendar-view .controls .calendar-controls").addClass("clearfix");
         }
       /*=====
        ======= For Main Calendar Section End============
       ============*/
   
      if($("body.pagelayout-frontpage").length > 0){
        if ($('#frontpage-category-combo').length === 0) {
             $('#page #page-content').css({
                 'display': 'none'
             });
         }
          
         if ($('#coursesearch').length === 0) {
             $('#page .newsearch').css({
                 'display': 'none'
             });
         }
          
           if ($('#frontpage-category-names').length === 0) {
             $('#page .defaultcategories').css({
                 'display': 'none'
             });
         }
          
          if ($('#frontpage-category-names').length === 0) {
             $('#page .customcategories').css({
                 'display': 'none'
             });
         } 
      }

        /*=====
    ======= Course Category Inner Section Start ============
============*/

var courseIndexCate = $('#page-course-index-category .course_category_tree > .content');
var pagination = courseIndexCate.find("nav.pagination");
var currentLocation = window.location;
var page = currentLocation.search.split("&page=");
var pageNum = parseInt(page[1]);
if(courseIndexCate.length > 0 ){
  var courses = courseIndexCate.find('.courses');
  var courseBox = courses.find('.coursebox');
  var courseBoxLen = courseBox.length;
  if(courseBox){
    if(courseBoxLen > 10){
      courseBox.each(function(index, obj){
    
        var panelImg = $(obj).find('.panel-image') ? $(obj).find('.panel-image').css('display', 'none') : '';
        var info = $(obj).find('.panel-body .info');
        if(info){
          $(info).insertBefore($(obj).find('.panel-image'));
        }
    if($(obj).find('.panel-image').children().length === 0){
      $(obj).find('.content').addClass("max-width");
    }else{
      $(obj).find('.content').addClass("mleft");
    }
      });
    }else{
      courseBox.each(function(index, obj){
        if($(obj).find('.panel-image').children().length === 0){
          $(obj).find('.panel-image').addClass("hidden");
          $(obj).find('.content').addClass("mleft");
        }else{
           $(obj).find('.panel-image').removeClass("hidden");
           $(obj).find('.content').removeClass("mleft");
        }
      });
    }
    
  }
}

/*
  === for pagination in course page excluding first page
*/

if(pagination.length !== 0 ){

  if(pageNum !== 0){
    
  if(courseIndexCate.length > 0 ){
  
    var courses2 = courseIndexCate.find('.courses');
    var courseBox2 = courses2.find('.coursebox');
    var courseBoxLen2 = courseBox2.length;
      if(courseBox2){
          if(courseBoxLen2 > 0){
            courseBox2.each(function(index, obj){
              var panelImg2 = $(obj).find('.panel-image') ? $(obj).find('.panel-image').css('display', 'none') : '';
              var info2 = $(obj).find('.panel-body .info');
              if(info2){
                $(info2).insertBefore($(obj).find('.panel-image'));
              }
            });
          }
        
      }
    }
    
  }
}

/*=====
    ======= Course Category Inner Section End ============
============*/

      });
</script>
<script type="text/javascript" src="<?php echo $CFG->wwwroot ?>/theme/trending/javascript/backtotop.js"></script>

