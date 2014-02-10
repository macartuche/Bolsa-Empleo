<?php
if ( ! ( defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); 
}
global $_db, $option, $_lknBaseFramework, $_config, $offset, $task;
?>
<table cellpadding="5" cellspacing="0" border="0" id="tools_employees">
	<thead>
        <tr> 
        	<th colspan="8">
            	<strong>
            		<?php echo _lkn_app_history;?>
              	</strong>
            </th>     
        </tr>
	</thead>
   	<tbody>
        <tr>
        	<td class="textresult"><strong><?php echo _lkn_resume;?>/<?php echo _lkn_resume_title_front;?></strong></td> 
            <!--<th><strong><?php //echo _lkn_id;?></strong></th>-->
            <td class="textresult"><strong><?php echo _lkn_job;?></strong></td>
            <td><strong><?php echo _lkn_app_status;?></strong></td>
            <?php /*?><td><strong><?php echo _lkn_app_comments;?></strong></td>  <?php */?>
            <td class="textresult"><strong><?php echo _lkn_app_date;?></strong></td>
            <td class="textresult"><strong><?php echo _lkn_app_last_update_date;?></strong></td>       
        </tr>
        <?php
        $k=1;
        foreach ($row_app_history as $row ) 
        {
            $id=$row->id;
            $app_date=$row->application_date;
            $app_date=lknDate::formatDate($app_date);
            $update_date=$row->update_date;
            $update_date=lknDate::formatDate($update_date);
            $status_title=temizleSlash($row->status_title);
            $comments=$row->comments;
            if ($comments=='') 
            {
                $comments='-';
    
            }
            $job_title=$row->job_title;
            $job_id=$row->job_id;
            $job_ref=$row->job_ref;
            if ($job_ref=='')
            {
                $job_ref='-';
            }
            $resume_title=$row->resume_title;
			$resume_name=$row->resume_name;
            $resume_language=$row->resume_language;
            if ($k=='1')
            {
               $class='jl_odd_row';   
            }
            else
            {
              $class='jl_even_row';
            }
            $app_url="index.php?option=com_jobs&task=edit_employer_application&id=$id".$itemid;
            $app_url=lknSef::url($app_url);
            $job_url="index.php?option=com_jobs&task=edit_employer_job&id=$job_id".$itemid;
            $job_url=lknSef::url($job_url);
            ?>
            <tr>   
            	<td class="textresult"><?php echo $resume_name;?>/<?php echo $resume_title;?></td>       
                <td class="textresult">
                <a href="<?php echo $job_url;?>" target="_job_">
				<?php echo $job_title;?></a>
                </td>
                <td class="textresult"><?php echo $status_title;?></td>    
                <?php /*?><td><?php echo $comments;?></td><?php */?>    		
                <td class="textresult"><?php echo $app_date;?></td> 	
                <td class="textresult"><?php echo $update_date;?></td>     
            </tr>
			<?php
            $k = 3 - $k;
			}
			?>
      	</tbody>
  	</table>