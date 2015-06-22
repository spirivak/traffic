<select id="pay" class="selecttwo span6" name="pay" required>
																		<option>&nbsp;</option>
																		<?php
																			
																			$res=mysqli_query($db,"Select * from payment");
																			
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s">%s</option>',$row["id"],$row["pay_val"]);
																			}
;																		?>
																	</select>
																	<input id="rate" class="span3" type="text" name="rate" value="" required>
																	<select  class="selecttwo span2" name="currT" required>
																		<option>&nbsp;</option>
																		<?php
																			
																			$res=mysqli_query($db,"Select * from currency");
																			
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s">%s</option>',$row["id"],$row["curname"]);
																			}
																	?>
																	</select>
																	<input id="btn_pay_plus" class="span1" type="button" name="" value="+" >