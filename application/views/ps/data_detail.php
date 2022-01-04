<!doctype html>
<html lang="en">
<head>
<?php $this->load->view('partials/head.php') ?>
</head>
<body>
    <!-- navbar -->
        <?php $this->load->view('partialsguru/navbar.php') ?>
    <!-- End Navbar-->
        <div class="app-main">
    <!-- Sidebar -->
        <?php $this->load->view('partialsguru/sidebar.php') ?>

    <!-- End Sidebar -->
               
                <div class="app-main__outer">
                    <div class="app-main__inner">
                 
                     <div class="row">
                        <?php if($hapus = $this->session->flashdata('hapus')): ?>
                          <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <?= $hapus ?>
                          </div>
                        <?php endif ?>
                        <?php if($simpan = $this->session->flashdata('simpan')): ?>
                          <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <?= $simpan ?>
                          </div>
                        <?php endif ?>
                          <?php if($update = $this->session->flashdata('update')): ?>
                          <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <?= $update ?>
                          </div>
                        <?php endif ?>

                           
                            
                            
                            
                            
                            
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Data Siswa</h5>
                                          

                                        <?php foreach ($content->result() as $key): ?>
                                        <form method="post" action="<?php echo base_url(); ?>ps/data_detail/<?php echo $key->nis ?>">
                                           <div class="row">
                                               <div class="col-md-2">
                                                   <h6>NIS</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-2">
                                                   <h6>
                                                       <?php echo $key->nis ?>
                                                   </h6>
                                               </div>
                                               <input type="hidden" name="nis" value="<?php echo $key->nis  ?>"  >
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-2">
                                                   <h6>Nama</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-4">
                                                   <h6>
                                                       <?php echo $key->nama ?>
                                                   </h6>
                                               </div>
                                               
                                           </div>
                                            <div class="row">
                                               <div class="col-md-2">
                                                   <h6>Rombel</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-2">
                                                   <h6>
                                                       <?php echo $key->rombel ?>
                                                   </h6>
                                               </div>
                                               
                                           </div>
                                        <?php endforeach ?>
                                            <div class="row">
                                               <div class="col-md-2">
                                                   <h6>Jenis Ujian</h6>
                                               </div>
                                               <div class="col-md-1">
                                                   <h6>:</h6>
                                               </div>
                                               <div class="col-md-3">
                                                        <select class="form-control" name="jenis" >
                                                     <?php foreach($jenis as $j){ ?>
                                                   <option value="<?php echo $j->id_jenis; ?>"><?php echo $j->nama_ujian; ?></option>
                                                    <?php } ?>
                                                  </select>
                                               </div>   
                                            </div>
                                                <div class="col-md-4"></div>
                                            <button type="submit" class="btn btn-primary mt-4" style="height: 40px; width: 10rem">OK</button>
                                            <br>
                                                           
                                                           

                                        </form>
                                        

                                        <table class="mb-1 mt-4 table table-bordered text-center">
                                          <thead>
                                            <tr>
                                              <th>Mata Pelajaran</th>
                                              <th>Pengetahuan</th>
                                              <th>Keterampilan</th>
                                              <th>Keterangan</th>
                                            </tr>

                                          </thead>
                                          <tbody>
                                              <?php
                                              foreach ($p as $index => $key) {
                                                ?>
                                              
                                            <tr>
                                              <td><?php echo $key->mapel ?></td>
                                              <td><?php echo $key->nilai ?></td>
                                              <td><?php echo $k[$index]->nilai ?></td>
                                              <td><?php 
                                                if ($key->nilai < 75 || $k[$index]->nilai < 75) {
                                                  ?>
                                                  Belum Kompeten
                                                  <?php 
                                                }else{ ?>

                                                Kompeten
                                              <?php }
                                               ?></td>
                                            </tr>
                                              <?php }

                                               ?>
                                          </tbody>
                                        </table>

                                        </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/main.js') ?>"></script></body>
</html>
