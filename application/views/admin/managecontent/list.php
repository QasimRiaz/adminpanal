<div class="datalist">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="50"><?= trans('menuorder') ?></th>
                <th><?= trans('menuname') ?></th>
                <th><?= trans('menuurl') ?></th>
                <th width="100"><?= trans('status') ?></th>
                <th width="120"><?= trans('action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row): ?>
            <tr>
            	<td>
					<?=$row['menu_order']?>
                </td>
                <td>
					<h4 class="m0 mb5"><?=$row['post_title']?> </h4>
                    
                </td>
                <td>
                    <?=$row['post_content']?>
                </td> 
               
               
                <td><input class='tgl tgl-ios tgl_checkbox' 
                    data-id="<?=$row['ID']?>" 
                    id='cb_<?=$row['ID']?>' 
                    type='checkbox' <?php echo ($row['post_status'] == 1)? "checked" : ""; ?> />
                    <label class='tgl-btn' for='cb_<?=$row['ID']?>'></label>
                </td>
                <td>
                    <a href="<?= base_url("admin/managecontent/edit/".$row['ID']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url("admin/managecontent/delete/".$row['ID']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

