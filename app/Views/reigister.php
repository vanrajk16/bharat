
    <!-- <div class="image__reg"></div> -->
    <div class="registration"></div>
    <div class="container-fluid content-section">
		<form id="registration_form" name="f1" action="<?php echo base_url('register'); ?>" method="POST"  enctype="multipart/form-data">
			<div class="h-space-padd-r">
				<h3 class="p-title" style="background-image: url(<?php echo base_url('assets/Images/regFrame.jpg');?>);"><span class="reg__font">Registration</span></h3>
			</div>
			<div class="h-space-padd-r col-lg-12" id="basicdetail_div" style="display: none;">
					<h3 class="p-title" style="background-image: url(<?php echo base_url('assets/Images/bg.jpg');?>);"><span style="font-size: 15px;">Basic Details</span></h3>
			</div>
			<!-- <div class="clearfix"></div> -->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Registration Type						<span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="utype" id="regtype">
							<option value="0">-Select-</option>
							<option value="F">Seller</option>
							<option value="T">Buyer</option>
							<option value="A">Commission Agent</option>
							<option value="P">Service Provider</option>
						</select>
						<div class="text-danger" id="regtype_error" style="display:none;"></div>
					</div>
				</div>

				<div style="display: none;" class="mydisplayboxfpcT">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							Registration Category 
							<span style="color:#F00">*</span>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<select class="form-control" name="regcat" onchange="showboxfpcfpo(this.value)" onfocus="clearApmcT(this);" id="regcat">
								<option value="0">Select Please</option>
								<option value="TA">Trader</option>
								<option value="CA">Commission Agent</option>
								<option value="EX">Exporter</option>
								<option value="GA">Government Agency</option>
								<option value="RT">Retailor</option>
								<option value="OT">Other</option>
							</select>
						</div>
					</div>
				</div>

				<div style="display: none;" class="mydisplayboxfpcF">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							Registration Category							<span style="color:#F00">*</span>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<select class="form-control" name="fpctypeF" id="fpctypeF">
								<option>Select Please</option>
								<option value="IF">Individual Farmer</option>
								<option value="FF">Farmer Producer Company (FPC)</option>
								<option value="CR">Co-Operative</option>
								<option value="FG">Farmer Group(SHG)</option>
								<option value="GA">Government Agency</option>
								<option value="OT">Other(Aggregator etc.)</option>
							</select>
						</div>
					</div>
				</div>
				
				<div style="display: none;" class="mydisplayboxbuy">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							Registration Category							<span style="color:#F00">*</span>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<select class="form-control" name="fpctypeT" id="fpctypeT">
								<option>Select Please</option>
								<option value="TA">Trader</option>
								<option value="CA">Commission Agent</option>
								<option value="CO">Co-Operative</option>
								<option value="EX">Exporter</option>
								<option value="PO">Processor</option>
								<option value="GA">Government Agency</option>
								<option value="RT">Retailor</option>
								<option value="AG">Aggregator</option>
								<option value="OT">Other</option>
							</select>
						</div>
					</div>
				</div>

				<div style="display: none;" class="mydisplayboxfpcSP">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom:20px;">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							Registration Category
							<span style="color:#F00">*</span>

						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<select class="form-control" name="fpctypeP" id="fpctypeP">
								<option>Select Please</option>
								<option value="HA">Hamal</option>
								<option value="LP">Logistic Provider</option>
								<option value="LU">Loader / Unloader</option>
								<option value="GD">Grader</option>
								<option value="WH">Warehouse</option>
								<option value="CS">Cold Storage Operator</option>
								<option value="PK">Packer</option>
								<option value="QA">Quality Assayer</option>
								<option value="OT">Other</option>
							</select>
						</div>
					</div>
				</div>	
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 apply_enam_mandi" style="padding-bottom:10px;display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Registered with e-NAM 
						<span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="radio" class="enam_mandi" name="regiWithEnam" value="E" id="enamMandi"> Yes						<input type="radio" class="enam_mandi" name="regiWithEnam" value="N" id="nonEnamMandi" style="margin-left: 10px;"> No					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="mandi_trader" style="padding-bottom:10px;display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
							   e-NAM Trader ID							   <span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					   <input type="text" autocomplete="off" class="form-control" name="trader_id" id="trader_id" maxlength="20" onchange="validateUnifiedTrader();">
					   <div class="text-danger" id="trader_id_error" style="display:none;"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pt-2" id="state_name" style="padding-bottom:20px;display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!-- Registered With State
						<span style="color:#F00">*</span> : -->
						<span id="registered_label_s">Registered With State<span style="color:#F00">*</span> :</span>
						<span id="register_label_s" style="display:none">Register With State<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="mandistate" id="regstate" onchange="dyanamicStateChange(this.id,this.id);">
								<option selected="" value="0">-Select-</option>
						<option value="AN-37-ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option><option value="AP-276-ANDHRA PRADESH">ANDHRA PRADESH</option><option value="AS-38-ASSAM">ASSAM</option><option value="BR-33-BIHAR">BIHAR</option><option value="CH-526-CHANDIGARH">CHANDIGARH</option><option value="CG-100-CHHATTISGARH">CHHATTISGARH</option><option value="GA-34-GOA">GOA</option><option value="GJ-22-GUJARAT">GUJARAT</option><option value="HR-32-HARYANA">HARYANA</option><option value="HP-43-HIMACHAL PRADESH">HIMACHAL PRADESH</option><option value="JK-696-JAMMU AND KASHMIR">JAMMU AND KASHMIR</option><option value="JH-47-JHARKHAND">JHARKHAND</option><option value="KA-695-KARNATAKA">KARNATAKA</option><option value="KL-694-KERALA">KERALA</option><option value="MP-20-MADHYA PRADESH">MADHYA PRADESH</option><option value="MH-296-MAHARASHTRA">MAHARASHTRA</option><option value="NL-35-NAGALAND">NAGALAND</option><option value="OD-384-ODISHA">ODISHA</option><option value="PC-599-PUDUCHERRY">PUDUCHERRY</option><option value="PB-602-PUNJAB">PUNJAB</option><option value="RJ-26-RAJASTHAN">RAJASTHAN</option><option value="TN-509-TAMIL NADU">TAMIL NADU</option><option value="TS-28-TELANGANA">TELANGANA</option><option value="TR-36-TRIPURA">TRIPURA</option><option value="UP-46-UTTAR PRADESH">UTTAR PRADESH</option><option value="UT-385-UTTARAKHAND">UTTARAKHAND</option><option value="WB-569-WEST BENGAL">WEST BENGAL</option></select>
						<div class="text-danger" id="regstate_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  pt-2" id="apmc_name" style="padding-bottom:20px;display:none">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span id="registered_label_m">Registered with Mandi<span style="color:#F00">*</span> :</span>
						<span id="register_label_m" style="display:none">Register with Mandi<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="apmcname" id="reg_with">
						   <option selected="" value="0">-Select-</option>
						</select>
						<div class="text-danger" id="reg_with_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  pt-2" id="service_territory" style="display:none">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Service Territory :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="serviceTerritory" id="serviceTerritory">
							<option selected="" value="">Service Territory</option>
							<option value="I">Intra State</option>
							<option value="IS">Inter State</option>
						</select>
						<div class="text-danger" id="serviceTerritory_error" style="display:none;"></div>
					</div>
				</div>
			</div>
			
			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="apply_state" style="padding-bottom:10px;display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Applying For State						<span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="applystate" id="applystate" onchange="onApplyStateChange(this)">
								<option selected="" value="0">-Select-</option>
						<option value="AN-37-ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option><option value="AP-276-ANDHRA PRADESH">ANDHRA PRADESH</option><option value="AS-38-ASSAM">ASSAM</option><option value="BR-33-BIHAR">BIHAR</option><option value="CH-526-CHANDIGARH">CHANDIGARH</option><option value="CG-100-CHHATTISGARH">CHHATTISGARH</option><option value="GA-34-GOA">GOA</option><option value="GJ-22-GUJARAT">GUJARAT</option><option value="HR-32-HARYANA">HARYANA</option><option value="HP-43-HIMACHAL PRADESH">HIMACHAL PRADESH</option><option value="JK-696-JAMMU AND KASHMIR">JAMMU AND KASHMIR</option><option value="JH-47-JHARKHAND">JHARKHAND</option><option value="KA-695-KARNATAKA">KARNATAKA</option><option value="KL-694-KERALA">KERALA</option><option value="MP-20-MADHYA PRADESH">MADHYA PRADESH</option><option value="MH-296-MAHARASHTRA">MAHARASHTRA</option><option value="NL-35-NAGALAND">NAGALAND</option><option value="OD-384-ODISHA">ODISHA</option><option value="PC-599-PUDUCHERRY">PUDUCHERRY</option><option value="PB-602-PUNJAB">PUNJAB</option><option value="RJ-26-RAJASTHAN">RAJASTHAN</option><option value="TN-509-TAMIL NADU">TAMIL NADU</option><option value="TS-28-TELANGANA">TELANGANA</option><option value="TR-36-TRIPURA">TRIPURA</option><option value="UP-46-UTTAR PRADESH">UTTAR PRADESH</option><option value="UT-385-UTTARAKHAND">UTTARAKHAND</option><option value="WB-569-WEST BENGAL">WEST BENGAL</option></select>
						<div class="text-danger" id="applystatestate_error" style="display:none;"></div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="apply_apmc" style="padding-top:10px;display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
							   Apply For APMC							   <span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					   <div class="dropdown-container-chk">
                            <div class="dropdown-button noselect">
                                <div class="dropdown-label">APMC's</div>
                                <div class="dropdown-quantity">(<span class="quantity">Any</span>)</div>
                                <i class="fa fa-filter"></i>
                            </div>
                            <div class="dropdown-list" style="display: none;">
                                <input type="search" placeholder="Search APMC" class="dropdown-search" id="multichkAPMC">
                                <ul></ul>
                            </div>      
                            </div>
					   <div class="text-danger" id="trader_id_error" style="display:none;"></div>
					</div>
					<input type="hidden" name="selectApmcList" id="selectApmcList">
				</div>
			</div>


			<!-- start -  New change raised by client -->
			<div class="row buyerCase" style="display: none;">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-top:17px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Commodity Type						<span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="radio" class="commo_type" name="commoType" value="D" id="a_level"><span class="commo_typespan"> Denotified Commodity </span> 
						<input type="radio" class="commo_type" name="commoType" value="N" id="b_level" style="margin-left: 10px;"><span class="commo_typespan"> Notified Commodity </span> 
						<input type="radio" class="commo_type" name="commoType" value="B" id="c_level" style="margin-left: 10px;"><span class="commo_typespan"> Both </span> 
						<div class="text-danger" id="commoType_error" style="display:none;"></div>
					</div>
				</div>
			</div>
			<!-- end -  New change raised by client -->	

			<div class="clearfix"></div>											
			<!---------------- changes farmer registration ------------------------------------->
			<div class="h-space-padd-r col-lg-12 pt-2">
					<h3 class="p-title personal__det" style="background-image: url(<?php echo base_url('assets/Images/Frame.jpg');  ?>);"><span style="font-size: 20px;">Personal Details</span></h3>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
						Title <span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
						<select class="form-control" name="nametitle" id="nametitle">
							<option value="0">Select Please</option>
							<option value="Mr">Mr.</option>
							<option value="Mrs">Mrs.</option>
							<option value="Ms">Ms.</option>
						</select>
						<div class="text-danger" id="nametitle_error" style="display:none;"></div>
					</div>
				</div>
						
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
						First Name <span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
					   <input type="text" autocomplete="off" class="form-control" name="fname" id="reg_fname" maxlength="40">
					   <div class="text-danger" id="reg_fname_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
					   Middle Name :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
					   <input type="text" autocomplete="off" class="form-control" name="mname" id="reg_mname" maxlength="20">
					   <div class="text-danger" id="reg_mname_error" style="display:none;"></div>
					</div>
				</div>
						
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
					 Last Name <span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
					   <input type="text" autocomplete="off" class="form-control" name="lname" id="reg_lname" maxlength="40">
					   <div class="text-danger" id="reg_lname_error" style="display:none;"></div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Gender <span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="gender" id="reg_gender">
							<option value="0">-Select-</option>
							<option value="M">Male</option>
							<option value="F">Female</option>
							<option value="O">Others</option>
						</select>
						<div class="text-danger" id="reg_gender_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span id="dodate">Date of Birth <span style="color:#F00">*</span> :</span>
						<span id="estdate" style="display:none"> <span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" autocomplete="off" class="form-control hasDatepicker" name="reg_dob" id="reg_dob" placeholder="DD/MM/YYYY">
						<div class="text-danger" id="reg_dob_error" style="display:none;"></div>
					</div>
				</div>
			
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Relation Type <span style="color:#F00">*</span></div>
					<div class=" col-xs-12 col-sm-8">
						<select class="form-control" name="relationtype" id="relationtype">
						<option value="0">-Select-</option>
						<option value="Son Of">Son of</option>
						<option value="Daughter Of">Daughter of</option>
						<option value="Wife Of">Wife of</option>
						<option value="Father Of">Father of</option>
						<option value="Mother Of">Mother of</option>
					</select>

					<input type="text" autocomplete="off" placeholder="Enter Relation Name" class="form-control" name="relationtypename" id="relationtypename" maxlength="50" style="margin-top: 16px;">

					<div class="text-danger" id="relationtype_error" style="display:none;"></div>
					</div>
			    </div>
			    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">Address (Street) <span style="color:#F00">*</span> :</div>
					<div class="col-lg-10 col-md-10 col-xs-12 col-sm-8">
						<textarea class="form-control" style="width:100%;" rows="4" cols="30" maxlength="150" name="address" id="reg_street" oncopy="return false" onpaste="return false"> </textarea>
						<div class="text-danger" id="reg_street_error" style="display:none;"></div>
					</div>
			   	</div>
			</div>                                     
	
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Pincode :</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" autocomplete="off" class="form-control" name="pin" id="reg_pin" maxlength="6" onkeypress="return isNumber(event)" pattern="^[67890]\d{9}$">
						<div class="text-danger" id="reg_pin_error" style="display:none;"></div>
					</div>
				</div>
					
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">State <span style="color:#F00">*</span>:</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="state" id="state">

    <?php foreach ($states as $state) : ?>
        <option value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
    <?php endforeach; ?>
						</select>
						<div class="text-danger" id="add_state_error" style="display:none;"></div>
					</div>
				</div>
			
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">District <span style="color:#F00">*</span>:</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="district" id="city">
							<option value="0">-Select-</option>
						</select>

						<div class="text-danger" id="add_district_error" style="display:none;"></div>
					</div>
				</div>
			</div>
			
		
					
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Post <span style="color:#F00">*</span>:</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				   <input type="text" autocomplete="off" class="form-control" name="post" id="add_post" maxlength="40">
						<div class="text-danger" id="add_post_error" style="display:none;"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Photo Id Type						<span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="photoidtype" id="photoidtype" onchange="changeValue(this);">
							<option value="0">-Select-</option>
							<option value="Adhaar">Aadhar</option>
							<option value="PAN card">PAN card</option>
							<option value="ration">Ration card</option>
							<option value="driving">Driving License</option>
							<option value="voter">Voter ID</option>
							<option value="passport">Passport</option>
						</select>
						<div class="text-danger" id="photoidtype_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Photo ID Number						<span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" autocomplete="off" class="form-control" name="idnumber" id="idnumber" onblur="onBlurPhotoIdNo()" maxlength="16">
						<div class="text-danger" id="idnumber_error" style="display:none;"></div>
					</div>
				</div>
	
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Mobile No. <span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" autocomplete="off" class="form-control" name="mobile" id="reg_mobile" onkeypress="return isNumber(event)" pattern="^[67890]\d{9}$" maxlength="10" onblur="onBlurMobileNo()">
						<div class="text-danger" id="reg_mobile_error" style="display:none;"></div>
					</div>
				</div>
			</div>
			<!-- for new fpo changes -->
			<div class="h-space-padd-r col-lg-12 pt-2" id="fpo_div" style="display: none;">
				<h3 class="p-title" style="background-image: url(./Images/bg.jpg);"><span style="font-size: 15px;">FPO Organization Details</span></h3>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 collectionbox" style="padding-top: 20px; display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Collection Center <span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="collection" id="collection">
							<option value="0">-Select-</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<div class="text-danger" id="collection_error" style="display:none;"></div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top:20px;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Email ID <span style="color:#F00">*</span>:
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" autocomplete="off" class="form-control" name="email" id="reg_email" maxlength="50" onblur="onBlurEmail()">
						<div class="text-danger" id="reg_email_error" style="display:none;"></div>
					</div>
				</div>

				<div style="margin-top:43px; display: none;" id="justBeforeEmail">
					<br>
					<span style="color:red;"><small><b>Note - </b></small>Please make sure correct mail ID is mentioned in <b>" Email ID "</b> field as all future communications from eNAM will be sent on same Email ID.</span>
				</div>
			<div id="firm_detail_section">
				<!-- for new trader changes -->
				<div class="h-space-padd-r col-lg-12 pt-2" id="firm_div" style="display: none;">
					<h3 class="p-title" style="background-image: url(./Images/bg.jpg);"><span style="font-size: 15px;">Firm Details</span></h3>
				</div>
				<!-- trader changes end -->

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 comname-div" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span id="compname">Company Name<span style="color:#F00">*</span> :</span>
						<span id="copname" style="display:none;">Co-operative Name<span style="color:#F00">*</span> :</span>
						<span class="firmname" style="display:none;">Firm Name<span style="color:#F00">*</span> :</span>  
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="company_name" id="company_name" class="form-control" autocomplete="off" maxlength="100">
						<div class="text-danger" id="company_name_error" style="display:none;"></div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 companyreg-div" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span id="compreg">Company Reg. No.<span id="span_compregnoast" style="color:#F00">*</span> :</span>
						<span id="iecno" style="display:none">IEC No.<span style="color:#F00">*</span> :</span>
						<span id="firmno" style="display:none">Firm Reg. No.<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="company_reg" id="company_reg" class="form-control" autocomplete="off" onkeypress="return toCheckSpecialChars(event)" maxlength="21">
						<div class="text-danger" id="company_reg_error" style="display:none;"></div>
					</div>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 licence oncommo">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span class="lincno">License No.<span style="color:#F00">*</span> :</span>
						<span class="coregno" style="display:none;">Co-operative Reg. No.<span style="color:#F00">*</span> :</span>
						<span class="apmc_unilicenseno" style="display:none;">Apmc/Unified License No.<span style="color:#F00">*</span> :</span>  
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="unified_license" id="unified_license" class="form-control" autocomplete="off">
					</div>
				</div>

				<!-- new change for trader -->
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fortrader oncommo" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span>License Valid From<span style="color:#F00">*</span> :</span> 
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="license_fromDate" id="license_fromDate" class="form-control hasDatepicker" placeholder="DD/MM/YYYY" autocomplete="off">
						<div class="text-danger" id="license_fromDate_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fortrader oncommo" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span>License Valid Upto<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="license_toDate" id="license_toDate" class="form-control hasDatepicker" placeholder="DD/MM/YYYY" autocomplete="off">
						<div class="text-danger" id="license_toDate_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fortrader" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span>Firm Address<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="firm_add" id="firm_add" class="form-control" autocomplete="off">
						<div class="text-danger" id="firm_add_error" style="display:none;"></div>
					</div>
				</div>
				<!-- end changes -->
			</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 ogname-div" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Organisation Name<span style="color:#F00">*</span> :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="org_name" id="org_name" class="form-control" autocomplete="off" maxlength="145">
						<div class="text-danger" id="org_name_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 orgadd-div" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					
						<span id="span_orgadd">Organisation Address<span style="color:#F00">*</span> :</span>
						<span id="span_cooperadd" style="display:none">Co-operative Address<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="org_address" id="org_address" class="form-control" autocomplete="off">
						<div class="text-danger" id="org_address_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 orgcin-div" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span id="span_orgcin">Organisation CIN<span style="color:#F00">*</span> :</span>
						<span id="span_orgregno">Organisation Reg. No.<span style="color:#F00">*</span> :</span>
						<span id="span_orgcinregno">Organization CIN/ Reg No<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="org_cin" id="org_cin" class="form-control" autocomplete="off" onkeypress="return toCheckSpecialChars(event)" maxlength="21">
						<div class="text-danger" id="org_cin_error" style="display:none;"></div>
					</div>
				</div>

				<!-- fpo related state, district, tehsil, village pin code -->

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fpo-comp-reg" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span class="fpoorgpin">Org Pincode<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="fpo_org_pin" id="fpo_org_pin" class="form-control" required="" maxlength="6" onkeypress="return isNumber(event)" pattern="^[67890]\d{9}$" autocomplete="off">
						<div class="text-danger" id="fpo_org_pin_error" style="display:none;"></div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fpo-comp-reg" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span>Fpo State<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="fpo_state" id="fpo_state" required=""><option value="-select-">-Select-</option><option value="202302201-ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option><option value="99157-ANDAMAN AND NICOBAR ISLANDS (UT)">ANDAMAN AND NICOBAR ISLANDS (UT)</option><option value="9990-ANDHRA PRADESH">ANDHRA PRADESH</option><option value="99158-ARUNACHAL PRADESH">ARUNACHAL PRADESH</option><option value="99159-ASSAM">ASSAM</option><option value="99119-BIHAR">BIHAR</option><option value="99115-CHANDIGARH (UT)">CHANDIGARH (UT)</option><option value="50-CHHATTISGARH">CHHATTISGARH</option><option value="99118-DELHI (UT)">DELHI (UT)</option><option value="99160-GOA">GOA</option><option value="9961-GUJARAT">GUJARAT</option><option value="9997-HARYANA">HARYANA</option><option value="9998-HIMACHAL PRADESH">HIMACHAL PRADESH</option><option value="99156-JAMMU AND KASHMIR (UT)">JAMMU AND KASHMIR (UT)</option><option value="99100-JHARKHAND">JHARKHAND</option><option value="99122-KARNATAKA">KARNATAKA</option><option value="99155-KERALA">KERALA</option><option value="99161-LADAKH (UT)">LADAKH (UT)</option><option value="99162-LAKSHADWEEP (UT)">LAKSHADWEEP (UT)</option><option value="99103-MADHYA PRADESH">MADHYA PRADESH</option><option value="12-MAHARASHTRA">MAHARASHTRA</option><option value="99163-MANIPUR">MANIPUR</option><option value="99164-MEGHALAYA">MEGHALAYA</option><option value="99169-MIZORAM">MIZORAM</option><option value="99165-NAGALAND">NAGALAND</option><option value="99117-ODISHA">ODISHA</option><option value="5001-PUDUCHERRY (UT)">PUDUCHERRY (UT)</option><option value="99114-PUNJAB">PUNJAB</option><option value="99109-RAJASTHAN">RAJASTHAN</option><option value="99166-SIKKIM">SIKKIM</option><option value="99121-TAMIL NADU">TAMIL NADU</option><option value="28-TELANGANA">TELANGANA</option><option value="99167-THE DADRA AND NAGAR HAVELI AND DAMAN AND DIU (UT)">THE DADRA AND NAGAR HAVELI AND DAMAN AND DIU (UT)</option><option value="99168-TRIPURA">TRIPURA</option><option value="99113-UTTAR PRADESH">UTTAR PRADESH</option><option value="99116-UTTARAKHAND">UTTARAKHAND</option><option value="99120-WEST BENGAL">WEST BENGAL</option></select>
						<div class="text-danger" id="fpo_state_error" style="display:none;"></div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fpo-comp-reg" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span>Fpo District<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="fpo_district" id="fpo_district">
							<option value="0">-Select-</option>
						</select>
						<div class="text-danger" id="fpo_district_error" style="display:none;"></div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fpo-comp-reg" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span>Fpo Tehsil/Sub-district<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="fpo_tehsil" id="fpo_tehsil">
							<option value="0">-Select-</option>
						</select>
						<div class="text-danger" id="fpo_tehsil_error" style="display:none;"></div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fpo-comp-reg" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span>Fpo City/Village<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="fpo_village" id="fpo_village">
							<option value="0">-Select-</option>
						</select>
						<div class="text-danger" id="fpo_village_error" style="display:none;"></div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 fpo-comp-reg" style="display: none;">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<span>Establishment Date<span style="color:#F00">*</span> :</span>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="fpo_estdate" id="fpo_estdate" class="form-control hasDatepicker" required="" placeholder="YYYY-MM-DD" autocomplete="off">
					</div>
				</div>
				

				<!--  -->
				
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2 co-type" id="co-type" style="display:none">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Co-operative Type					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<select class="form-control" name="cop_type" id="cop_type">
							<option value="0">Select Please</option>
							<option value="gen_cop">General Co-Operatives</option>
							<option value="wdra_cop">WDRA Acc. Co-operatives</option>
						</select>
						<div class="text-danger" id="cop_type_error" style="display:none;"></div>
					</div>
				</div>
			

			</div>
			
			
			<div style="display:none" class="row service-provider" id="service-provider">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Landline No. *:
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="landline_no" id="landline_no" class="form-control">
						<div class="text-danger" id="landline_no_error" style="display:none;"></div>
					</div>
				</div>
				
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="showTotalTurnover" style="padding-top:20px;display:none;">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          Total Turnover :                                                                 
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <input type="text" autocomplete="off" class="form-control" name="totalturnover" id="totalturnover" maxlength="50">
                    </div>
                </div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						Year of Establishment *:
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="year_est" id="year_est" class="form-control">
						<div class="text-danger" id="year_est_error" style="display:none;"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pt-2">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						GST :
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<input type="text" name="gst" id="gst" class="form-control">
						<div class="text-danger" id="gst_error" style="display:none;"></div>
					</div>
				</div>
			</div>
			<div style="margin-top:30px;" id="afterBeforeEmail">
				<span style="color:red;"><small><b>Note - </b></small>Please make sure correct mail ID is mentioned in <b>" Email ID "</b> field for sending credencial of Krishi Bharat Portal.</span>
			</div>
			
					<div class="reg__ack">
						<div class="registration__ack">
							<p>Registration credencial : </p>
						</div>
						<div class="check">
							<input type="checkbox" id="sms" name="sms" value="sms">
							<label for="sms">On SMS </label>
						</div>
						<div class="check">
							<input type="checkbox" id="mail" name="mail" value="mail">
							<label for="mail">On Email </label>
						</div>
					</div>
				</div>

			<div style="width:100%; margin:10px auto; border-top:1px solid #eeeeee;"></div>
		
			<input type="hidden" name="registration_category" id="registration_category">
			<input type="hidden" name="notifyDeNotify" id="notifyDeNotify">
			<input type="hidden" name="unifiedNotifyDeNotify" id="unifiedNotifyDeNotify">
			<div class="row">
				<div class="col-lg-12" align="center">
					<button id="enam_registration" type="submit" class="btn btn-success" style="margin-right: 20px;padding-left:20px;padding-right: 20px;">Submit</button>
					<button id="enam_registration" type="button" class="btn btn-success" style="margin-right: 20px;padding-left:20px;padding-right: 20px;">Cancel</button>
				</div>
				
			</div>	
			

		</form>
		<!------------------------- end changes -------------------->			
	
        </div>
    <footer class="footer1">
        <p>Copyright © Krishi Bharat 2024 All Rights Reserved.</p>
    </footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
        $(document).ready(function() {
            $('#state').change(function() {
                var state_id = $(this).val();
                if(state_id !== '') {
                    $.ajax({
                        url: '<?= base_url('getCitiesByState'); ?>',
                        type: 'post',
                        data: {state_id: state_id},
                        dataType: 'json',
                        success: function(response) {
                            $('#city').empty();
                            $('#city').append('<option value="">Select City</option>');
                            $.each(response, function(index, data) {
                                $('#city').append('<option value="'+data.id+'">'+data.city+'</option>');
                            });
                        }
                    });
                }
            });
        });

</script>
  </body>
</html>
