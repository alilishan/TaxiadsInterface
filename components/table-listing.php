

<!-- Table Listing -->

	<div class="toolbar-listing">
		

		<div class="bulk-action pull-left">

			<div class="fancy-checkbox-parent" data-target="#table-listing .fancy-checkbox input:checkbox">
				<input type="checkbox" id="fancyCheckboxParent">
				<label for="fancyCheckboxParent"></label>
			</div>

			<div class="bulk-options btn-group">
				<button type="submit" class="btn btn-default" name="bulk_action" value="bulk_delete">Delete</button>
			</div>

		</div>

		<div class="fancy-filter pull-left">
			<i class="icon"></i>
			<input id="jetsSearch" type="text" class="ff-input" placeholder="Search">
		</div>

		<div class="pull-right text-right">

			<div class="btn-group fancy-dropdown">
				<button type="button" class="btn btn-default btn-ta-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">PDF</a></li>
					<li><a href="#">CSV</a></li>
					<li><a href="#">XLS</a></li>
				</ul>
			</div>
			
		</div>

	</div>


	<div class="table-responsive">
		
		
		<table id="table-listing" class="table table-listing">
			<thead>
				<tr>
					<th class="col-half"></th>
					<th class="col-xs-1"></th>
					<th class="col-xs-3">Name</th>
					<th class="col-xs-2">Target</th>
					<th class="col-xs-2">Budget <i class="fa fa-info-circle icon-info" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Amount that was set during set-up."></i></th>
					<th class="col-xs-2">Amount Spent <i class="fa fa-info-circle icon-info" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Sum that has been spent."></i></th>
					<th class="col-xs-2">Actions</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td class="v-middle">
						<div class="fancy-checkbox"><input id="ccbx-61" type="checkbox" name="item_id[]" value="61"><label for="ccbx-61"></label></div>
					</td>
					<td class="v-middle text-center">
						<div class="material-switch sm-switch">
							<input id="someSwitchOptionPrimary2" name="someSwitchOption002" type="checkbox">
							<label for="someSwitchOptionPrimary2" class="label-success"></label>
						</div>	
					</td>
					<td>
						<div class="tl-heading">Celcom SmartPlan</div>
						<div class="tl-description"><i class="fa fa-calendar-o" aria-hidden="true"></i> Mar 4, 2015 - Jun 5, 2015</div>
					</td>
					<td><div class="tl-value">Bangsar</div></td>
					<td><div class="tl-value">$10.00</div> <span class="tl-info">Per Day</span></td>
					<td><div class="tl-value">$100.00</div></td>
					<td class="btn-cell">
						<a href="#" class="btn btn-link btn-listing" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
						<a href="#" class="btn btn-link btn-listing btn-delete" data-title="Delete Campaign" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>

				<tr>
					<td class="v-middle">
						<div class="fancy-checkbox"><input id="ccbx-62" type="checkbox" name="item_id[]" value="62"><label for="ccbx-62"></label></div>
					</td>
					<td class="v-middle text-center">
						<div class="material-switch sm-switch">
							<input id="someSwitchOptionPrimary3" name="someSwitchOption003" type="checkbox">
							<label for="someSwitchOptionPrimary3" class="label-primary"></label>
						</div>	
					</td>
					<td>
						<div class="tl-heading">Cafe' Promotions</div>
						<div class="tl-description"><i class="fa fa-calendar-o" aria-hidden="true"></i> Dec 4, 2015 - Jan 5, 2015</div>
					</td>
					<td><div class="tl-value">Mont Kiara</div></td>
					<td><div class="tl-value">$10.00</div> <span class="tl-info">Per Day</span></td>
					<td><div class="tl-value">$100.00</div></td>
					<td class="btn-cell">
						<a href="#" class="btn btn-link btn-listing" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
						<a href="#" class="btn btn-link btn-listing btn-delete" data-title="Delete Ad" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>

			</tbody>



		</table>
	</div> <!-- END .table-responsive -->


<!-- END Table Listing -->