<div class="g-bg-color--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">

        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Buat Compaign</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">Isi Form Berikut</h2>
        </div>
        <form role="form" action="<?php echo base_url('index.php/BuatCampaign/store'); ?>"  method="post" >
            <div class="row g-margin-b-40--xs">
                <div class="col-sm-12 g-margin-b-20--xs g-margin-b-0--md">
                    <div class="g-margin-b-20--xs">
                        <label>Judul</label>
                        <input type="text" class="form-control g-radius--20" placeholder="Judul" name="judul">
                    </div>
                    <div class="g-margin-b-20--xs">
                        <label>Target Dana</label>
                        <input type="input" class="form-control  g-radius--20" placeholder="Target Dana" name="target_dana">
                    </div>
                    <div class="g-margin-b-20--xs">
                        <label>Tanggal Mulai</label>
                        <input type="Date" class="form-control  g-radius--20"  name="tanggal_mulai">
                    </div>
                    <div class="g-margin-b-20--xs">
                        <label>Tangal Selesai</label>
                        <input type="Date" class="form-control  g-radius--20"  name="tanggal_selesai">
                    </div>
                    <div class="g-margin-b-20--xs">
                        <label>Kategori</label>
                        <input type="input" class="form-control  g-radius--20"  placeholder="Kategori" name="kategori">
                    </div>
                    <div class="g-margin-b-20--xs">
                        <label>Lokasi Penerimaan</label>
                        <input type="input" class="form-control  g-radius--20" placeholder="Lokasi Penerimaan" name="lokasi_penerimaan">
                    </div>
                    <div class="g-margin-b-20--xs">
                        <label>Deskripsi Singkat</label>
                        <textarea class="form-control  g-radius--20" placeholder="Deskripsi Singkat" name="deskripsi_singkat" style="height: 120px;"></textarea>
                    </div>
                    <div class="g-margin-b-20--xs">
                        <label>Deskripsi Lengkap</label>
                        <textarea class="form-control  g-radius--20" placeholder="Deskrips Lengkap" name="deskripsi_lengkap" style="height: 240px;"></textarea>
                    </div>
                    <div class="g-margin-b-20--xs">
                        <label>Penanggung Jawab</label>
                        <input type="" class="form-control  g-radius--20" placeholder="Penanggung Jawab" name="penanggung_jawab">
                    </div>
                  
                </div>
            </div>
            <div class="g-text-center--xs">
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg  g-padding-x-80--xs">Buat Campaign</button>
            </div>
        </form>

    </div>
</div>

