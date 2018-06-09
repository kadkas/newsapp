</div>
</div>
</div>



<script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>js/klorofil-common.js"></script>
<script src="<?php echo base_url();?>vendor/toastr/toastr.min.js"></script>

	
	<script type="text/javascript">
   
$(document).ready(function(){

   $(".add").click(function(){

      var siteurl = $("#siteurl").val();
      var i = $(this).prev('input').val();
      var category = $("#cat"+i).val();
      var title = $("#title"+i).text();
      var url = $("#url"+i).text();
      var imgurl = $("#img"+i).attr('src');
      var description = $("#desc"+i).text();
      var source = $("#source"+i).val();

     

    $.post(siteurl+"index.php/admin/mainc/insert/",
    {
        title: title,
        category: category,
        url:url,
        description:description,
        imgurl:imgurl,
        source:source

    },
    function(data, status){
      
        $('#successmodal').modal('show');
    });

  });


 
    $('#posts').DataTable();


    $(".editpost").click(function(){

      var siteurl = $("#siteurl").val();
      var id = $(this).find('input').val();
      
      $.get("getpostbyid/"+id, function( data ) {
      
        var data = $.parseJSON(data);
       
        $("#modal-body").find($("#title")).val(data.title);
        $("#modal-body").find($("#description")).val(data.description);
        $("#modal-body").find($("#img")).text(data.imgurl);
        $("#modal-body").find($("#url")).val(data.url);
        $("#modal-body").find($("#post_id")).val(data.id);
        if(data.status=="draft")

          {$("#modal-body").find($("#draft")).prop("checked", true);}
        else {$("#modal-body").find($("#published")).prop("checked", true);}

        $("#modal-body").find($("#category")).val(data.category).prop("selected", true);


      });

      

      });

     $(".deletepost").click(function(){

      var id = $(this).find('input').val();

      

      $.get("deletepost/"+id, function( data ) {

        location.reload();
      });

     });



});


</script>
  </body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
    

</html>