<div class="crud-area text-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="crud-title text-center">
            <h4>Registered Baby</h4>
        </div>
      </div>
    </div>
     <div class="crud-tbl">
     <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Birth id</th>
                <th>Full name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Place of birth</th>
                <th>Father name</th>
                <th>Mother name</th>
                <th>permanent addr</th>
                <th>Present addr</th>
                <th>Mobile num</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($reg_data as $r_data): ?>
        <tr>
          <td> <?php  echo  $r_data->br_id; ?> </td>
          <td><?php  echo  $r_data->full_name; ?></td>
          <td><?php  echo  $r_data->d_o_b; ?></td>
          <td><?php  echo  $r_data->gender; ?></td>
          <td><?php  echo  $r_data->p_o_b; ?></td>
          <td><?php  echo  $r_data->f_name; ?></td>
          <td><?php  echo  $r_data->m_name; ?></td>
          <td><?php  echo  $r_data->permanent_addr; ?></td>
          <td><?php  echo  $r_data->present_addr; ?></td>
          <td><?php  echo  $r_data->mo_number; ?></td>
          <td>
          <a class="btn crud-btn " href="<?php echo base_url(); ?>Admin_crud/deleteData/<?php echo $r_data->br_id; ?>">Delete </a>
          </td>
          
        </tr>
       <?php endforeach;  ?>
        </tbody>
      </table>
      </table>
            <?php if($this->session->flashdata('deleted')): ?>
            <div style="color:#FFF;align:center;" class="bg-danger">
            <?php echo $this->session->flashdata('deleted'); ?>
            </div>
        <?php endif; ?>
     </div>
  </div>
</div>