

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Post</h4>
            </div>
            <div id="modal-body" class="modal-body">
                <?php echo form_open('admin/posts/edit/', array('class' => 'form-horizontal')); ?>
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                    </br>
                    <label for="title">Description</label>
                    <textarea class="form-control" placeholder="textarea"  name="description" id="description" rows="4"></textarea>
                    </br>
                    <label class="fancy-radio">
                        <input name="status" id="draft" value="draft" type="radio">
                        <span><i></i>Draft</span>
                    </label>
                    <label class="fancy-radio">
                        <input name="status" id="published" value="published" type="radio">
                        <span><i></i>Published</span>
                    </label>
                    </br>

                    <select name="category" id="category" class="form-control">
                        <?php foreach ($categories as $key => $cat) {?>
                            <option value="<?php echo $key?>">
                                <?php echo $cat?>
                            </option>
                            <?php } ?>
                    </select>

                    <input type="hidden" name="post_id" id="post_id"/>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Update">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form> 
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table id="posts" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Source</th>
                    <th>Category</th>
                    <th>Image URL</th>
                    <th>URL</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $row) {?>
                    <tr>
                        <td>
                            <?php echo $row->id;?>
                        </td>
                        <td>
                            <?php echo $row->title;?>
                        </td>
                        <td>
                            <?php echo $row->source;?>
                        </td>
                        <td>
                            <?php echo $row->category;?>
                        </td>
                        <td><a href="<?php echo $row->imgurl;?>" target="_blank">View Image</a></td>
                        <td><a href="<?php echo $row->url;?>" target="_blank">Go to Link</a></td>
                        <td>
                            <?php echo date("d-M-y", strtotime($row->created_at));?>
                        </td>
                        <td>
                            <?php if($row->status=="draft"){?> <span class="label label-danger">Draft</span>
                                <?php }else{?>
                                    <span class="label label-success">Published</span>
                                    <?php }?>
                        </td>
                        <td><span class="fa fa-pencil faspacer editpost" data-toggle="modal" data-target="#myModal"><input type="hidden" value="<?php echo $row->id;?>"/></span><span class="fa fa-trash fascpacer deletepost">
                            <input type="hidden" value="<?php echo $row->id;?>"/>
                        </span></td>
                    </tr>
                    <?php }?>
                        </tfoot>
        </table>

    </div>
</div>