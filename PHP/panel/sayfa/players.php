<?php
$conn = new mysqli($db_addr, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
	echo mysqli_connect_errno();
}

$olderDate = new DateTime();
$olderDate->add(DateInterval::createFromDateString('-1 minute'));

$query = $conn->prepare("UPDATE LauncherStatuses SET status=0 WHERE status!=-5 AND status!=-3 AND login_date < '" . $olderDate->format('Y-m-d H:i:s') . "'");
$query->execute();
$query->close();

if(isset($_GET['islem'])){
	if(isset($_GET['id'])){
		if(strstr($_GET['id'],"steam")){
			$id = $_GET['id'];
		}else{
			$id = 0;
		}	
	}
	
	if($_GET['islem'] == 'af'){
		$query = $conn->prepare("UPDATE LauncherStatuses SET status=0 WHERE steamid=?");
		$query->bind_param('s', $id);
		$query->execute();
		$query->close();
	}
}

$statuses[-5] = '<label class="badge badge-danger">Hile</label>';
$statuses[-4] = '<label class="badge badge-outline-primary">Launcher Kapatıyor</label>';
$statuses[-3] = '<label class="badge badge-warning">Whitelist Ekli Değil</label>';
$statuses[-1] = '<label class="badge badge-success">Oyunda</label>';
$statuses[0] = '<label class="badge badge-outline-light">Kapalı</label>';
$statuses[1] = '<label class="badge badge-outline-success">Sunucuya Bağlanıyor</label>';
$statuses[2] = '<label class="badge badge-primary">Launcher Açık</label>';
?>
 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
					<?php
							  $list = mysqli_query($conn,'SELECT * FROM LauncherStatuses');
								if(mysqli_num_rows($list) <= 0 ){
									echo '<div class="table-responsive">Hile kullanan tespit edilemedi</div>';
								}else{
						?>
						<div class="table-responsive">
						<table class="table">
                        <thead>
                          <tr>
                            <th>SteamID</th>
							 <th>Son Görülme</th>
                            <th>Tespit Edilen Hileler</th>
							<th>Durum</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
						<?php
									while($listele = mysqli_fetch_assoc($list)){
										echo '<tr>
												<td>'.$listele['steamid'].'</td>
												<td>'.$listele['login_date'].'</td>
												<td>'.$listele['cheat_name'].'</td>
												<td>' . $statuses[$listele['status']] . '</td>
												<td align="right">
													<!--a href="index.php?sayfa=hile&islem=af&id='.$listele['steamid'].'" class="badge badge-success">Affet</a-->
												</td>
											  </tr>';
									}
						?>
  </tbody>
                      </table>
					  </div>
					<?php
							}
					?>
                  </div>
                </div>
              </div>
<?php
mysqli_close($conn);
?>