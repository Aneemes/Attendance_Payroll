<script src="../../imports/jquery/dist/jquery.min.js"></script>
<script src="../../imports/moment/moment.js"></script>
<link rel="stylesheet" href="../../imports/font-awesome/css/font-awesome.min.css">
<script>
$(function(){
  /** add active class and stay opened when selected */
  var url = window.location;

  // for sidebar menu entirely but not cover treeview
  $('ul.sidebar-menu a').filter(function() {
     return this.href == url;
  }).parent().addClass('active');

  // for treeview
  $('ul.treeview-menu a').filter(function() {
     return this.href == url;
  }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
  
});
</script>