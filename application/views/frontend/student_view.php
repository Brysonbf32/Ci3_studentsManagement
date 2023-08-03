
<style>
    .title_text{
        font-weight: bold!important;
        font-size: 25px!important;
    }
    .buttion_add{
        background-color: #22384B!important;
        padding: 5px!important;
        color: #fff;
        text-decoration: none!important;
        border: 1px solid #22384B;
        font-size: 15px!important;
        margin-left: 4%!important;
    }
    .aclas{
        text-decoration: none!important;
        color: #fff!important;
        font-size: 15px!important;
    }
    .buttion_edit{
        background-color: #22384B!important;
        padding: 3px!important;
        color: #fff;
        text-decoration: none!important;
        border: 1px solid #22384B;
        font-size: 15px!important;
    }
    .buttion_delete{
        background-color: #535353!important;
        padding: 3px!important;
        color: #fff;
        text-decoration: none!important;
        border: 1px solid #535353;
        font-size: 15px!important;
    }
</style>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="container">
                        <h5 align="center" class="title_text pt-3">
                            TOUS MES ETUDIANTS
                        </h5>
                        <button class="buttion_add"><a href="<?=base_url('students/add')?>" class="aclas">&nbsp;&nbsp; Ajouter &nbsp;&nbsp;</a></button>              
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th align="center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($studentes as $row): ?>
                                <tr>
                                <th scope="row"><?=$row->first_name;?></th>
                                <td><?=$row->last_name;?></td>
                                <td><?=$row->phone_stu;?></td>
                                <td><?=$row->email_stud;?></td>

                                <td>
                                    <button type="button" class="buttion_edit"><a href="<?php echo base_url('student/edit/'.$row->id)?>" class="aclas">&nbsp;&nbsp;Editer&nbsp;&nbsp;</a></button>
                                    <button type="button" class="buttion_delete"><a href="<?php echo base_url('student/delete/'.$row->id)?>" class="aclas">&nbsp;Supprimer&nbsp;</a></button>                  
                                </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



