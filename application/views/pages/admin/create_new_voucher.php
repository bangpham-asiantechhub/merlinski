<h1>Create new voucher</h1>	

<form action="/action_page.php" class="form-horizontal">
    <div class="form-group">
	      <label class="control-label col-sm-3 pull-left label-inline" for="code">Code</label>
	      <div class="col-sm-9">
	      		<div class="radio">
	      			<div class="row">
	      			<div class="col-sm-5 label-inline">
	      				<input id="code_1" type="radio" name="option_code" value="1" checked ><label for="code_1">User defined</label>
	      			</div>
	      			<div class="col-sm-7">
	      				<input type="text" class="form-control" id="description">
	      			</div>
	      			</div>
	      			
	      		</div>	 
	      		           		
	      		
	      </div>
    </div>
    <div class="form-group">
    	 <label class="control-label col-sm-3 pull-left"></label>
	      <div class="col-sm-9">	      		 
	      		<div class="radio">
	      			<input id="code_2" type="radio" name="option_code" value="2"><label for="code_2">Auto generation</label>        			
	      		</div>	           		
	      		
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3" for="email">Mass creation:</label>
	      <div class="col-sm-9">
	      		<div class="row">
		      		<div class="col-sm-5">
		      			<input type="text" class="form-control" id="mass_creation" placeholder="Enter email">
		      		</div>
		      		<span>To use mass creation, Code must be Auto generate</span>
		      	</div>
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3" for="email">Off percentage</label>
	      <div class="col-sm-9">	      		
      			<input type="text" class="form-control" id="off_percent" placeholder="Off percentage">		      		
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3" for="email">Description</label>
	      <div class="col-sm-9">	      		
      			<input type="text" class="form-control" id="description" placeholder="Description">		      		
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3 pull-left" for="code">Uses times</label>
	      <div class="col-sm-9">
	      		<input id="use_1" type="radio" name="gender" value="0" checked><label for="use_1">Single</label>      		
	      		<input id="use_2" type="radio" name="gender" value="1"><label for="use_2">Unlimited</label> 
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3 pull-left" for="code">Valid to</label>
	      <div class="col-sm-9">
	      		<div style="overflow: visible;">
				<div id="form_datetime"></div>
				<input type="hidden" id="useTime">
			</div>	
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3 pull-left"></label>
	      <div class="col-sm-9">
	      		<input class="btn btn-warning btn-lg" type="submit" value="Create">	
	      </div>
    </div>
   
</form>






