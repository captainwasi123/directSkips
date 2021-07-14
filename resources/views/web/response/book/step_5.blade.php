
<div class="step-wrapper" id="5">
   <div class="container">
      <div class="step-head">
         <h4> <b class="col-orange"> STEP 05 </b> ORDER PREVIEW   </h4>
      </div>
      <div class="step-data">
         <div class="step-width4">
            <div class="order-detail-head">
               <h4 class="col-orange text-left" style="max-width: 700px;margin-left:auto;margin-right:auto"> ORDER DETAILS </h4>
            </div>
            <div class="order-details-content" style="max-width: 700px;margin:auto">
               <p> <b> Drop off Location:  </b> <span> (On Private Property) </span> </p>
               <p> <b> Type of Waste Selected: </b> 
                  <span>
                     @php 
                        $type_of_waste = explode('|', $data['service_type']);
                     @endphp
                     {{$type_of_waste[1]}}
                  </span> 
               </p>
               <p> <b> Skip Size: </b> 
                  <span>
                     @php 
                        $skip_size = explode('|', $data['skip_size']);
                     @endphp
                     {{$skip_size[0]}}
                  </span> 
               </p>
               <p> <b> Delivery Date/Collection Date: </b> 
                  <span> {{$data['delivery_date']}} / {{$data['collection_date']}} </span> 
               </p>
               <p> <b> Total Price (including VAT @ 20%): </b> 
                  <span>
                     {{'£ '.$skip_size[3]}}
                  </span> 
               </p>
            </div>
         </div>
         <hr class="grey-line">
         <div class="step-width4">
            <div class="row">
               <div class="col-md-12 col-lg-7 col-sm-12 col-12">
                  <div class="order-detail-head">
                     <h4 class="col-orange text-left"> Delivery/Billing Details </h4>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="order-details-content">
                           <p> <b> First Name:  </b> <span> {{$data['first_name']}} </span> </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="order-details-content">
                           <p> <b> Last Name:  </b> <span> {{$data['last_name']}} </span> </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="order-details-content">
                           <p> <b> Email:  </b> <span> {{$data['email']}} </span> </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="order-details-content">
                           <p> <b> Tel No:  </b> <span> {{$data['phone']}} </span> </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="order-details-content">
                           <p> <b> Address:  </b> <span> {{$data['address']}} </span> </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="order-details-content">
                           <p> <b> Address 2:  </b> <span> {{$data['city']}} </span> </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="order-details-content">
                           <p> <b> County:  </b> <span>  {{$data['country']}} </span> </p>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="order-details-content">
                           <p> <b> Postcode:  </b> <span> {{$data['t_postcode']}} {{$data['cust_postcode']}} </span> </p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="order-details-content">
                           <p class="custom-margin-1"> <b> Delivery Instructions:  </b> <span> {{$data['comments']}} </span> </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5 col-lg-5 col-sm-12 col-12">
                  <div class="order-detail-head">
                     <h4 class="col-orange text-left"> Different Billing Details </h4>
                  </div>
                  <div class="order-details-content">
                     <p> <b> Address:  </b> <span> {{empty($data['b_address']) ? '-' : $data['b_address']}} </span> </p>
                     <p> <b> Address 2: </b> <span> {{empty($data['b_city']) ? '-' : $data['b_city']}} </span> </p>
                     <p> <b> County: </b> <span> {{empty($data['b_country']) ? '-' : $data['b_country']}} </span> </p>
                     <p> <b> Postcode: </b> <span> {{empty($data['b_postal_code']) ? '-' : $data['b_postal_code']}} </span> </p>
                  </div>
               </div>
            </div>
            <div class="next-step">
               <button type="submit" class="next-step-btn"> Pay </button>
            </div>
         </div>
      </div>
   </div>
</div>