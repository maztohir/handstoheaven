
<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm" style="max-width: 1020px">  
    <div class="switcher">       
        <div class="container">
            <div class="row">
                <div class="col-sm-3 g-margin-b-20--xs g-margin-b-0--md">
                    <div style="background-color: skyblue; text-align: center;" class="g-margin-b-20--xs g-margin-b-0--md">
                      <div class="g-padding-y-15--sm" >
                        <img class="img-circle" src="<?php echo base_url();?>assets/img/970x970/02.jpg" style="height: 200px;"> 
                      </div>
                      <div class="g-padding-y-5--sm">
                        <span class="glyphicon glyphicon-user"></span><?php echo $this->session->userdata('username') ?>  
                      </div>                 
                    </div>

                    <div style="text-align: center">
                     <a onclick="informasipersonal()" class="btn btn-info btn-block" >Edit Profile</a>
                    </div>

                    <div class="panel-group">
                        <div class="panel panel-default" >

                          <div class="">
                            <h4 class="panel-title">
                              <button onclick="overview()" class="btn btn-block btn-default">Overview</button>
                            </h4>
                          </div>

                          <div class="">
                            <h4 class="panel-title">
                              <button onclick="campaignsaya()" class="btn btn-block btn-default">Campaign Saya</button>
                            </h4>
                          </div>

                          <div class="">
                            <h4 class="panel-title">
                              <button onclick="donasi()" class="btn btn-block btn-default">Donasi</button>
                            </h4>
                          </div>

                          <div class="">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#collapse1" class="btn btn-default btn-block">Setting</a>
                            </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body"><a onclick="informasipersonal()">Informasi Personal</a></div>
                            <div class="panel-body"><a onclick="buatpassword()">Buat Password</a></div>
                            <div class="panel-body"><a onclick="gantifotoprofil()">Ganti Foto Profil</a></div>
                            <div class="panel-body"><a onclick="verifikasiakun()">Verifikasi Akun</a></div>
                          </div>

                          <div class="">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#collapse2" class="btn btn-default btn-block">Dompet Kebaikan</a>
                            </h4>
                          </div>
                          <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body"><a onclick="mutasi()" >Mutasi</a></div>
                            <div class="panel-body"><a onclick="tambahdeposit()">Tambah Deposit</a></div>
                            <div class="panel-body"><a onclick="cairkandana()">Cairkan Dana</a></div>
                          </div>
                            <a href="<?php echo base_url();?>index.php/Logout" class="btn btn-info btn-block"><span class="glyphicon glyphicon-off"></span> Logout</a>
                        </div>
                    </div>
                  
                </div> <!-- end col -->

               
                <div class="col-sm-9" id="overview" style="display: initial;" >
                   <h3>Overview</h3>
                  <hr>
                  <div class="row">
                      <div class="col-sm-4">
                            <div class="overview">
                                <span>0</span>
                                <p>Campaign</p>
                            </div>
                      </div><!-- end col -->
                      <div class="col-sm-4">
                            <div class="overview">
                                <span>0</span>
                                <p>Donasi</p>
                            </div>
                      </div><!-- end col -->
                      <div class="col-sm-4">
                            <div class="overview">
                                <span>Rp. 0</span>
                                <p>Total Donasi</p>
                            </div>
                      </div><!-- end col -->

                      <div class="update-list">
                          <div class="g-text-center--xs g-margin-b-80--xs">
                              <h3>Recent Updates </h3>
                              <img src="<?php echo base_url(); ?>assets/img/mockups/pencil-01.png" alt="">
                               <h2 class="no-space"> Tidak ada update terbaru </h2>
                               Belum ada laporan hasil donasi dari campaign yang anda donasikan :( 
                               <br>
                               <br>
                               <a href="./Donate" class="btn btn-primary btn-lg align-center"><span class="btn-text"></span> Donasi Sekarang</a>
                         </div>
                      </div>
                  </div>  <!-- end row -->
                </div> <!-- end col -->

                <div class="col-sm-8" id="campaignsaya" style="display: none;">
                  <h3>Campaign Saya</h3>
                  <hr>
                  
                </div> <!-- end col -->

                <div class="col-sm-8" id="donasi" style="display: none;">
                   <div class="overview">
                       <span>Rp. 0</span>
                       <p>Total Donasi</p>
                   </div>
                   <h3>Donasi Saya</h3>
                   <hr>
                   <div class="table-responsive">          
                     <table class="table">
                       <thead>
                         <tr>
                           <th>Judul Campaign</th>
                           <th>Nominal Donasi</th>
                           <th>Tanggal Donasi</th>
                           <th>Status</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                         </tr>
                       </tbody>
                     </table>
                     </div>
                  
                </div> <!-- end col -->

                <div class="col-sm-8" id="informasipersonal" style="display: none;">
                    <h3>Informasi Personal</h3>
                    <hr>
                    <div>
                      <form>
                        <div class="g-margin-b-20--xs">
                            <label>Nama Lengkap</label>
                            <input type="" class="form-control  g-radius--20" placeholder="username" name="username">
                        </div>
                        <div class="g-margin-b-20--xs">
                            <label>Email</label>
                            <input type="" class="form-control  g-radius--20" placeholder="email" name="email">
                        </div>
                        <div class="g-margin-b-20--xs">
                            <label>Nomor Telp</label>
                            <input type="" class="form-control  g-radius--20" placeholder="phone" name="phone">
                        </div>
                        <div class="g-margin-b-20--xs">
                            <label>Lokasi Anda</label>
                            <input type="" class="form-control  g-radius--20" placeholder="lokasi" name="lokasi_penerima">
                        </div>
                        <div class="g-margin-b-20--xs">
                            <label>Biografi</label>
                            <textarea class="form-control  g-radius--20" placeholder="Biografi Anda" name="deskripsi_lengkap" style="height: 240px;"></textarea>
                        </div>
                        
                      </form>
                    </div>
                </div> <!-- end col -->

                <div class="col-sm-8" id="buatpassword" style="display: none;">
                    <h3>Buat Password</h3>
                    <hr>
                    <div>
                      <form>
                          <div class="g-margin-b-20--xs">
                              <label>Password Baru</label>
                              <input type="" class="form-control  g-radius--20" placeholder="Password Baru" name="password">
                          </div>
                          <div class="g-margin-b-20--xs">
                              <label>Konfirmasi</label>
                              <input type="" class="form-control  g-radius--20" placeholder="Ulangi Password baru" name="password">
                          </div>
                          <button class="btn btn-primary btn-lg">Save</button>
                      </form>
                    </div>
                  
                </div> <!-- end col -->

                <div class="col-sm-8" id="gantifotoprofil" style="display: none;">
                   <h3>Ganti Foto Profil</h3>
                  <hr>
                  
                </div> <!-- end col -->

                <div class="col-sm-8" id="verifikasiakun" style="display: none;">
                   <h3>Verifikasi Akun</h3>
                  <hr>
                  
                </div> <!-- end col -->

                <div class="col-sm-8" id="mutasi" style="display: none;">
                   <h3>Mutasi</h3>
                  <hr>
                  
                </div> <!-- end col -->

                <div class="col-sm-8" id="tambahdeposit" style="display: none;">
                   <h3>Tambah Deposit</h3>
                  <hr>
                  
                </div> <!-- end col -->

                <div class="col-sm-8" id="cairkandana" style="display: none;">
                   <h3>Cairkan Dana</h3>
                  <hr>
                  
                </div> <!-- end col -->
                      

        </div><!-- end row -->
      </div><!-- end container-->
    </div><!-- end switcher -->
</div>
