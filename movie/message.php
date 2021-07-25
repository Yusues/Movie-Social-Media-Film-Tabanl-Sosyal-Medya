<div class="card shadow mb-4">
				    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Gelen Mesajlarım</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <!--<th>Mesaj Id</th>-->
                                        <th>Mesaj Başlığı</th>
                                        <th>Mesaj İçeriği</th>
										<th>Mesaj Tarihi</th>
                                        <th>Gönderen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            foreach ($sorgu as $veri) 
                                            {?>
                                                <tr>
                                                <!--<td> <?=$veri["mesaj_id"] ?> </td>-->
                                                    <td> <?=$veri["mesaj_baslik"] ?> </td>
                                                    <td> <?=$veri["mesaj_icerik"] ?> </td>
													<td> <?=$veri["mesaj_tarih"] ?> </td>
                                                    <td> <?php yoneticiAdSoyad($yonId);?> </td>
                                      <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Gönderilen Mesajlarım</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <!--<th>Mesaj Id</th>-->
                                        <th>Mesaj Başlığı</th>
                                        <th>Mesaj İçeriği</th>
										<th>Mesaj Tarihi</th>
                                        <th>Alıcı</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            foreach ($gonderilen as $veri) 
                                            {?>
                                                <tr>
                                                <!--<td> <?=$veri["mesaj_id"] ?> </td>-->
                                                    <td> <?=$veri["mesaj_baslik"] ?> </td>
                                                    <td> <?=$veri["mesaj_icerik"] ?> </td>
													<td> <?=$veri["mesaj_tarih"] ?> </td>
                                                    <td> <?php yoneticiAdSoyad($yonId);?> </td>
                                      <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <a href="kullanici-mesaj-gonder.php" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50"><i class="fas fa-inbox"></i></span>
                                <span class="text">Mesaj Gönder</span>
                            </a>
                        </div>
                    </div>
                </div>