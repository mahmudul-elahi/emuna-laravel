 <div class="row">
     <div class="col-md-10">
         <div class="select-vending">
             <h5>Choose Size</h5>
             <div class="vending-card">
                 <div class="row">
                     <div class="col-md-4">
                         <label class="card-list" for="size_small">
                             <div class="img">
                                 <img src="{{ asset('assets/client/images/vending/vending1.png') }}" alt="Vending Small">
                             </div>
                             <div class="text-vending d-flex align-items-start justify-content-between">
                                 <div class="btn-left">
                                     <div class="d-flex align-items-center gap-2 mb-2">
                                         <input type="radio" id="size_small" name="vending_size" value="small">
                                         <h3 class="m-0 ml-2">Small</h3>
                                     </div>
                                     <p>Size: 72 x 32 x 24</p>
                                 </div>
                                 <div class="btn-right">
                                     <button type="button">Free</button>
                                 </div>
                             </div>
                         </label>
                     </div>

                     <div class="col-md-4">
                         <label class="card-list" for="size_medium">
                             <div class="img">
                                 <img src="{{ asset('assets/client/images/vending/vending2.png') }}"
                                     alt="Vending Medium">
                             </div>
                             <div class="text-vending d-flex align-items-start justify-content-between">
                                 <div class="btn-left">
                                     <div class="d-flex align-items-center gap-2 mb-2">
                                         <input type="radio" id="size_medium" name="vending_size" value="medium">
                                         <h3 class="m-0 ml-2">Medium</h3>
                                     </div>
                                     <p>Size: 72 x 32 x 24</p>
                                 </div>
                                 <div class="btn-right">
                                     <button type="button">Free</button>
                                 </div>
                             </div>
                         </label>
                     </div>

                     <div class="col-md-4">
                         <label class="card-list" for="size_large">
                             <div class="img">
                                 <img src="{{ asset('assets/client/images/vending/vending3.png') }}"
                                     alt="Vending Large">
                             </div>
                             <div class="text-vending d-flex align-items-start justify-content-between">
                                 <div class="btn-left">
                                     <div class="d-flex align-items-center gap-2 mb-2">
                                         <input type="radio" id="size_large" name="vending_size" value="large">
                                         <h3 class="m-0 ml-2">Large</h3>
                                     </div>
                                     <p>Size: 72 x 32 x 24</p>
                                 </div>
                                 <div class="btn-right">
                                     <button type="button">Free</button>
                                 </div>
                             </div>
                         </label>
                     </div>
                 </div>
             </div>
         </div>

         <div class="contract">
             <h3>Contract Details</h3>
             <div class="contract-list">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" id="quarterlyMaintenance"
                         name="maintenance_agreement">
                     <label class="form-check-label" for="quarterlyMaintenance">
                         <span>Maintenance Agreement:</span> Quarterly maintenance at €50 per
                         session
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" id="renewalTerms" name="renewal_terms">
                     <label class="form-check-label" for="renewalTerms">
                         <span>Renewal Terms:</span> Auto-renewal for another 6 months
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" id="terminationClause" name="termination_clause">
                     <label class="form-check-label" for="terminationClause">
                         <span>Termination Clause:</span> 30 days' notice
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" id="paymentMethod" name="payment_method">
                     <label class="form-check-label" for="paymentMethod">
                         <span>Payment Method:</span> PayPal
                     </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" id="paymentBreakdown" name="payment_breakdown">
                     <label class="form-check-label" for="paymentBreakdown">
                         <span>Payment Breakdown:</span> Monthly fee of €200, Service charge
                         at €25, 10% commission on all sales
                     </label>
                 </div>
             </div>
         </div>
     </div>
 </div>
