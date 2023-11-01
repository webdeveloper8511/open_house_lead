@extends('layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
    <section class="property-page-section d-flex h-100vh p-4 bg-black-50">
      <div class="container-fluid m-auto text-center shadow p-4 rounded">
        <div class="row justify-content-between">
          <div class="col-5 text-left">
            <h2 class="mb-3">Properties, Opens, Events & Visitors</h2>
            <h5 class="mb-4">Create Flyers & Manage Visitors & Properties Here.</h5>
            <a href="{{route('add-edit-property-dt')}}" class="btn btn-primary mb-3 text-light">
              ADD A PROPERTY OR EVENT
            </a>
          </div>
          <div class="col-4 text-start">
            <div class="mb-3 helps-link">
              <h3>Help Links:</h3>
                  <a href="#"><i class="fas fa-home"></i> PROPERTIES & VISITORS</a><br>
                  <a href="#"><i class="far fa-file-pdf"></i> FLYERS</a><br>
                  <a href="#"><i class="fas fa-sign"></i> PROPERTY SITES & RIDERS</a><br>
            </div>
          </div>
        </div>
        <div class="mb-3 bg-blue">
          <span>Open TEXT Sign-in Number: 888-680-8357 | Sign Rider TEXT Number: 888-459-2023</span>
        </div>
        <div class="row mb-3">
          <div class="col-6 d-flex align-items-center gap-2">
            <span>show</span>
            <select class="form-select" aria-label="Default select example">
              <option selected value="5">5</option>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="all">all</option>
            </select>
            <span>entry</span>
          </div>
          <div class="col-6">
            <form class="form-inline my-2 my-lg-0 justify-content-end">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
        <div class="overflow-Scroll">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"><span class="centerr"> Property Address</span></th>
                <th scope="col"><span class="centerr"> Visitors</span></th>
                <th scope="col"><span class="centerr">TEXT Code </span></th>
                <th scope="col"><span class="centerr"> RIDER Code</span></th>
                <th scope="col"><span class="centerr"> View/Add Visitors</span></th>
                <th scope="col"><span class="centerr">Add a Flyer </span></th>
                <th scope="col"><span class="centerr"> Open QRCODE</span></th>
                <th scope="col"><span class="centerr"> PROPERTY SITE</span></th>
                <th scope="col"><span class="centerr"> Edit</span></th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>414 W 18th St</td>
                <td>0</td>
                <td>49740</td>
                <td>
                  <div class="flex align-items-center">
                    <select class="form-select" aria-label="Default select example">
                      <option value="" selected="selected">NONE</option>
                      <option value="375110">375110</option>
                      <option value="375111">375111</option>
                      <option value="375112">375112</option>
                      <option value="375113">375113</option>
                      <option value="375114">375114</option>
                      <option value="375115">375115</option>
                      <option value="375116">375116</option>
                      <option value="375117">375117</option>
                      <option value="375118">375118</option>
                      <option value="375119">375119</option>
                      <option value="375120">375120</option>
                      <option value="375121">375121</option>
                      <option value="375122">375122</option>
                      <option value="375123">375123</option>
                      <option value="375124">375124</option>
                      <option value="375125">375125</option>
                      <option value="375126">375126</option>
                      <option value="375127">375127</option>
                      <option value="375128">375128</option>
                      <option value="375129">375129</option>
                      <option value="375130">375130</option>
                      <option value="375131">375131</option>
                      <option value="375132">375132</option>
                      <option value="375133">375133</option>
                      <option value="375134">375134</option>
                      <option value="375135">375135</option>
                      <option value="375136">375136</option>
                      <option value="375137">375137</option>
                      <option value="375138">375138</option>
                      <option value="375139">375139</option>
                      <option value="375140">375140</option>
                      <option value="375141">375141</option>
                      <option value="375142">375142</option>
                      <option value="375143">375143</option>
                      <option value="375144">375144</option>
                      <option value="375145">375145</option>
                      <option value="375146">375146</option>
                      <option value="375147">375147</option>
                      <option value="375148">375148</option>
                      <option value="375149">375149</option>
                      <option value="375150">375150</option>
                      <option value="375151">375151</option>
                      <option value="375152">375152</option>
                      <option value="375153">375153</option>
                      <option value="375154">375154</option>
                      <option value="375155">375155</option>
                      <option value="375156">375156</option>
                      <option value="375157">375157</option>
                      <option value="375158">375158</option>
                      <option value="375159">375159</option>
                      <option value="375160">375160</option>
                      <option value="375161">375161</option>
                      <option value="375162">375162</option>
                      <option value="375163">375163</option>
                      <option value="375164">375164</option>
                      <option value="375165">375165</option>
                      <option value="375166">375166</option>
                      <option value="375167">375167</option>
                      <option value="375168">375168</option>
                      <option value="375169">375169</option>
                      <option value="375170">375170</option>
                      <option value="375171">375171</option>
                      <option value="375172">375172</option>
                      <option value="375173">375173</option>
                      <option value="375174">375174</option>
                      <option value="375175">375175</option>
                      <option value="375176">375176</option>
                      <option value="375177">375177</option>
                      <option value="375178">375178</option>
                      <option value="375179">375179</option>
                      <option value="375180">375180</option>
                      <option value="375181">375181</option>
                      <option value="375182">375182</option>
                      <option value="375183">375183</option>
                      <option value="375184">375184</option>
                      <option value="375185">375185</option>
                      <option value="375186">375186</option>
                      <option value="375187">375187</option>
                      <option value="375188">375188</option>
                      <option value="375189">375189</option>
                      <option value="375190">375190</option>
                      <option value="375191">375191</option>
                      <option value="375192">375192</option>
                      <option value="375193">375193</option>
                      <option value="375194">375194</option>
                      <option value="375195">375195</option>
                      <option value="375196">375196</option>
                      <option value="375197">375197</option>
                      <option value="375198">375198</option>
                      <option value="375199">375199</option>
                    </select>
                    <a class="btn btn-primary" href=""><i class="fas fa-save"></i> Save</a>
                  </div>
                </td>
                <td><a class="btn btn-primary" href="{{route('show-opens-dt-view-add-visitors')}}" data-toggle="tooltip" title="View"><i class="far fa-eye"></i> View</a></td>
                <td><a class="btn btn-primary" href="{{route('create-flyer22-dt')}}" data-toggle="tooltip" title="Add"><i class="fas fa-plus-circle"></i> Add</a></td>
                <td>
                    <a class="btn btn-primary" href="https://webdevelopment33.com/open_house_lead/dist/img/qrcode-open-50033.png" download data-toggle="tooltip" title="QR"><i class="fas fa-qrcode"></i> QR</a>
                </td>
                <td><span class="">ADD RIDER CODE</span></td>
                  <td><a class="btn btn-primary" href="{{route('add-edit-property-dt-edit')}}" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i> Edit</a></td>
                  <td><a class="btn btn-primary" href="#" onclick="document.getElementById('delete-property').style.display='block'"><i class="fas fa-trash-alt"></i> Remove </a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Easton Town Ctr</td>
                <td>1</td>
                <td>50033</td>
                <td>
                  <div class="flex align-items-center">  
                    <select class="form-select" aria-label="Default select example">
                      <option value="" selected="selected">NONE</option>
                      <option value="375110">375110</option>
                      <option value="375111">375111</option>
                      <option value="375112">375112</option>
                      <option value="375113">375113</option>
                      <option value="375114">375114</option>
                      <option value="375115">375115</option>
                      <option value="375116">375116</option>
                      <option value="375117">375117</option>
                      <option value="375118">375118</option>
                      <option value="375119">375119</option>
                      <option value="375120">375120</option>
                      <option value="375121">375121</option>
                      <option value="375122">375122</option>
                      <option value="375123">375123</option>
                      <option value="375124">375124</option>
                      <option value="375125">375125</option>
                      <option value="375126">375126</option>
                      <option value="375127">375127</option>
                      <option value="375128">375128</option>
                      <option value="375129">375129</option>
                      <option value="375130">375130</option>
                      <option value="375131">375131</option>
                      <option value="375132">375132</option>
                      <option value="375133">375133</option>
                      <option value="375134">375134</option>
                      <option value="375135">375135</option>
                      <option value="375136">375136</option>
                      <option value="375137">375137</option>
                      <option value="375138">375138</option>
                      <option value="375139">375139</option>
                      <option value="375140">375140</option>
                      <option value="375141">375141</option>
                      <option value="375142">375142</option>
                      <option value="375143">375143</option>
                      <option value="375144">375144</option>
                      <option value="375145">375145</option>
                      <option value="375146">375146</option>
                      <option value="375147">375147</option>
                      <option value="375148">375148</option>
                      <option value="375149">375149</option>
                      <option value="375150">375150</option>
                      <option value="375151">375151</option>
                      <option value="375152">375152</option>
                      <option value="375153">375153</option>
                      <option value="375154">375154</option>
                      <option value="375155">375155</option>
                      <option value="375156">375156</option>
                      <option value="375157">375157</option>
                      <option value="375158">375158</option>
                      <option value="375159">375159</option>
                      <option value="375160">375160</option>
                      <option value="375161">375161</option>
                      <option value="375162">375162</option>
                      <option value="375163">375163</option>
                      <option value="375164">375164</option>
                      <option value="375165">375165</option>
                      <option value="375166">375166</option>
                      <option value="375167">375167</option>
                      <option value="375168">375168</option>
                      <option value="375169">375169</option>
                      <option value="375170">375170</option>
                      <option value="375171">375171</option>
                      <option value="375172">375172</option>
                      <option value="375173">375173</option>
                      <option value="375174">375174</option>
                      <option value="375175">375175</option>
                      <option value="375176">375176</option>
                      <option value="375177">375177</option>
                      <option value="375178">375178</option>
                      <option value="375179">375179</option>
                      <option value="375180">375180</option>
                      <option value="375181">375181</option>
                      <option value="375182">375182</option>
                      <option value="375183">375183</option>
                      <option value="375184">375184</option>
                      <option value="375185">375185</option>
                      <option value="375186">375186</option>
                      <option value="375187">375187</option>
                      <option value="375188">375188</option>
                      <option value="375189">375189</option>
                      <option value="375190">375190</option>
                      <option value="375191">375191</option>
                      <option value="375192">375192</option>
                      <option value="375193">375193</option>
                      <option value="375194">375194</option>
                      <option value="375195">375195</option>
                      <option value="375196">375196</option>
                      <option value="375197">375197</option>
                      <option value="375198">375198</option>
                      <option value="375199">375199</option>
                    </select>
                  <a class="btn btn-primary" href=""><i class="fas fa-save"></i> Save</a></div>
                </td>
                <td><a class="btn btn-primary" href="#" data-toggle="tooltip" title="View"><i class="far fa-eye"></i> View</a></td>
                <td><a class="btn btn-primary" href="#" data-toggle="tooltip" title="Add"><i class="fas fa-plus-circle"></i> Add</a></td>
                <td><a class="btn btn-primary" href="#" data-toggle="tooltip" title="QR"><i class="fas fa-qrcode"></i> QR</td>
                <td><span class="">ADD
                  RIDER
                  CODE</span></td>
                  <td><a class="btn btn-primary" href="#" data-toggle="tooltip" title="Edit"><i class="fas fa-edit"></i> Edit</a></td>
                  <td>
                    <a class="btn btn-primary" href="#"><i class="fas fa-trash-alt"></i> Remove</a>
                  </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row mb-3 align-items-center">
          <div class="col-4 text-start d-flex align-items-center">
            <span>Showing 1 to 2 of 2 entries</span>
          </div>
          <div class="col-4 d-flex align-items-center justify-content-center">
            <div class="pagination-box">
              <button class="arrow" id="prevPage" disabled>←</button>
              <div class="pages">
                  <div class="page-number active">1</div>
                  <div class="page-number">2</div>
                  <div class="page-number">3</div>
              </div>
              <button class="arrow" id="nextPage">→</button>
            </div>
          </div>
          <div class="col-4 d-flex justify-content-end">
            <a class="btn btn-primary" href="show-visitors-dt.php">VIEW / EDIT / EXPORT LEADS FROM ALL PROPERTIES</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Delete Property? -->
    <div id="delete-property" class="modal">
      <form class="modal-content" action="/action_page.php">
      <span onclick="document.getElementById('delete-property').style.display='none'" class="close" title="Close Modal">×</span>
        <div class="container py-4 px-3 text-center">
          <h3><b>Delete Property?</b></h3>
          <h6 class="mb-3"><b>Are You Sure You Want To Delete Property?</b></h6>
        
          <div class="clearfix">
            <button type="button" class="btn btn-primary me-2 px-4" onclick="document.getElementById('delete-property').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="button" class="btn btn-danger px-4" onclick="document.getElementById('delete-property').style.display='none'" class="deletebtn">Delete</button>
          </div>
        </div>
      </form>
    </div>
@endsection

