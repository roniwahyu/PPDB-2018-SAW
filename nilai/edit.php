
	<?php 
	if(isset($_GET['id'])):
						$sql="select * from nilai a join siswa b on a.id_siswa=b.id_siswa where a.id_siswa=".base64_decode($id);
					endif;
					// print_r($sql);
					$query=$koneksi->query($sql);// or die(error_log($koneksi->error()));
					$i=1;
	 ?>
<form action="<?= baseurl.'nilai.php?a='.base64_encode("save"); ?>" method="post">
<table class="table table-hover table-condensed table-striped table-bordered datatables">
				<thead>
					<tr>
					
						<th rowspan="2" class="text-center" >UN</th>
						<th colspan="5" class="text-center" >IPA</th>
						<th colspan="5" class="text-center">IPS</th>
						<th colspan="5" class="text-center">Bahasa</th>
					</tr>
					<tr class="small">
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
						<th>I</th>
						<th>II</th>
						<th>III</th>
						<th>IV</th>
						<th>V</th>
					</tr>
				</thead>
				<tbody>
				<?php
					
					while($row=$query->fetch_assoc()):?>
						<input type="hidden" name="id_siswa" value="<?= !empty($row['id_siswa'])?base64_encode($row['id_siswa']):''; ?>">
						<input type="hidden" name="id_nilai" value="<?= !empty($row['id_nilai'])?base64_encode($row['id_nilai']):''; ?>">
						<tr>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="nilai_un" value="<?= !empty($row['nilai_un'])?($row['nilai_un']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ipa1" value="<?= !empty($row['ipa1'])?($row['ipa1']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ipa2" value="<?= !empty($row['ipa2'])?($row['ipa2']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ipa3" value="<?= !empty($row['ipa3'])?($row['ipa3']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ipa4" value="<?= !empty($row['ipa4'])?($row['ipa4']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ipa5" value="<?= !empty($row['ipa5'])?($row['ipa5']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ips1" value="<?= !empty($row['ips1'])?($row['ips1']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ips2" value="<?= !empty($row['ips2'])?($row['ips2']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ips3" value="<?= !empty($row['ips3'])?($row['ips3']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ips4" value="<?= !empty($row['ips4'])?($row['ips4']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="ips5" value="<?= !empty($row['ips5'])?($row['ips5']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="bing1" value="<?= !empty($row['bing1'])?($row['bing1']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="bing2" value="<?= !empty($row['bing2'])?($row['bing2']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="bing3" value="<?= !empty($row['bing3'])?($row['bing3']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="bing4" value="<?= !empty($row['bing4'])?($row['bing4']):'';?>"></td>
							<td style="padding: 3px;"><input type="text" class="form-control text-center" style="padding:10px;font-size: 12pt;width:100%;height:40px" placeholder="0" name="bing5" value="<?= !empty($row['bing5'])?($row['bing5']):'';?>"></td>
							
						</tr>
					<?php $i++;endwhile;
				 //include('list-nilai.php'); 
					//show_fuzzy('all');
					//rule_fuzzy();
				?>
				</tbody>
			</table>

	
	<div class="form-group row">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-secondary">Edit Nilai</button>
		</div>
	</div>
</form>