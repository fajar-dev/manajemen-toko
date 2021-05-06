<!--modal tambah -->
<div class="modal fade" id="tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form role="form" method="POST">
            <div class="modal-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Penanggung jawab</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Penanggung jawab"  name="penanggung" required>
                  </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Keterangan" name="ket" required>
                    </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="tanggal" name="tgl" required>
                    </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="jumlah" name="jml" required>
                    </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"><div></div></i> Simpan</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!--modal barang tambah -->
<div class="modal fade" id="barang_masuk">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form role="form" method="POST">
            <div class="modal-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama barang</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Penanggung jawab"  name="barang" required>
                  </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Harga awal</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Harga Beli" name="awal" required>
                    </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">eceran</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Harga Eceran" name="eceran" required>
                    </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"><div></div></i> Simpan</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!--modal edit barang-------------------------------------------------------------------------------->
<div class="modal fade" id="barang_edit<?php echo $data['id']; ?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Tambah Data</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form role="form" action="update_masuk.php" method="get">
                                   
                                    <input type="hidden" name="id_mhs" value="<?php echo $data['id']; ?>">
                                <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID</label>
                                      <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Penanggung jawab"  name="id"  value="<?php echo $data['id']; ?>" readonly>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama barang</label>
                                      <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Penanggung jawab"  name="barang"  value="<?php echo $data['barang']; ?>"required>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Harga awal</label>
                                        <div class="col-sm-9">
                                          <input type="number" class="form-control"placeholder="Harga Beli" name="awal" value="<?php echo $data['awal']; ?>" required>
                                        </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">eceran</label>
                                        <div class="col-sm-9">
                                          <input type="number" class="form-control" placeholder="Harga Eceran" name="eceran" value="<?php echo $data['akhir']; ?>" required>
                                        </div>
                                  </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                  <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"><div></div></i> Simpan</button>
                                </div>
                                  
                                </form>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                  <!------------------------------------------------------------------------------------------------------------->

                 