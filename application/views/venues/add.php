<?php
/**
* add.php view page for generic Venue controller
*
* views/venues/add.php
*
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Venues
* @author Anna Atiagina, Jenny Crimp
* @version 2.0 2015/08/11
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Venues_model.php
* @see Venues.php
* @todo none
*/

$this->load->view($this->config->item('theme').'header');
$attributes = array('class'=>'form-horizontal', 'role'=>'form');
?>

<div class="container">
  <div class="col-lg-10">
      <!--error messages for form validation -->
    
      <div class="text-danger"><?php echo validation_errors(); ?></div>
      
      <?php echo form_open('venues/add', $attributes); ?>
        <!--<form class="form-horizontal" role="form" method="post">-->

            <fieldset>
                <div class="form-group">
                <h1><strong>Add a Startup Venue</strong></h1><br />
                <legend><h3><strong>Venue Information</strong></h3></legend>

            </div>
            <div class="form-group">
                <label for="VenueName" class="col-lg-3 control-label" required><em>Venue Name*</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="VenueName" name="VenueName" placeholder="Venue Name"><?php echo form_error('VenueName'); ?>
                    </div>
            </div>

            <div class="form-group">
                <label for="VenueAddress" class="col-lg-3 control-label" required><em>Venue Address*</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="VenueAddress" name="VenueAddress" placeholder="Venue Address"><?php echo form_error('VenueAddress'); ?>
                    </div>
            </div>
            <div class="form-group">
                <label for="City" class="col-lg-3 control-label"><em>City*</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="City" name="City" placeholder="City"><?php echo form_error('City'); ?>
                    </div>
            </div>
            <div class="form-group">
                <label for="State" class="col-lg-3 control-label"><em>State*</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="State" name="State" placeholder="State"><?php echo form_error('State'); ?>
                    </div>
            </div>
            <div class="form-group">
                <label for="ZipCode" class="col-lg-3 control-label"><em>Zip Code*</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="ZipCode" name="ZipCode" placeholder="Zip Code"><?php echo form_error('ZipCode'); ?>
                    </div>
            </div>
            <div class="form-group">
                <label for="VenuePhone" class="col-lg-3 control-label"><em>Phone number*</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="VenuePhone" name="VenuePhone" placeholder="Venue Phone Number"><?php echo form_error('VenuePhone'); ?>
                    </div>
             </div>
            <div class="form-group">
                <label for="VenueWebsite" class="col-lg-3 control-label"><em>Website</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="VenueWebsite" name="VenueWebsite" placeholder="Venue Website">
                    </div>
            </div>
           <div class="form-group">
            <label for="VenueHours" class="col-lg-3 control-label"><em>Hours</em></label><br>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="VenueHours" name="VenueHours" placeholder="Venue Hours">
                </div>
           </div>
          <div class="form-group">
              <label for="VenueTypeKey" class="col-lg-3 control-label"><em>Venue Type</em></label>
                  <div class="col-md-6">
                      <select class="form-control" id="VenueTypeKey" name="VenueTypeKey">
                          <option value="1">Cafe/Coffee Shop</option>
                          <option value="2">Library</option>
                          <option value="3">School</option>
                          <option value="4">Community Center</option>
                          <option value="5">Other</option>
                      </select>
                  </div>
                </div>
        </fieldset>
            
        <fieldset>   
        <legend><h3><strong>Venue Amenities</strong></h3></legend>
           <div class="form-group">
              <label for="Food" class="col-lg-3 control-label"><em>Venue Amenities</em></label>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="radio-inline">
                            <strong>Food:</strong>
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="Food" value="Yes">Yes
                           </label>
                          <label class="radio-inline">
                            <input type="radio" name="Food" value="No">No
                          </label>
                        </div>
                      <div class="form-group">
                        <label class="radio-inline">
                                <strong>Bar:</strong>
                            </label>
                         <label class="radio-inline">
                                <input type="radio" name="Bar" value="Yes">Yes
                          </label>
                          <label class="radio-inline">
                        <input type="radio" name="Bar" value="No">No<br />
                          </label>
                      </div>
                      <div class="form-group">
                        <label class="radio-inline">
                            <strong>Electrical Outlets:</strong>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Outlets" value="Yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Outlets" value="No">No
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="radio-inline">
                            <strong>WiFi:</strong>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="WiFi" value="Yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="WiFi" value="No">No
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="radio-inline">
                            <strong>Outdoor Seating:</strong>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Outdoor" value="Yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Outdoor" value="No">No
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="radio-inline">
                            <strong>Wheelchair Access:</strong>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Wheelchair" value="Yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Wheelchair" value="No">No
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="radio-inline">
                            <strong>Parking:</strong>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Parking" value="Yes">Yes
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Parking" value="No">No
                        </label>
                      </div>
                      <div class="border2">
                      <button type="submit" class="btn btn-default">Submit</button>
                      </div>
               </div>
            </div>          
      </fieldset>
    </div>
</div>


<?php $this->load->view($this->config->item('theme').'footer'); ?>