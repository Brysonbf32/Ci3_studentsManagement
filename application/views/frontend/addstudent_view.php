

<style>
    .inputbox{
        font-size:14px;
        border: 2px solid #9A9A9A!important;
        border-radius: 0.5px;
    }
    .inputbox:focus{
        box-shadow:none!important;
        border: 2px solid #9A9A9A!important;
    }
    .buttion_add{
        background-color: #22384B!important;
        padding: 3px!important;
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
    .backbtn{
        background-color: #535353!important;
        padding: 3px!important;
        color: #fff;
        text-decoration: none!important;
        border: 1px solid #535353;
        font-size: 15px!important;
    }
    .formvali{
        color: #1371C3!important;
    }
</style>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-3"></div>
            <div class="col-12 col-lg-6">
                <div class="card">                      
                    <div class="card-body">
                        <form action="<?php echo base_url('student/store'); ?>" method="POST">
                        <div class="container">
                            <div class="row">
                            <h5 class="pt-3">Ajouter</h5>
                                <div class="col-12 col-lg-6">
                                    <label for="">Nom</label>
                                    <input type="text" name="first_name" class="form-control inputbox">
                                    <small class="formvali"><?php echo form_error('first_name');?></small>

                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="">Pren Nom</label>
                                    <input type="text" name="last_name" class="form-control inputbox">
                                    <small class="formvali"><?php echo form_error('last_name');?></small>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <Label>Telephone</Label>
                                    <input type="number" name="phone_stu" class="form-control inputbox">
                                    <small class="formvali"><?php echo form_error('phone_stu');?></small>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <Label>Email</Label>
                                    <input type="text" name="email_stud" class="form-control inputbox">
                                    <small class="formvali"><?php echo form_error('email_stud');?></small>
                                </div>
                                <div class="col-12 col-lg-6 py-4" align="left">
                                    <button class="buttion_add">&nbsp;&nbsp; Enregistre &nbsp;&nbsp;</button>&nbsp;
                                </div>
                                <div class="col-12 col-lg-6 py-4" align="right">
                                    <button class="backbtn">&nbsp;&nbsp;<a href="<?=base_url('student')?>" class="aclas" > Retourner &nbsp;&nbsp;</a></button>   
                                </div>                                             
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3"></div>

        </div>
    </div>
