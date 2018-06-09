<div class="modal" tabindex="-1" role="dialog" id="successmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="alert alert-success" role="alert">
          Post saved successfully!!
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
   <div class="col-md-12">
      <div class="col-md-3">
         <?php echo form_open('index.php/admin/mainc/everything/'.$view, array('class' => 'form-horizontal'));?>
         <div class="col-md-8">
            <input type="text" name="search" class="form-control" placeholder="Everything....">
         </div>
         <div class="col-md-4">
            <button type="submit" id="everything" class="btn btn-primary">Search</button>
         </div>
         </form>
      </div>
      <div class="col-md-4">
         <?php if(isset($sourcelist)) 
            { echo form_open('index.php/admin/mainc/bysource/'.$view, array('class' => 'form-horizontal')); ?>
         <div class="form-group">
            <label for="source" class="col-md-2">Source</label>
            <div class="col-md-6">
               <select name="source" id="source" class="form-control">
                  <?php foreach ($sourcelist as $key => $value) {?>
                    <option value="<?php echo $key?>"><?php echo $value?></option>
                 <?php } ?>
               </select>
            </div>
            <div class="col-md-3"> 
               <input type="submit" class="btn btn-primary" name="submit" value="Fetch" />
            </div>
            </form>
            <?php } ?>
         </div>
      </div>
      <div class="col-md-4">
         <div class="col-md-12">
            <?php if(isset($domainlist))
            { echo form_open('index.php/admin/mainc/bydomain/'.$view, array('class' => 'form-horizontal'));?>
            <div class="form-group">
               <label for="domain" class="col-md-3">Domain</label>
               <div class="col-md-6">
                  <select name="domain" id="domain" class="form-control">
                     <?php foreach ($domainlist as $key => $value) {?>
                      <option value="<?php echo $key?>"><?php echo $value?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="col-md-2"> 
                  <input type="submit" class="btn btn-primary" name="submit" value="Fetch" />
               </div>
            </div>
            </form>
            <?php }?>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <?php 
      if(isset($topheadlines)){ 
         $i=0;
      	foreach($topheadlines as $key=>$value)
      			{  
      ?>
   <div class="col-md-4">
      <div id="panel-scrolling-demo" class="panel">
         <div class="panel-heading">
            <h3 id="title<?php echo $i;?>" class="panel-title"><?php echo $value->title;?></h3>
         </div>
         <div class="panel-body">
            <img id="img<?php echo $i;?>" src="<?php echo $value->urlToImage;?>" width="342"/>
            <p id="desc<?php echo $i;?>"><?php echo $value->description;?></p>
            <p><a id="url<?php echo $i;?>" href="<?php echo $value->url;?>"><?php echo $value->url;?></a> </p>
         </div>
         <div class="panel-footer">
            <div class="row">
              
               <div class="col-md-9">
                  <select name="category" id="cat<?php echo $i;?>" class="form-control">
                     <?php foreach ($categories as $key => $cat) {?>
                      <option  value="<?php echo $key?>"><?php echo $cat?></option>
                     <?php } ?>
                  </select>
               </div>
               <div class="col-md-3">
                  
                  <input type="hidden" id="source<?php echo $i;?>" value="<?php echo $value->source->name;?>">
                  <input type="hidden" id="view" value="<?php $view;?>">
                  <input type="hidden" id="siteurl" value="<?php echo site_url();?>">
                  <input type="hidden" id="ivalue" value="<?php echo $i;?>">
                  <button type="button" class="add btn btn-success">Add</button>
               </div>
          
            </div>
         </div>
      </div>
   </div>
   <?php $i++;
      }

      }
      ?>
</div>

